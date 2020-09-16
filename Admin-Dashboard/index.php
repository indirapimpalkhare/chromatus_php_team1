
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Chromatus Consulting | Login </title>
   
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">
      <link rel="stylesheet" type="text/css" href="files/assets/icon/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
	  
 </head>
   <body class="fix-menu">
      <div class="theme-loader">
         <div class="loader-track">
            <div class="loader-bar"></div>
         </div>
      </div>
      <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="login-card card-block auth-body mr-auto ml-auto">
                     <form action="<?php echo $_SERVER['PHP_SELF']; ?>"   method="post" >
                        <!--
						<div class="text-center">
                           <img src="files/assets/images/logo.png" alt="logo.png">
                        </div> -->
                        <div class="auth-box">
                           <div class="row m-b-20">
                              <div class="col-md-12">
                                 <h3 class="text-left txt-primary text-center">Sign In</h3>
                              </div>
                           </div>
                           <hr />
                           <div class="input-group">
                              <input type="email" name="admin_id" class="form-control" required placeholder="Your Email Address">
                              <span class="md-line"></span>
                           </div>
						    <span class="error_msgs" style="color:red;font-size:13px;"> </span>
                           <div class="input-group">
                              <input type="password" name="password" class="form-control" required placeholder="Password">
                              <span class="md-line"></span>
                           </div>
						    <span class="error_msgs" style="color:red;font-size:13px;"> </span>
						   <div class="row m-t-25 text-left">
                              <div class="col-12">
                                 <div class="checkbox-fade fade-in-primary d-">
                                    <label>
                                    <input type="checkbox" value="">
                                    <span class="cr"><i class="cr-icon fa fa-check txt-primary"></i></span>
                                    <span class="text-inverse">Remember me</span>
                                    </label>
                                 </div>
                                 <div class="forgot-phone text-right f-right">
                                    <a href="#" class="text-right f-w-600 text-inverse"> Forgot Password?</a>
                                 </div>
                              </div>
                           </div>
                           <div class="row m-t-30">
                              <div class="col-md-12">
								 <input type="submit" name="login_btn" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="Sign in" />
                              </div>
                           </div>
                           <hr />
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script src="files/bower_components/jquery/js/jquery.min.js"></script>
      <script src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
      <script src="files/bower_components/popper.js/js/popper.min.js"></script>
      <script src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>
      <script src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
      <script src="files/bower_components/modernizr/js/css-scrollbars.js"></script>
      <script src="files/bower_components/i18next/js/i18next.min.js"></script>
      <script src="files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
      <script src="files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
      <script src="files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
      <script src="files/assets/js/common-pages.js"></script>
   </body>
</html>