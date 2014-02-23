<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>@yield('title')</title>
<link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/layout.css" type="text/css" />
<link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/main.css" type="text/css" />
<link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/shortcodes.css" type="text/css" />
<link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/icons.css" type="text/css" />

<link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/responsive.css" type="text/css" />

</head>

<body class="responsive">
<!-- mobile menu Starts Here-->
<div id="mobile_navigation">
  <ul id="mobile_menu" class="mobile_menu">  
    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2614"><a href="/posts">All Posts</a></li>
    
  </ul>
</div>

<!-- End Mobile Navigation -->

<div id="header_space"></div>
<header id="header">
  <section id="main_header_container">
    <div id="main_navigation">
      <div class="container">
        <div class="row-fluid">
          <div class="row-fluid">
            <div class="span12"> 
              
              <!-- logo -->
              
              <div class="logo-container"> <a href="#" id="logo" class="clearfix"><img src="http://{{$_SERVER['HTTP_HOST']}}/images/logo.png" alt="JSOBlog"/></a> </div>
              <div id="toggle-menu"> <a class="toggle-menu" href="#"><i class="icon-list2"></i></a>
                <div class="clear"></div>
              </div>
             
              <ul id="main_menu" class="main_menu">               
                <li id="menu-item-2614" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2614"><a href="/posts">All posts</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

</header>

<!-- End Header -->

<section id="titlebar" class="titlebar">
  <div class="container">
    <div class="row-fluid">
      <h1 class="">My Blog</h1>      
  </div>
</section>
 
 <div>
  @yield('content')  
 </div>



    <section id="copyright">
        <div class="container" >
            <div class="row-fluid">
                <div class="row-fluid">
                    <div class="copyright-text span4 pull-left">
                      <a href='#'>
            JSOBlog
          </a>  <span>&#169;{{date('Y')}}</span>
                        

                    </div>
                    <div class=" textright span8 clearfix">
                        <ul class="social-icons clearfix">
                            <li>

                                <a class="twitter" href="http://www.twitter.com/hirenkavad" target="_blank" title="Twitter">

                                    <i class="icon-twitter">
                </i>

                                </a>

                            </li>
                           
                            <li>

                                <a class="facebook" href="http://www.facebook.com/ihirenkavad" target="_blank" title="Facebook">

                                    <i class="icon-facebook">
                                  </i>

                                </a>

                            </li>     
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Javascript Files --> 
<script type="text/javascript" src="http://{{$_SERVER['HTTP_HOST']}}/plugins/jquery.js"></script>
<script type="text/javascript" src="http://{{$_SERVER['HTTP_HOST']}}/plugins/plugins.js"></script> 
<script type="text/javascript" src="http://{{$_SERVER['HTTP_HOST']}}/plugins/main.js"></script>
 <script type="text/javascript" src="/plugins/jquery.form.js"></script>
<script type="text/javascript" src="/scripts/singlepost.js"></script>
</body>
</html>