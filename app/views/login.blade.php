<!DOCTYPE html>

<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Login</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <meta name="MobileOptimized" content="320">
   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL STYLES --> 

   <!-- END PAGE LEVEL SCRIPTS -->
   <!-- BEGIN THEME STYLES --> 
   <link href="css/style-login.css" rel="stylesheet" type="text/css"/>
   <link href="css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
   <!-- BEGIN LOGO -->
   <div class="logo">
      <h1 class="light">JSOBlog</h1>
   </div>
   <!-- END LOGO -->
   <!-- BEGIN LOGIN -->
   <div class="content">
      <!-- BEGIN LOGIN FORM -->
      <form class="login-form" action="index.html" method="post">
         <h3 class="form-title">Login to your account</h3>
         <div class="alert alert-error hide">
            <button class="close" data-dismiss="alert"></button>
            <span>Enter any username and password.</span>
         </div>
         <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <div class="input-icon">
              <i class="icon-envelope"></i>
              <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" />
           </div>
        </div>
        <div class="form-group">
         <label class="control-label visible-ie8 visible-ie9">Password</label>
         <div class="input-icon">
            <i class="icon-lock"></i>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
         </div>
      </div>
      <div class="form-actions">

         <button type="submit" class="btn blue pull-right">
            Login
         </button>    
         <h5 class="aler hidden">Wrong Username or Password.</h5>        
      </div>
      <div class="forget-password">
         <h4>Forgot your password ?</h4>
         <p>
            no worries, click <a href="javascript:;"  id="forget-password">here</a>
            to reset your password.
         </p>
      </div>
      <div class="create-account">
         <p>
            Don't have an account yet ?&nbsp; 
            <a href="javascript:;" id="register-btn" >Create an account</a>
         </p>
      </div>
   </form>
   <!-- END LOGIN FORM -->        
   <form class="forget-form">
      <h3 >Forget Password ?</h3>
      <p>Enter your e-mail address below to reset your password.</p>
      <div class="form-group">
         <div class="input-icon">
            <i class="icon-envelope"></i>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" />
         </div>
      </div>
      <div class="form-actions">
         <button type="button" id="back-btn" class="btn">
            <i class="m-icon-swapleft"></i> Back
         </button>
         <button type="submit" class="btn blue pull-right">
            Submit <i class="m-icon-swapright m-icon-white"></i>
         </button>            
      </div>
   </form>
   <form class="register-form" >
      <h3 >Sign Up</h3>
      <p>Enter your personal details below:</p>
      <div class="form-group">
         <label class="control-label visible-ie8 visible-ie9">Full Name</label>
         <div class="input-icon">
            <i class="icon-font"></i>
            <input class="form-control placeholder-no-fix" type="text" placeholder="User Name" name="username"/>
         </div>
      </div>
      <div class="form-group">
         <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
         <label class="control-label visible-ie8 visible-ie9">Email</label>
         <div class="input-icon">
            <i class="icon-envelope"></i>
            <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email"/>
         </div>
      </div>
      <div class="form-group">
         <label class="control-label visible-ie8 visible-ie9">Password</label>
         <div class="input-icon">
            <i class="icon-lock"></i>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
         </div>
      </div>
      <div class="form-group">
         <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
         <div class="controls">
            <div class="input-icon">
               <i class="icon-ok"></i>
               <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword"/>
            </div>
         </div>
      </div>
      <div class="form-actions">
         <button id="register-back-btn" type="button" class="btn">
            <i class="m-icon-swapleft"></i>  Back
         </button>
         <button type="submit" id="register-submit-btn" class="btn blue pull-right">
            Sign Up <i class="m-icon-swapright m-icon-white"></i>
         </button>            
      </div>
   </form>
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
   2014 &copy; JSOBlog.
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->   
   <!--[if lt IE 9]>
   <script src="assets/plugins/respond.min.js"></script>
   <script src="assets/plugins/excanvas.min.js"></script> 
   <![endif]-->   
   <script src="plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
   <script src="plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
   <script src="plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="plugins/jquery.cookie.min.js" type="text/javascript"></script>
   <script src="plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script src="plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
   <script src="plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
   <script type="text/javascript" src="plugins/select2/select2.min.js"></script>
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="scripts/login.js" type="text/javascript"></script>      
   <!-- END PAGE LEVEL SCRIPTS --> 
   <script>
   jQuery(document).ready(function() {     
    Login.init();
 });
   </script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>