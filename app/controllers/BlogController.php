<?php

use Illuminate\Filesystem\Filesystem;

class BlogController extends BaseController {

	//Login action for admin login
	public function login()
	{
		if(Input::has('email') && Input::has('password'))
		{			
			$fl= new Filesystem();
			$email = e(Input::get('email'));
			$pwd=e(Input::get('password'));	

			// Retriving user data file		
			$jsonString = $fl->get(dirname(__DIR__)."/database/db/user.jdb");
			$data = json_decode($jsonString);

			//Authenticating
			foreach ( $data->user as $user )
			{
				if( $user->email == $email && $user->password == $pwd )
				{					
					Session::put('user',$user->username);
					echo 'success';
				}
				else
				{
					Session::forget('user');
					echo"Fail";
				}
			} 

		}		
	}

	//Display Create post view to admin
	public function showcreate(){

		if(Session::get('user') != ''){
			$user=Session::get('user');			
			$data='Hi, '.$user;
			return View::make('create',array('user' => $data));
		}
		else
		{
			return Redirect::to('/login');
		}

	}

	public function logout()
	{
		Session::forget('user');
		return Redirect::to('/login');
	}

	//Create new post 
	public function create()
	{
		if(Session::get('user') != ''){
			$fl= new Filesystem();

			//Generating Random Post id
			$postid=base_convert(rand(10000,99999),10,36);

			//Retrieving Data
			$title=Input::get('title');
			$tags=Input::get('tags');
			$post=Request::get('post');
			$filename = Input::file('fileupload')->getClientOriginalName();
			$filesize = Input::file('fileupload')->getClientSize();

			//Allowed Extensions
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$tmp = explode(".",$filename);
			$extension=end($tmp);
			$tmptag = explode(",",$tags);
			$tagsf=end($tmptag);

			//Checking File size,allowed extensions and validating all input
			if (($filesize < 800000) && in_array($extension, $allowedExts) && $tags !=='' && $post !=='' && $title!=='')
			{
				$filename=$postid.".".$extension;
				$ob = array('postid'=>$postid,'title' => $title,'image'=>'images/upload/'.$filename ,'content'=>$post,'author'=>Session::get('user'),'date'=>date("Y-m-d"),'comments'=>array(),'tags'=>$tmptag);
				$jsonString = $fl->get(dirname(__DIR__)."/database/db/blog.jdb");			
				$data = json_decode($jsonString,true);
				
				// Adding post object to Blog object 
				array_push($data['blog'], $ob);	

				//Moving image to upload folder
				if(Input::file('fileupload')->move(public_path().'/images/upload', $filename))
				{
					// Writing post to file.
					$fl->put(dirname(__DIR__)."/database/db/blog.jdb","");
					$fl->put(dirname(__DIR__)."/database/db/blog.jdb",json_encode($data));	
				}
				else
				{
					return Response::json(array('error'=>'File Error'), 400);
				}
							
				//return Response::json($data);
			}
			else
			{
				$res = array ("res"=>"File Error");
				return Response::json($res, 400);
			}
		}
		else
		{
			return Redirect::to('/login');
		}
	}

	//Retrieving all post for Guest and admin
	public function posts(){			
			if(Session::get('user') != ''){
				$user=Session::get('user');			
				$user='Hi, '.$user;
				$fl= new Filesystem();
				$jsonString = $fl->get(dirname(__DIR__)."/database/db/blog.jdb");			
				$data = json_decode($jsonString,true);
				return View::make('posts',array('posts' => $data['blog'],'user' => $user));
			}
			else
			{
				$fl= new Filesystem();
				$jsonString = $fl->get(dirname(__DIR__)."/database/db/blog.jdb");			
				$data = json_decode($jsonString,true);
				return View::make('allpost',array('posts' => $data['blog']));
			}

		}

		//Showing post Based on Id(Single post)
		public function show($id)
		{
			$fl= new Filesystem();
			$jsonString = $fl->get(dirname(__DIR__)."/database/db/blog.jdb");			
			$posts = json_decode($jsonString,true);
			
			//Retriving all post id
			foreach ($posts['blog'] as $post) {
				$postids[]= $post['postid'];
			}
			//Checking post exist
				if(in_array($id, $postids))
				{
					foreach ($posts['blog'] as $post) {
						if($id==$post['postid'])
						{
							//Returning post to view
							return View::make('singlepost',array('post' => $post));
						}
					}
					
				}
				else
				{	
					return Redirect::to('/posts');
				}	
		}

