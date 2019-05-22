<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
      <!-- PAGE TITLE -->
      <title>Home - Royal yachts</title>

      <!-- META-DATA -->
      <meta http-equiv="content-type" content="text/html; charset=utf-8" >
      <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <section id="r-contact-part" class="r-contact-part">
          <div class="container clearfix">
            <div class="contact-head">
              <span>OUR OFFICE</span>
              <h2>Contact <b>Royal yachts</b> for<br> More Information. </h2>
            </div>

            <div class="row clearfix">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="r-contact-address">
                  <div class="head">Main Office</div>
                  <div class="r-contact-img"><img src="assets/images/contact-img01.jpg" class="img-fluid d-block m-auto" alt=""></div>
                  <div class="address address-cnt"><i class="fa fa-map-marker"></i><b>300</b> Pennsylvania EV, USA</div>
                  <div class="call address-cnt"><i class="fa fa-phone"></i><b>+100</b>-1212-2000</div>
                  <div class="mail address-cnt"><i class="fa fa-envelope"></i>info@royalyachts.com</div>
                </div>
              </div>

              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="r-contact-address">
                  <div class="head">Other Office</div>
                  <div class="r-contact-img"><img src="assets/images/contact-img02.jpg" class="img-fluid d-block m-auto" alt=""></div>
                  <div class="address address-cnt"><i class="fa fa-map-marker"></i><b>300</b> Pennsylvania EV, USA</div>
                  <div class="call address-cnt"><i class="fa fa-phone"></i><b>+100</b>-1212-2000</div>
                  <div class="mail address-cnt"><i class="fa fa-envelope"></i>info@royalyachts.com</div>
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
                  <div class="clearfix">
                    <div class="form-group"><input required="" name="userName"  id="userName" type="text" placeholder="User name"></div>
                    <div class="form-group"><input required="" name="userEmail" id="userEmail" type="email" placeholder="Email Address"></div>
                  </div>
                  <div class="form-group"><input type="text" required="" name="subject" id="subject" placeholder="Title Message"></div>
                  <div class="form-group">
                    <textarea placeholder="Message" name="content" required="" id="content"></textarea>
                  </div>
                  <div class="text-center">
                    <button onClick="sendContact();" class="btn btn-full" >SEND MESSAGE NOW</button>
                  </div> 
                <div class="mt-4 text-uppercase text-white text-center" id="mail-status"></div>
              </div>
            </div>
          </div>
        </section>
        <?php include 'include/footer.php' ?>
      </div>
      <div id="r-to-top" class="r-to-top"><i class="fa fa-angle-up"></i></div>
      <?php include'scriptcontact.php' ?>

  </body>
</html>
