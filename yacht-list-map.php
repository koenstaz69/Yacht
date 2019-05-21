<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
      <!-- PAGE TITLE -->
      <title>yacht List Map - Royal yachts</title>

      <!-- META-DATA -->
      <meta http-equiv="content-type" content="text/html; charset=utf-8" >
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="" >
      <meta name="keywords" content="" >

      <!-- FAVICON -->
      <link rel="shortcut icon" href="assets/images/favicon.png">

      <!-- CSS:: FONTS -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

      <link rel="stylesheet" type="text/css" href="assets/css/plugins/scrollbar/jquery.mCustomScrollbar.css">

      <!-- CSS:: MAIN -->
      <link rel="stylesheet" type="text/css" href="assets/css/main.css">
      <link rel="stylesheet" type="text/css" id="r-color-roller" href="assets/color-files/color-08.css">

  </head>
  <body> 
   
      <div class="r-wrapper">
       <?php include 'include/header.php'?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12 col-xs-12 r-list-area">
              <div class="r-yacht-search r-yachtlist-search">
                <div class="container">
                  <form>
                    <div class="row">
                      <div class="r-search-full col-md-12">
                       <div class="form-group">
                         <input type="text" class="form-control" placeholder="Search yacht by name or location">
                         <button class="fa fa-search"></button>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                          <label> yacht Brand </label>
                          <select class="form-control">
                            <option>Any Brands</option>
                            <option>Any Brands</option>
                            <option>Any Brands</option>
                            <option>Any Brands</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                          <label> yacht Type </label>
                          <select class="form-control">
                            <option>Any Type</option>
                            <option>Any Type</option>
                            <option>Any Type</option>
                            <option>Any Type</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                          <label> yacht Price </label>
                          <select class="form-control">
                            <option>Price Low to High</option>
                            <option>Price High to Low</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group mb-0">
                          <input type="submit" class="form-control btn-primary" value="Search yacht Now">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="clearfix r-sort-val">
                <div class="pull-left">
                  <span>Sort by : </span>
                  <select class="r-show-yachts-filter">
                    <option value="6"> Name </option>
                    <option value="10"> Price </option>
                    <option value="20"> Age </option>
                  </select>
                </div>
                <div class="pull-right"><span class="r-total-result">6 Search results</span></div>
              </div>
              <div class="r-best-offer-list r-yacht-list-map mCustomScrollbar">
                <div class="row clearfix">
                  <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="r-best-offer-single">
                      <div class="r-best-offer-in">
                        <div class="r-offer-img">
                          <a class="d-inline-block" href="#"><img src="assets/images/yacht-1.png" class="img-fluid d-block m-auto" alt=""></a>
                        </div>
                        <div class="r-best-offer-content">
                          <a href="#"><b>Volk</b> GTR</a>
                          <p>Start at <b>45.00 USD</b> per day</p>
                          <ul class="pl-0 mb-0">
                            <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                            <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                            <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="r-best-offer-single">
                      <div class="r-best-offer-in">
                        <div class="r-offer-img">
                          <a class="d-inline-block" href="#"><img src="assets/images/yacht-1.png" class="img-fluid d-block m-auto" alt=""></a>
                        </div>
                        <div class="r-best-offer-content">
                          <a href="#"><b>Hyundai</b> Z.E</a>
                          <p>Start at <b>45.00 USD</b> per day</p>
                          <ul class="pl-0 mb-0">
                            <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                            <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                            <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="r-best-offer-single">
                      <div class="r-best-offer-in">
                        <div class="r-offer-img">
                          <a class="d-inline-block" href="#"><img src="assets/images/yacht-1.png" class="img-fluid d-block m-auto" alt=""></a>
                        </div>
                        <div class="r-best-offer-content">
                          <a href="#"><b>Audi</b> R8</a>
                          <p>Start at <b>45.00 USD</b> per day</p>
                          <ul class="pl-0 mb-0">
                            <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                            <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                            <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="r-best-offer-single">
                      <div class="r-best-offer-in">
                        <div class="r-offer-img">
                          <a class="d-inline-block" href="#"><img src="assets/images/yacht-1.png" class="img-fluid d-block m-auto" alt=""></a>
                        </div>
                        <div class="r-best-offer-content">
                          <a href="#"><b>Volk</b> GTR</a>
                          <p>Start at <b>45.00 USD</b> per day</p>
                          <ul class="pl-0 mb-0">
                            <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                            <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                            <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="r-best-offer-single">
                      <div class="r-best-offer-in">
                        <div class="r-offer-img">
                          <a class="d-inline-block" href="#"><img src="assets/images/yacht-1.png" class="img-fluid d-block m-auto" alt=""></a>
                        </div>
                        <div class="r-best-offer-content">
                          <a href="#"><b>Hyundai</b> Z.E</a>
                          <p>Start at <b>45.00 USD</b> per day</p>
                          <ul class="pl-0 mb-0">
                            <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                            <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                            <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="r-best-offer-single">
                      <div class="r-best-offer-in">
                        <div class="r-offer-img">
                          <a class="d-inline-block" href="#"><img src="assets/images/yacht-1.png" class="img-fluid d-block m-auto" alt=""></a>
                        </div>
                        <div class="r-best-offer-content">
                          <a href="#"><b>Audi</b> R8</a>
                          <p>Start at <b>45.00 USD</b> per day</p>
                          <ul class="pl-0 mb-0">
                            <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                            <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                            <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="r-best-offer-single">
                      <div class="r-best-offer-in">
                        <div class="r-offer-img">
                          <a class="d-inline-block" href="#"><img src="assets/images/yacht-1.png" class="img-fluid d-block m-auto" alt=""></a>
                        </div>
                        <div class="r-best-offer-content">
                          <a href="#"><b>Volk</b> GTR</a>
                          <p>Start at <b>45.00 USD</b> per day</p>
                          <ul class="pl-0 mb-0">
                            <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                            <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                            <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="r-best-offer-single">
                      <div class="r-best-offer-in">
                        <div class="r-offer-img">
                          <a class="d-inline-block" href="#"><img src="assets/images/yacht-1.png" class="img-fluid d-block m-auto" alt=""></a>
                        </div>
                        <div class="r-best-offer-content">
                          <a href="#"><b>Hyundai</b> Z.E</a>
                          <p>Start at <b>45.00 USD</b> per day</p>
                          <ul class="pl-0 mb-0">
                            <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                            <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                            <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="r-best-offer-single">
                      <div class="r-best-offer-in">
                        <div class="r-offer-img">
                          <a class="d-inline-block" href="#"><img src="assets/images/yacht-1.png" class="img-fluid d-block m-auto" alt=""></a>
                        </div>
                        <div class="r-best-offer-content">
                          <a href="#"><b>Audi</b> R8</a>
                          <p>Start at <b>45.00 USD</b> per day</p>
                          <ul class="pl-0 mb-0">
                            <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                            <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                            <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-4 col-xs-12 p-0 r-map-area">
              <div class="r-hide-yacht-list r-flip-map">
                <span>HIDE yacht LIST</span>
                <i class="fa fa-angle-up"></i>
              </div>
              <div class="google-map r-google-map-list">
                <div id="map-canvas"></div>
              </div>
            </div>
          </div>
        </div>
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

      <script src="assets/js/custom.js"></script>

      <script src="assets/js/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

      <script src="assets/js/map.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl-EDTJ5_uU3zBIX7-wNTu-qSZr1DO5Dw"></script>
  </body>
</html>
