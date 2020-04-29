<?php
session_start();
require_once "./config/utils.php";

$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;

$getRoomQuery = "select * from room limit 2";
$room = queryExecute($getRoomQuery, true);
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from redqteam.com/sites/houston/select-room-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:56:02 GMT -->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Houston | Book Now</title>
  <?php require_once "./public/_share/style.php"; ?>
</head>

<body>
  <div id="rq-circle-loader-wrapper">
    <div id="rq-circle-loader-center">
      <div class="rq-circle-load">
        <img src="<?= ADMIN_ASSET_URL .'img/oval.svg'?>" alt="Page Loader">
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modalWrapper">
    <div class="modal-dialog modal-lg" role="document" id="modalWrapper">
      <div class="modal-content">
        <div class="modal-body">
          <p class="success-message">You have selected <span>King's Room</span> successfully</p>
          <form action="#">
            <h2>ADDITIONAL INFORMATION</h2>
            <fieldset>
              <div class="table-css">
                <div class="table-css-row">
                  <div class="table-css-col">
                    <label>
                      <input type="checkbox" name="rq-inp-1">
                      Airport Transfer
                    </label>
                  </div>
                  <div class="table-css-col">
                    <span>$250 /</span> Group / Trip
                  </div>
                </div>
                <div class="table-css-row">
                  <div class="table-css-col">
                    <label>
                      <input type="checkbox" name="rq-inp-2">
                      Airport Transfer
                    </label>
                  </div>
                  <div class="table-css-col">
                    <span>$250 /</span> Group / Trip
                  </div>
                </div>
                <div class="table-css-row">
                  <div class="table-css-col">
                    <label>
                      <input type="checkbox" name="rq-inp-3">
                      Airport Transfer
                    </label>
                  </div>
                  <div class="table-css-col">
                    <span>$250 /</span> Group / Trip
                  </div>
                </div>
              </div>
            </fieldset>
            <h2>ADDITIONAL INFORMATION</h2>
            <fieldset>
              <div class="rq-single-room-area select-for-modal-width">
                <div class="rq-single-room-checkin">
                  <div class="row">
                    <div class="rq-check-in-out-wrapper">
                      <div class="col-sm-6">
                        <h2>CHECK IN</h2>
                        <div class="form-group">
                          <input type="date" class="form-control">
                        </div>
                       
                      </div>

                      <div class="col-sm-6">
                        <h2>CHECK OUT</h2>
                        <div class="form-group">
                          <input type="date" class="form-control">
                        </div>
                      </div>
                    </div><!--  / date & time picker -->
                    
                    <div class="col-md-6">
                      <h2>total Room</h2>
                      <div class="rq-total">
                        <select class="js-example-placeholder-single form-control">
                          <option>&nbsp;</option>
                          <option value="0">1</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                          <option value="4">5</option>
                          <option value="5">6</option>
                        </select>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <h2>ADULT</h2>
                          <div class="rq-adult">
                            <select class="js-example-placeholder-single form-control">
                              <option>&nbsp;</option>
                              <option value="0">1</option>
                              <option value="1">2</option>
                              <option value="2">3</option>
                              <option value="3">4</option>
                              <option value="4">5</option>
                              <option value="5">6</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <h2>children</h2>
                          <div class="rq-children">
                            <select class="js-example-placeholder-single form-control">
                              <option>&nbsp;</option>
                              <option value="0">1</option>
                              <option value="1">2</option>
                              <option value="2">3</option>
                              <option value="3">4</option>
                              <option value="4">5</option>
                              <option value="5">6</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
            <button type="submit" class="btn btn-flat rq-modal-submit-btn">CHECKOUT</button>
          </form>
        </div>
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
              <form action="#" method="post">
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


    <?php require_once "./public/_share/header.php"; ?>

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
    <div class="rq-single-room-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-5 col-sm-5">
            <div class="rq-single-room-checkin">
              <div class="rq-check-in-out-wrapper">
                <div class="rq-check-in-out">
                  <h2>CHECK IN</h2>
                  <div class="rq-check-in-out-display" id="rq-check-in-filter">
                    <input type="text" id="rq-checkin-date" value="" hidden>
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
                  <h2>CHECK OUT</h2>
                  <div class="rq-check-in-out-display" id="rq-check-out-filter">
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

              <h2>price</h2>
              <div class="rq-ui-slider">
                <p>
                  <label for="amount">Price Range</label>
                  <input type="text" id="amount" readonly>
                </p>
                <div id="slider-range"></div>
              </div>
              <h2>Room</h2>
              <div class="rq-total">
                <select class="js-example-placeholder-single form-control">
                  <option>&nbsp;</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                </select>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <h2>ADULT</h2>
                  <div class="rq-adult">
                    <select class="js-example-placeholder-single form-control">
                      <option>&nbsp;</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <h2>children</h2>
                  <div class="rq-children">
                    <select class="js-example-placeholder-single form-control">
                      <option>&nbsp;</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-------  /row  ------------>
              <!-- <div class="rq-btn"> -->
              <button class="rq-btn-primary form-control" type="submit">FILTER</button>
              <!--  </div> -->

            </div>
          </div>
          <div class="col-lg-8 col-md-7 col-sm-7">
            <!----------------------------------list view copy ---------------------------->
            <div class="singleRoom-grid-upper">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                  <div class="singleRoom-grid-upper-left pull-left ">
                    <h5>2 results found</h5>
                  </div>
                </div>
                <div class="col-md-8 col-sm-8">
                  <div class="singleRoom-grid-upper-right pull-right">
                    <h5>Sort by</h5>
                    <!-- <div class="singleRoom-grid-upper-right-date">
                      <select class="js-example-placeholder-single custom-width-for-grid-date">
                        <option value="0">Date</option>
                        <option value="1">Title</option>
                        <option value="2">Comment</option>
                      </select>
                    </div> -->
                    <div class="singleRoom-grid-upper-right-logo rq-grid-list-view-option">
                      <a href="#" data-class=" singleRoom-grid-main"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                      <a href="#" data-class=" singleRoom-list-main"><i class="fa fa-list-ul" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rq-listing-choose singleRoom-grid-main">
                <div class="row">
                  <?php foreach ($room as $ro) : ?>
                    <div class="col-md-6 col-sm-12 singleRoom-grid-item">
                      <div class="thumbnail">
                        <picture>
                          <source media="(min-width: 768px)" src="<?= $ro['featrue_image'] ?>">
                          <img alt="Image" src="<?= $ro['featrue_image'] ?>" />
                        </picture>
                        <div class="caption">
                          <h3><a href="single-room.php"><?= $ro['name'] ?></a></h3>
                          <p><?= $ro['short_desc'] ?></p>
                          <div class="singleRoom-grid-main-custom">
                            <div class="row">
                              <h4><span>$<?= $ro['price']?></span> / Night</h4>
                              <h5> <a class="btn rq-btn-secondary" href="single-room.php?id=<?= $ro['id']?>"  data-target="#myModal">SELECT</a></h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                  <!----row---->
                  <!-- <button><i class="fa fa-spinner" aria-hidden="true"></i>LOAD MORE</button> -->
                </div>
                <!------ singleRoom-grid-main -------->
              </div>
              <!---- singleRoom-grid-upper ---->
              <!---------------------------------- /list view copy end---------------------------->
            </div>
            <!------- /col-md-8 main---------->
          </div>
          <!------- /row main---------->
        </div>
        <!------- /container ---------->
      </div><!-- / rq-single-room-area-->

      <?php require_once "./public/_share/footer.php"; ?>
    </div><!-- main-wrapper -->
    <?php require_once "./public/_share/script.php"; ?>

</body>

<!-- Mirrored from redqteam.com/sites/houston/select-room-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:56:10 GMT -->

</html>