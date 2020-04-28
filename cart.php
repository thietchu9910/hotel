<?php
session_start();
require_once "./config/utils.php";
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;
$id = $_GET['id'];
$getBookingQuery = "select * from booking where id = $id";
$getRoomQuery = "select * from room r join booking b on r.id=b.room_id";
$room = queryExecute($getRoomQuery, false);
$booking = queryExecute($getBookingQuery, false);
//lấy dữ liệu room đổ sang booking
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from redqteam.com/sites/houston/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:56:30 GMT -->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Houston | Cart</title>
  <?php require_once "./public/_share/style.php" ?>
</head>

<body>

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


  <?= require_once './public/_share/header.php' ?>
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
  <div class="rq-cart">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-5 col-xs-12">
          <div class="cart-left-side">
            <h4>Subtotal <span class="label label-default pull-right">$250</span></h4>
            <h3>total <span class="label label-default pull-right">$<?php echo $total ?></span></h3>
            <a class="btn rq-btn-secondary form-control" href="<?= ADMIN_URL . 'save-edit.php'?>">update cart</a>
            <button class="rq-btn-primary form-control" type="submit">proceed checkout</button>
          </div>
        </div>
        <!--- col-md-4 ------>
        <div class="col-md-8 col-sm-7 col-xs-12">
          <div class="rq-cart-table">
            <table class="table" style="width:100%;">
              <tr class="rq-table-heading" style="text-align: left;">
                <th>Product</th>
                <th class="rq-align">Price</th>
                <th class="rq-align">Quantity</th>
                <th class="rq-align">total</th>
              </tr>
              <tr class="rq-table-border">
                <td class="rq-cart-row">
                  <h3><i class="ion-android-close"></i><?= $room['name'] ?></h3>
                 
                </td>
                <td class="rq-align"><span><?= $room['price'] ?></span> </td>
                <td class="rq-align rq-color">
                  <?php
                  $date1=date_create($booking['check_in']);
                  $date2=date_create($booking['check_out']);
                  $diff=date_diff($date1,$date2);
                  $a = $diff->format('%a');
                  echo $a;
              
                  
                  ?>

                </td>
                <td class="rq-align"><span><?php
                                           $total = $a * $room['price'];
                                           echo $total;
                                            ?>
                                            </span></td>
              </tr>
              <tr class="rq-table-border">
              
                 
               
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div><!-- / rq-cart -->

  <?= require_once './public/_share/footer.php' ?>
  <?= require_once './public/_share/script.php' ?>

</body>


<!-- Mirrored from redqteam.com/sites/houston/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:56:30 GMT -->

</html>