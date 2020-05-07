<?php
session_start();
require_once "./config/utils.php";
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;
$id = $_GET['id'];
$getBookingQuery = "select * from booking where id = $id";
$booking = queryExecute($getBookingQuery, false);
$room_id = $booking['room_id'];
$getRoomQuery = "select * from room where id = '$room_id'";
$room = queryExecute($getRoomQuery, false);

$getServiceQuery = "select * from  service";
$service = queryExecute($getServiceQuery, true);
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
      <div class="row justify-content-center">
       
        <!--- col-md-4 ------>
        <div class="col-md-8 ml-8 ">
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