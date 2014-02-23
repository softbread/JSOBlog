@extends('guestlayout')
@section('content')
<!-- Section post -->
@section('title')
JSOBlog - {{$post['title']}}
@stop
<section class="section-with-sidebar">
  <div class="container">
    <div class="row-fluid">
      <div  class="content span12">
        <div class="inner-content">
          <div id="post-2355" class="post post-standard post-single  clearfix">
            <div class="post-left-container">
              <div class="post-date-container">
                <div class="date">
                  <span class="day">{{date("d", strtotime($post['date']))}}</span>
                  <span class="month">{{date("M", strtotime($post['date']))}}</span>
                </div>
              </div>
              <div class="post-meta-container">
                <div>
                  <span class="label">Posted By</span>
                  <span><a class="" href="#">{{$post['author']}}</a></span>
                </div>
                <div>
                  <span>tags</span>
                  <span>
                     @foreach($post['tags'] as $tag)
                    <a href="#" title={{$tag}} rel="category">{{$tag}}</a> </br>
                    @endforeach
                </div>
              </div>
              <div class="post-comment-info"> <a class="commnets" href="#"><i class="icon-blandes-bubble"></i>{{count($post['comments'])}}</a> </div>
            </div>
            <div class="post-right-container">
              <div class=" hoverlay"> <img  src="http://{{$_SERVER['HTTP_HOST']}}/{{$post['image']}}" height="50%" width="40%" class="attachment-blog-large wp-post-image" alt="Workplace" />
                <div class="overlay"> <a class="icon prettyPhoto" href="http://{{$_SERVER['HTTP_HOST']}}/{{$post['image']}}"><i class="icon-blandes-search"></i></a> </div>
              </div>
              <div class="post-info-container">
                <h2><a href="#"> {{$post['title']}}</a></h2>
                <div class="excerpt">{{$post['content']}}

                </div>
              </div>
            </div>
          </div>


        </div> </div>
      </div>
      <hr>

      <div id="comments">

        <h4 class="textuppercase">{{count($post['comments'])}} Comments</h4>
        <ol class="commentlist">
        @foreach($post['comments'] as $comment)
       
        
          <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent" id="comment-11">
            <div id="div-comment-11" class="comment-body">
              <div class="comment-author vcard"> <img alt='' src='http://www.gravatar.com/avatar/{{md5( strtolower( trim( $comment["email"] ) ) )}}' class='avatar avatar-60 photo' height='60' width='60' />{{$comment['email']}}</h4>

              </div>
              <div class="comment-meta commentmetadata">{{$comment['date']}} </div>
              <p>{{$comment['comment']}}</p>              
            </div>

          </li>

        @endforeach
        
        </ol>
        <div class="comments-navigation">
          <div class="alignleft"></div>
          <div class="alignright"></div>
        </div>
      </div>
      <div id="respond">
        <h4 class="textuppercase">Leave a comment</h4>
        <span class="cancel-comment-reply"><small><a rel="nofollow" id="cancel-comment-reply-link" href="http://brad-web.com/lautus/this-is-another-standard-post/#respond" style="display:none;">Cancel reply</a></small></span>
        <p>Your email address will not be published. All fields are marked. </p>
        <form id="commentform" action="/posts/comment" method="POST">
          <div class="comment-form">
            <div class="row-fluid">

                 <div class="span4">
                  <div class="control-wrap">
                    <span class="icon">
                     <i class="icon-blandes-mail"></i></span>
                     <input type="email" name="email" required id="email" value="Email" size="22" tabindex="2" aria-required='true' />
                   </div>
                 </div>

               </div>
             </div>
             <!--/row-->

             <div class="comment-form">
              <div class="row-fluid">
                <div class="span12">
                  <textarea name="comment" id="comment" cols="58" rows="5" tabindex="4" Placeholder="Your Comment"></textarea>
                </div>
              </div>
            </div>
            <input name="submit" type="submit" id="submit" class="button" tabindex="5" value="Comment" />
            <input type='hidden' name='comment_post_ID' value='{{$post["postid"]}}' id='postid' />            
          </form>
        </div>
      </div>
    </div>

  </div>
</div>

</section>

@stop