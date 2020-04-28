<?php
session_start();
require_once "./config/utils.php";
// login user
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;

$getRoomGalleries = "select * from room_galleries";
$RoomGalleries = queryExecute($getRoomGalleries, true);

$getRoomQuery = "select * from room";
$room = queryExecute($getRoomQuery, false);
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from redqteam.com/sites/houston/single-room.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:56:10 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Houston | Room Details</title>
    <?php require_once "public/_share/style.php"; ?>
</head>

<body>
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

        <!-- SIDE MENU END -->

        <?php require_once "public/_share/header.php" ?>

        <div class="rq-checkout-banner">
            <div class="rq-checkout-banner-mask">
                <div class="container">
                    <div class="rq-checkout-banner-text">
                        <div class="rq-checkout-banner-text-middle">
                            <h1>room details</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / rq-banner-area-->
        <div class="rq-single-room-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-5 col-lg-4">
                        <form action="<?= BASE_URL . 'save-booking.php'?>" method="POST">
                            <div class="rq-single-room-checkin">
                                <div class="rq-check-in-out-wrapper">



                                </div>
                                <h2>CHECK IN</h2>
                                <div class="rq-total">
                                    <div class=""></div>
                                    <input type="date" class="form-control" name="check_in">
                                </div>
                                <h2>CHECK OUT</h2>
                                <div class="rq-total">
                                    <div class=""></div>
                                    <input type="date" class="form-control" name="check_out">
                                </div>
                                <!--  / date & time picker -->
                               
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <h2>ADULT</h2>
                                        <div class="rq-adult">
                                            <select class="js-example-placeholder-single form-control" name="adults">
                                                <option>&nbsp;</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <h2>children</h2>
                                        <div class="rq-children">
                                            <select class="js-example-placeholder-single form-control" name="chidren"> 
                                                <option>&nbsp;</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-------  /row  ------------>
                                <h2>extra service</h2>
                                <div class="rq-extra">
                                    <div class="rq-extra-content">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> BBQ Party
                                            </label>
                                        </div>
                                        <p><span>$250 </span>/ Group / Trip</p>
                                    </div>
                                    <div class="rq-extra-content rq-extra-content-2">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Airport Transfer
                                            </label>
                                        </div>
                                        <p><span>$250 </span>/ Group / Trip</p>
                                    </div>
                                </div><br>  
                            <input type="text" name="room_id" value="<?= $_GET['id'] ?>" hidden>
                                <button class="rq-btn-primary form-control" type="submit">check availability</button>

                            </div>

                        </form>
                    </div>
                    <div class="col-md-8 col-sm-7 col-lg-8">
                        <div class="rq-flex-slider">
                            <!-- Place somewhere in the <body> of your page -->
                            <div id="slider" class="flexslider">
                                <ul class="slides">
                                    <?php foreach ($RoomGalleries as $ga) : ?>
                                        <li>
                                            <img src="<?= $ga['img_url'] ?>" alt="Slider Image" />
                                        </li>
                                    <?php endforeach; ?>
                                    <!-- items mirrored twice, total of 12 -->
                                </ul>
                            </div>
                           
                        </div>
                        <!------------/rq-flex-slider---------------------->
                        <div class="single-room-text">
                            <div class="rq-singleRoom-text-head">
                                <div class="rq-singleRoom-text-head-left">
                                    <h2><?php echo $room['name'] ?></h2>
                                    <h4><span><?php echo $room['price'] ?> / </span> Night</h4>
                                </div>
                                <div class="rq-singleRoom-text-head-right pull-right">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <!------------/rq-singleRoom-text-head ---------------------->
                            <div class="rq-single-room-para">
                                <p><?= $room['about'] ?></p>


                            </div>
                            <!------------/rq-single-room-para---------------------->
                            <div class="single-room-text-custom">
                                <ul class="nav">
                                    <li role="presentation"><span class="badge"><i class="fa fa-check" aria-hidden="true"></i></span>Decorated room, proper air condioned</li>
                                    <li role="presentation"> <span class="badge"><i class="fa fa-check" aria-hidden="true"></i></span>Saloon, gym, spa facilities</li>
                                    <li role="presentation"><span class="badge"><i class="fa fa-check" aria-hidden="true"></i></span>24 hours room service</li>
                                </ul>
                            </div>
                            <div class="rq-tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">Features</a></li>
                                    <li><a data-toggle="tab" href="#menu1">reviews</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <div>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <p>On the other hand, we denounce with righteous indignation </p>
                                        <h6>dorian doe</h6>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <div>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <p>On the other hand, we denounce with righteous indignation and dislike men who
                                            are so beguiled and demoralizd of pleasure of the moment, so blinded by
                                            desire</p>
                                        <h6>dorian doe</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="rq-submit-review col-md-12 col-xs-12 col-sm-12">
                                <div class="row">
                                    <div class="rq-submit-review-form-wrapper">
                                        <h2>Submit review</h2>
                                        <form action="#">
                                            <div class="rq-review-form col-md-8 col-sm-12">
                                                <input type="text" class="form-control" placeholder="Name">
                                                <input type="text" class="form-control" placeholder="Email">
                                                <textarea class="form-control" rows="5" placeholder="Your Comment"></textarea>
                                            </div>

                                            <div class="rq-review col-md-4 col-sm-12 col-xs-12">
                                                <div class="rq-review-custom">
                                                    <div class="rq-review-left">
                                                        <div class="rq-service-rating"></div>
                                                    </div>
                                                    <div class="rq-review-right">
                                                        <p>Service</p>
                                                    </div>
                                                </div>
                                                <!--------/rq-review-custom------>
                                                <div class="rq-review-custom">
                                                    <div class="rq-review-left">
                                                        <div class="rq-service-rating"></div>
                                                    </div>
                                                    <div class="rq-review-right">
                                                        <p>Food</p>
                                                    </div>
                                                </div>
                                                <!--------/rq-review-custom------>
                                                <div class="rq-review-custom">
                                                    <div class="rq-review-left">
                                                        <div class="rq-service-rating"></div>
                                                    </div>
                                                    <div class="rq-review-right">
                                                        <p>Guide</p>
                                                    </div>
                                                </div>
                                                <!--------/rq-review-custom------>
                                                <h6><span>4.5</span></h6>
                                            </div>
                                            <button class="rq-btn-primary" type="submit">submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!------------- single-room-text ---->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / rq-single-room-area-->

        <?php require_once "public/_share/footer.php" ?>
    </div>
    <?php require_once "public/_share/script.php"; ?>

</body>

<!-- Mirrored from redqteam.com/sites/houston/single-room.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:56:22 GMT -->

</html>