		//Commenting
		public function comment()
		{
			try {
			
			$fl= new Filesystem();
			$email=e(Input::get('email'));
			$comment=e(Input::get('comment'));
			$postid=e(Input::get('comment_post_ID'));
			$ob = array('email'=>$email,'comment' => $comment,'date'=>date("Y-m-d"));
			$jsonString = $fl->get(dirname(__DIR__)."/database/db/blog.jdb");			
			$data = json_decode($jsonString,true);
			for($i=0; $i<count($data['blog']); $i++) {
						if($postid==$data['blog'][$i]['postid'])
						{
							//pushing comment into post's comment object
							$b = array(&$data['blog'][$i]['comments']);
							 array_push($data['blog'][$i]['comments'],$ob);	

							 	$fl->put(dirname(__DIR__)."/database/db/blog.jdb","");							 
							 	$fl->put(dirname(__DIR__)."/database/db/blog.jdb",json_encode($data));		
							 	$res = array ("res"=>"success","hash"=>md5( strtolower( trim($email))));
								return Response::json($res, 200);		
						}
						
					}

	
			} catch (Exception $e) {
					$res = array ("res"=>"Error");
									return Response::json($res, 400);
			}

		}

		// Showing Post Edit page to admin based on id
		function showedit($id)
		{
			if(Session::get('user') != ''){
				$user=Session::get('user');			
				$data='Hi, '.$user;
				$fl= new Filesystem();
				$jsonString = $fl->get(dirname(__DIR__)."/database/db/blog.jdb");			
				$posts = json_decode($jsonString,true);
				
				foreach ($posts['blog'] as $post) {
					$postids[]= $post['postid'];
				}
					if(in_array($id, $postids))
					{
						foreach ($posts['blog'] as $post) {
							if($id==$post['postid'])
							{
								return View::make('edit',array('post' => $post,'user' => $data));
							}
						}					
					}
					else
					{	
						return Redirect::to('/posts');
					}	
			}
			else
			{
				return Redirect::to('/login');
			}
		}

		//Handling post request of edit. updating blog post file.
		function edit()
		{		
			if(Session::get('user') != ''){
			try {
			
			$fl= new Filesystem();
			$title=e(Input::get('title'));
			$tags=e(Input::get('tags'));
			$post=(Request::get('post'));
			$postid=e(Input::get('postid'));
			$tmptag = explode(",",$tags);
			
			if( $title ==='' || $tags === '' || $post === '')
			{
				$res = array ("res"=>"Error");
				return Response::json($res, 400);
			}
			else
			{
				//if new image uploded than update it.
				$filename;
				if (Input::hasFile('fileupload'))
				{
					$filename = Input::file('fileupload')->getClientOriginalName();
					$filesize = Input::file('fileupload')->getClientSize();
					$allowedExts = array("gif", "jpeg", "jpg", "png");
					$tmp = explode(".",$filename);
					$extension=end($tmp);
					$filename=$postid.".".$extension;
					Input::file('fileupload')->move(public_path().'/images/upload', $filename);
					$filename='images/upload/'.$filename;	
				}	
				else
				{
					$filename=e(Input::get('image'));
				}

				$jsonString = $fl->get(dirname(__DIR__)."/database/db/blog.jdb");			
				$data = json_decode($jsonString,true);
				for($i=0; $i<count($data['blog']); $i++) {
					if($postid==$data['blog'][$i]['postid'])
					{
						//update post with new content
						$data['blog'][$i]['title']=$title;	
						$data['blog'][$i]['tags']=$tmptag;	
						$data['blog'][$i]['image']=$filename;					
						//array_push($data['blog'][$i]['tags'],$tmptag);	
						$data['blog'][$i]['content']=$post;
				 		$fl->put(dirname(__DIR__)."/database/db/blog.jdb","");							 
						$fl->put(dirname(__DIR__)."/database/db/blog.jdb",json_encode($data));		
						$res = array ("res"=>"success");
						return Response::json($res, 200);	
					}				
					
				}
			}
			} catch (Exception $e) {
					$res = array ("res"=>"Error");
									return Response::json($res, 400);
			}
		}
		else
		{
			return Redirect::to('/login');
		}
		}

}