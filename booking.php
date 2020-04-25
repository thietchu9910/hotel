<?php 
session_start();
require_once "./config/utils.php";
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from redqteam.com/sites/houston/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:56:30 GMT -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Houston | Checkout</title>
  <?php require_once "./_share/style.php"; ?>
</head>
<body class="rq-about-us-template">
<div id="rq-circle-loader-wrapper">
  <div id="rq-circle-loader-center">
    <div class="rq-circle-load">
      <img src="<?= ADMIN_ASSET_URL ?>img/oval.svg" alt="Page Loader">
    </div>
  </div>
</div>
  <div id="main-wrapper">
   <!--================================
                SIDE MENU
    =================================-->
    <!-- PAGE OVERLAY WHEN MENU ACTIVE -->
    <div class="rq-side-menu-overlay"></div>
    <!-- PAGE OVERLAY WHEN MENU ACTIVE END -->

    <div class="rq-side-menu-wrap">
        <!-- OVERLAY -->
        <div class="rq-dark-overlay"></div>
        <!-- OVERLAY END -->

        <div id="rq-side-menu" class="rq-side-menu">
            <div class="rq-side-menu-widget-wrap">
                <div class="rq-login-form-wrapper">
                    <h3>User Login</h3>
                    <p>Login to add new listing </p>

                    <div class="rq-login-form">
                        <form action="#">
                            <input type="text" name="rq-user-name" id="rq-user-input" placeholder="User Name">
                            <input type="password" name="rq-user-password" id="rq-user-password" placeholder="Password">
                            <button type="submit">Login</button>
                        </form>
                    </div>

                    <div class="rq-social-login-opt">
                        <a href="#" class="rq-social-login-btn rq-facebook-login">Login with Facebook</a>
                        <a href="#" class="rq-social-login-btn rq-twitter-login">Login with Twitter</a>
                    </div>

                    <div class="rq-other-options">
                        <a href="#" class="rq-forgot-pass">Forget Password ?</a>
                        <a href="#" class="rq-signup">Sign up</a>
                    </div>
                </div>
            </div>
        </div>

        <button class="rq-side-menu-close-button" id="rq-side-menu-close-button">Close Menu</button>
    </div>
    <!-- SIDE MENU END -->


  <header>
    <!-- Navigation Menu start-->
    <!-- Navigation Menu start-->
    <nav class="navbar rq-header-main-menu navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Navbar Toggle -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Logo -->
            <a class="navbar-brand" href="index.html"><img class="logo" src="<?= ADMIN_ASSET_URL ?>img/logo.png" alt="Houston"></a>
        </div>
        <!-- Navbar Toggle End -->

        <!-- navbar-collapse start-->
        <div id="nav-menu" class="navbar-collapse rq-menu-wrapper collapse" role="navigation">
          <ul class="nav navbar-nav rq-menus">
              <li>
                <a href="index.html">Home</a>
                <ul class="rq-sub-menu">
                    <li>
                        <a href="home.html">Homepage 2</a>
                    </li>
                </ul>
              </li>
              <li>
                <a href="select-room-grid.html">Room</a>
                <ul class="rq-sub-menu">
                    <li>
                        <a href="select-room-grid.html">Room</a>
                    </li>
                    <li>
                        <a href="single-room.html">Single Room</a>
                    </li>
                </ul>
              </li>
              <li>
                <a href="about-us.html">About</a>
              </li>
              <li class="active">
                <a href="checkout.html">Pages</a>
                <ul class="rq-sub-menu">
                    <li>
                        <a href="cart.html">Cart</a>
                    </li>
                    <li>
                        <a href="checkout.html">Check Out</a>
                    </li>
                    <li>
                        <a href="comming-soon.html">Comming Soon</a>
                    </li>
                    <li>
                        <a href="404.html">404</a>
                    </li>
                </ul>
              </li>
              <li>
                <a href="blog.html">Blog</a>
                <ul class="rq-sub-menu">
                    <li>
                        <a href="blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="blog-details.html">Blog Details</a>
                    </li>
                </ul>
              </li>
              <li>
                <a href="contact.html">Contact</a>
              </li>
          </ul>
        </div>
        <!-- navbar-collapse end-->

        <div class="rq-extra-btns-wrapper">
            <div class="rq-language">
                <select class="js-example-placeholder-single form-control">
                    <option value="Eng">EN</option>
                    <option value="Spn">SPN</option>
                    <option value="Ger">GER</option>
                    <option value="Rus">RUS</option>
                </select>
            </div>
            <button id="rq-side-menu-btn" class="cd-btn btn rq-sidemenu-btn"></button>
        </div>

      </div>
    </nav>
    <!-- Navigation Menu end-->
  </header> <!-- / rq-header-section end here-->

    <div class="rq-checkout-banner">
      <div class="rq-checkout-banner-mask">
        <div class="container">
          <div class="rq-checkout-banner-text">
            <div class="rq-checkout-banner-text-middle">
              <h1>booking</h1>
            </div>
          </div>
       </div>
      </div>
    </div><!-- / rq-banner-area-->
    <div class="rq-checkout-form">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="rq-categories">
               <div class="rq-check-in-out-wrapper">
                    <div class="rq-check-in-out">
                        <h1>CHECK IN</h1>
                        <div class="rq-check-in-out-display" id="rq-check-in">
                            <input type="text" id="rq-checkin-date" hidden>
                            <div class="rq-dmy-wrapper">
                                <p class="rq-single-date"></p>
                                <p class="rq-month-year">
                                    <span class="rq-single-month"></span>
                                    <span class="rq-single-year"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="rq-check-in-out">
                        <h1>CHECK OUT</h1>
                        <div class="rq-check-in-out-display" id="rq-check-out">
                            <input type="text" id="rq-checkout-date" hidden>
                           <div class="rq-dmy-wrapper">
                                <p class="rq-single-date"></p>
                                <p class="rq-month-year">
                                    <span class="rq-single-month"></span>
                                    <span class="rq-single-year"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!--  / date & time picker -->
              <h4>total Room<span class="label label-default pull-right">3</span></h4>
              <h4>adult <span class="label label-default pull-right">2</span></h4>
              <h4>children <span class="label label-default pull-right">2</span></h4>
              <h2>TOTAL <span class="label label-default pull-right">$250</span></h2>
            </div>
          </div><!-- / col-md-4-->
          <div class="col-md-8 col-sm-6">
            <form action="#">
               <h1 class="rq-checkout-form-title">billing details</h1>
              <div class="row">
                 <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">FIRST NAME <span>*</span></label>
                      <input type="text" class="form-control" id="exampleInputEmail1" >
                    </div>
                 </div>
                 <div class="col-md-6 col-sm-6">
                   <div class="form-group">
                      <label for="exampleInputEmail2">LAST NAME <span>*</span></label>
                      <input type="email" class="form-control" id="exampleInputEmail2">
                    </div>
                 </div>
               </div><!------/row-------->
               <div class="form-group">
                <label for="exampleInputEmail3">COMPANY NAME</label>
                <input type="text" class="form-control" id="exampleInputEmail3" >
              </div>
               <div class="row">
                 <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="exampleInputEmail4">EMAIL<span>*</span></label>
                      <input type="text" class="form-control" id="exampleInputEmail4" >
                    </div>
                 </div>
                 <div class="col-md-6 col-sm-6">
                   <div class="form-group">
                      <label for="exampleInputEmail5">PHONE </label>
                      <input type="email" class="form-control" id="exampleInputEmail5">
                    </div>
                 </div>
               </div><!------/row-------->
               <div class="form-group">
                <label>COUNTRY</label>
                 <div class="rq-checkout-form1 rq-checkout-country">
                  <select class="js-example-placeholder-single form-control rq-checkout-form-select" >
                    <option>&nbsp;</option>
                    <option value="0">Bangladesh</option>
                    <option value="1">Amirica</option>
                    <option value="2">Germany</option>
                    <option value="3">India</option>
                    <option value="4">Rassuia</option>
                  </select>
                </div>
              </div>
               <div class="form-group">
                <label for="exampleInputEmail7">ADDRESS</label>
                <input type="text" class="form-control" id="exampleInputEmail7" placeholder="Street address" >
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail8" placeholder="Apartment, suite" >
              </div>
              <div class="row">
                 <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>DISTRICT<span>*</span></label>
                       <div class="rq-checkout-form1 rq-checkout-district">
                        <select class="js-example-placeholder-single form-control" >
                          <option>&nbsp;</option>
                          <option value="BD">Bangladesh</option>
                          <option value="USA">Amirica</option>
                          <option value="GER">Germany</option>
                          <option value="IND">India</option>
                          <option value="RUS">Rassuia</option>
                        </select>
                      </div>
                    </div>
                 </div>
                 <div class="col-md-6 col-sm-6">
                   <div class="form-group">
                      <label for="exampleInputEmail10">postcode<span>*</span></label>
                      <input type="email" class="form-control" id="exampleInputEmail10">
                    </div>
                 </div>
               </div><!------/row-------->
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Create an account
                  </label>
                </div>
            </div>
            <h1 class="rq-checkout-form-title">additional info</h1>
            <div class="form-group">
              <label for="exampleInputEmail11">order notes</label>
              <textarea class="form-control" rows="5" id="exampleInputEmail11"></textarea>
            </div>
            <!-- <a class="rq-btn-primary" href="#" role="button"></a> -->
            <button class="btn rq-btn-primary" type="submit">book now</button>
            </form>
          </div>
        </div>
      </div>
    </div><!-- / rq-checkout-form-->
    
    <?php require_once "./_share/footer.php"; ?>
  </div><!-- main-wrapper -->
  <?php require_once "./_share/script.php"; ?>

</body>

<!-- Mirrored from redqteam.com/sites/houston/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:56:30 GMT -->
</html>
