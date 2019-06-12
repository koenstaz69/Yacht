<header id="header">
          <div class="r-header r-header-inner r-header-strip-03">
            <div class="r-header-strip">
              <div class="container">
                <div class="row clearfix">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="r-logo">
                      <a href="index.php" class="d-inline-block"><img src="assets/images/logo_large.png" class="img-fluid d-block" alt=""></a>
                    </div>
                    <a href="javaScript:void(0)" class="menu-icon"> <i class="fa fa-bars"></i> </a>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="r-header-action float-right">
                      <a href="login-register.php" data-toggle="modal" data-target="#loginModal" > <img src="assets/images/icon_login.png" alt=""> <span>Login</span></a>
                      <a href="#" class="r-search"> <img src="assets/images/icon_search.png" alt=""> <span>Search</span></a>

                      <div class="r-search-wrapper">
                        <div class="r-search-inner">
                          <form>
                              <input type="text" class="r-search-field" placeholder="Search"/>
                              <button type="submit" class="r-search-btn">
                                <i class="fa fa-search"></i>
                              </button>
                          </form>
                        </div>
                      </div> <!-- /r-search-wrapper -->
                    </div>

                      <!-- Modal -->
                      <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Inloggen</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                      
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-primary">Login</button>
                                  </div>
                              </div>
                          </div>
                      </div>

                    <div class="r-nav-section float-right">
                      <nav>
                        <ul>
                          <li><a href="index.php">HOME</a></li>
                          <li class="r-has-child">
                            <a href="Yacht-listing.php">YACHTS</a>
                            <ul class="pl-0 ml-0">
                              <li><a href="Yacht-list-map.php">Yacht List Map</a></li>
                              <li><a href="Yacht-booking.php">Yacht Booking</a></li>
                            </ul>
                          </li>
                         
                          <li><a href="contact.php">CONTACT US</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="r-slider owl-Yachtousel" id="defaultHomeSlider">
              <div class="r-slider-item">
                <img src="assets/images/homepag.jpg" class="img-fluid d-block m-auto" alt="">
                <div class="container">
                  <div class="r-slider-top-content float-left text-left">
                 
                    <h1 class="mb-3"><b class="text-gray-dark">Yacht</b> <span>Rent</span></h1>
                  </div>
                </div>
              </div> 
            </div> 
            <div class="r-form-strip">
              <div class="r-slider-serach r-slider-serach-down form-search dark">
                <form action="#">
                    <div class="form-title">
                        <h2>Search for Your <b>Yacht</b></h2>
                    </div>
                    <div class="row row-inputs">
                      <div class="col-sm-6">
                          <div class="form-group has-icon has-label">
                              <label>Picking Up Location</label>
                              <input type="text" class="form-control" id="formSearchUpLocation" placeholder="Port">
                              <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                          </div>
                      </div> 
                      <div class="col-sm-6">
                          <div class="form-group has-icon has-label">
                              <label>Dropping Off Location</label>
                              <input type="text" class="form-control" id="formSearchOffLocation" placeholder="Port">
                              <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                          </div>
                      </div> 
                      <div class="col-sm-3">
                          <div class="form-group has-icon has-label label" id="datetimepicker2" data-target-input="nearest">
                              <label>Picking Up Date</label>
                              <input type="text" class="form-control datepicker" data-toggle="datetimepicker" data-target="#datetimepicker2" placeholder="dd/mm/yyyy">
                              <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                          </div>
                      </div>
                      <div class="col-sm-3">
                          <div class="form-group has-icon has-label date" id="datetimepicker3" data-target-input="nearest">
                              <label>Picking Up Hour</label>
                              <input type="text" class="form-control" data-toggle="datetimepicker"  data-target="#datetimepicker3" placeholder="20:00 AM">
                              <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                          </div>
                      </div> 
                      <div class="col-sm-3">
                          <div class="form-group has-icon has-label label" id="datetimepicker4" data-target-input="nearest">
                              <label>Dropping Off Date</label>
                              <input type="text" class="form-control datepicker" data-toggle="datetimepicker" data-target="#datetimepicker4" placeholder="dd/mm/yyyy">
                              <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                          </div>
                      </div>
                      <div class="col-sm-3">
                          <div class="form-group has-icon has-label date" id="datetimepicker5" data-target-input="nearest">
                              <label>Dropping Off Hour</label>
                              <input type="text" class="form-control" data-toggle="datetimepicker"  data-target="#datetimepicker5" placeholder="20:00 AM">
                              <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                          </div>
                      </div> 
                      <div class="col-12 mb-3">
                        <hr>
                      </div>
                      <div class="inner col-12 clearfix">
                          <button type="submit" class="btn m-auto d-block float-right btn-full">RESERVED Yacht</button>
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </header>