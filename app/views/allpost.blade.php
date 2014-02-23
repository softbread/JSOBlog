@extends('guestlayout')

@section('title')
JSOBlog - All Posts
@stop
<!-- section post -->
@section('content')
<section class="section">
  <div class="container">
    <div class="row-fluid">
     
     
        <ul class="posts-grid posts-with-padding-yes three-columns  row-fluid">
        @foreach ($posts as $post)
              <li class="posts-grid-item span4">
              <div class="inner-content">
                 <div class="post-grid-item-wrap">
                <div class="hoverlay"> 
               
                  <div class="image"><img  src="{{$post['image']}}" alt="" >
                    
                  </div>
                  <div class="post-text-wrap-container">
                    <div class="post-text-wrap">
                      <div class="post-meta">
                        <h3>{{$post['title']}}</h3>
                        <div class="post-meta-info"><span>{{$post['author']}}</span><span class="divider">/</span><span>{{$post['date']}}</span></div>
                        <p class="excerpt">{{$post['content']}}</p>
                      </div>
                    </div>
                  </div>
                 
                  
                  <div class="post-text-bottom">
                    <div><a href="/posts/{{$post['postid']}}" class="readmore">Read More<i class="icon-arrow-right8"></i></a><a href="/posts/{{$post['postid']}}" class="comments-info"><i class="icon-blandes-bubble"></i>{{count($post['comments'])}}</a></div>
                  </div>
                </div>
                </div>
                </div> 
              </li>
              @endforeach                     
           </ul>
     
     
      <div class="row-fluid page-nav-container">
            <div class="span8">
              <div class="page-nav"><span class="active">1</span><span><a href="#">2</a></span><span><a href="#">3</a></span><span><a href="#">4</a></span></div>
            </div>
            <div class="span4">
              <div class="page-nav-info">Page 1 of 4</div>
            </div>
          </div>
          
          
     </div></div></section>
@stop
