<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
      <!-- PAGE TITLE -->
      <title>Login-Register - Royal yachts</title>

      <!-- META-DATA -->
      <meta http-equiv="content-type" content="text/html; charset=utf-8" >
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      <meta name="description" content="" >
      <meta name="keywords" content="" >

      <!-- FAVICON -->
      <link rel="shortcut icon" href="assets/images/favicon.png">

      <!-- CSS:: FONTS -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

      <!-- CSS:: MAIN -->
      <link rel="stylesheet" type="text/css" href="assets/css/main.css">
      <link rel="stylesheet" type="text/css" id="r-color-roller" href="assets/color-files/color-08.css">

  </head>
  <body> 
      <div class="r-wrapper">
        
        <?php include 'include/header.php'?>


        <section id="r-login-register">
          <div class="r-login-register">
            <div class="r-login-register-in">
              <div class="r-auth-or">
                <span>OR</span>
              </div>
              <div class="clearfix">
                <div class="r-auth-outer r-login">
                  <div class="r-auth-head">
                    <h2><b>Login</b> Now</h2>
                    <span>Login to our website</span>
                  </div>
                  <div class="r-auth-form">
                    <div class="r-login-fb">
                      <a href="#"><img src="assets/images/fb.jpg" class="img-fluid d-block m-auto" alt=""></a>
                    </div>
                    <div class="r-or-line"><span>OR SIGN IN</span></div>
                    <form action="#">
                      <div class="form-group">
                        <input type="text" class="form-control" required placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" required placeholder="Password">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-full">LOGIN NOW</button>
                      </div>
                    </form>
                    <div class="r-from-inof">
                      <p class="text-center">
                        * Denotes mandatory field. <br>
                        ** At least one telephone number is required.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="r-auth-outer r-register">
                  <div class="r-auth-head">
                    <h2><b>Register</b> Now</h2>
                    <span>Required information for account creation</span>
                  </div>
                  <div class="r-auth-form">
                    <form action="#">
                      <div class="form-group">
                        <input type="text" required class="form-control" placeholder="User name">
                      </div>
                      <div class="form-group">
                        <input type="password" required class="form-control" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <input type="password" required class="form-control" placeholder="Confirm Password">
                      </div>
                      <div class="form-group">
                        <input type="email" required class="form-control" placeholder="Email Address">
                      </div>
                      <div class="form-group">
                        <img src="assets/images/recaptcha.jpg" class="img-fluid d-block m-auto" alt="">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-full">SIGN UP NOW</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="r-get-in-touch">
          <div class="r-get-in-touch">
            <div class="container">
              <div class="r-get-header">
                <span>CONTACT US NOW</span>
                <h2>Keep <b>In Touch.</b></h2>
              </div>
              <div class="r-get-form">
                <form action="#">
                  <div class="clearfix">
                    <div class="form-group"><input type="text" placeholder="User name"></div>
                    <div class="form-group"><input type="email" placeholder="Email Address"></div>
                  </div>
                  <div class="form-group"><input type="email" placeholder="Title Message"></div>
                  <div class="form-group">
                    <textarea placeholder="Message"></textarea>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-full">SEND MESSAGE NOW</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
       <?php include 'include/footer.php' ?>
      </div>
      <div id="r-to-top" class="r-to-top"><i class="fa fa-angle-up"></i></div>
      <!-- JQUERY:: JQUERY.JS -->
      <script src="assets/js/jquery.min.js"></script>

      <!-- JQUERY:: BOOTSTRAP.JS -->
      <script src="assets/js/tether.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>

      <!-- JQUERY:: PLUGINS -->
      <script src="assets/js/plugins/owl/owl.yachtousel.min.js"></script>

    <!-- JQUERY:: CUSTOM -->
      <script src="assets/js/custom.js"></script>

  </body>
</html>
