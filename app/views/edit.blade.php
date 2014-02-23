@extends('adminlayout')

@section('title')
JSOBlog - Edit Post
@stop

@section('content')
<!-- Section post -->
<section class="section-with-sidebar">
		<form id="formpost" method="POST" action="/posts/edit" enctype="multipart/form-data" >
	<div class="container" style="padding-bottom:10px !important;">
		<div class="row-fluid">

			<div id="respond">
				<h4 class="textuppercase">
					Edit your Post
				</h4>

			
				<div class="comment-form">
					<div class="row-fluid">
						<div class="span4">
							<div class="control-wrap">
								<span class="icon">
									<i class="icon-share">
									</i>
								</span>
								<input type="text" name="title" id="title" size="50" tabindex="1" value ="{{$post['title']}}"  aria-required='true' />
							</div>
						</div>
						<div class="span4">
							<div class="control-wrap">
								<span class="icon">
									<i class="icon-tag">
									</i>
								</span>
								<input type="text" name="tags" id="tags" value="{{implode(',',$post['tags'])}}" size="22" tabindex="2" aria-required='true' />
							</div>
						</div>
						<div class="span4 fileup" style="height: 35px !important;">

							<button class="btn btn-primary">Select Image
							</button>
							<input type="file" id="fileupload" class="fileupload" name="fileupload" />
							

						</div>

					</div>
				</div>
			
			</div>
		</div>
		<!--/row-->

		<div class="comment-form">
			<div class="row-fluid">
				<div class="span12">
					<textarea id="post" class="textarea" name="post" tabindex="4" rows="10" cols="80">
						{{$post['content']}}
					</textarea>
				</div>
			</div>
		</div>
		<input  type="button" name="update" id="update" class="btn btn-primary" tabindex="5" value="Update" />
		<input  type="submit" name="submit" id="save" class="button btn hidden" tabindex="5" value="Submit" />
		<input type="hidden" id="postid" name="postid" value="{{$post['postid']}}"/>
		<input type="hidden"  name="image" value="{{$post['image']}}"/>

	</div>
</div>
</div>

</div>
</div>
</form>
 <script type="text/javascript" src="http://{{$_SERVER['HTTP_HOST']}}/scripts/edit.js"></script>
</section>

@stop


