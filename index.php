<?php
// bắt đầu sử dụng session
session_start();
require_once './config/utils.php';
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;
//lấy dữ liệu bảng web_settings
$getWebsettingQuery=" select * from web_setting";
$getRoomQuery = "select * from room limit 3";
$getServiceQuery = "select * from service limit 4";
$service = queryExecute($getServiceQuery, false);
$room = queryExecute($getRoomQuery, true);
$websetting = queryExecute($getWebsettingQuery,false);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from redqteam.com/sites/houston/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:53:10 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Houston | Home </title>
    <?php require_once './public/_share/style.php'; ?>

</head>

<body class="rq-homepage-two">
    
    <!-- PAGE OVERLAY WHEN MENU ACTIVE END -->

    
    <!-- SIDE MENU END -->

    <?php include_once './public/_share/header.php'; ?>

    <div id="home2-banner" class="rq-banner-area">
        <div class="rq-banner-area-mask">
            <div class="container">
                <form action="select-room-grid.php" method="post">
                <div class="bq-banner-text">
                    <div class="bq-banner-text-middle">
                        <h1><?= $websetting['name'] ?></h1>
                        <div class="rq-banner-icon">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h3><?= $websetting['title_hotel'];?></h3>
                        <div class="rq-checkout-area">
                            <div class="container">
                                <div class="rq-cheakout-content">
                                    <div class="rq-content-picker">
                                        <div class="rq-check-inout-wrapper" id="rq-check-in-single">
                                            <div class="rq-check-inout-single-wrapper">
                                                <span class="rq-single-date"></span>
                                                <span class="rq-single-month"></span>
                                            </div>
                                        </div>

                                        <div class="rq-check-inout-wrapper" id="rq-check-out-single">
                                            <div class="rq-check-inout-single-wrapper">
                                                <span class="rq-single-date"></span>
                                                <span class="rq-single-month"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rq-cheakout-content-border">
                                        <div class="rq-select-single rq-room-type">
                                            <select
                                                class="js-example-placeholder-single rq-select-single-one form-control">
                                                <option>&nbsp;</option>
                                                <option value="1">Single Bed</option>
                                                <option value="2">Double Bed</option>
                                                <option value="3">Triple Bed</option>
                                            </select>
                                        </div>
                                        <div class="rq-select-single rq-adult-person">
                                            <select
                                                class="js-example-placeholder-single rq-select-single-one form-control">
                                                <option>&nbsp;</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">2</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                        <div class="rq-select-single rq-children-num">
                                            <select
                                                class="js-example-placeholder-single rq-select-single-one form-control">
                                                <option>&nbsp;</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">2</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                    </div><!-- / rq-cheakout-content-border-->
                                    <div class="special-check">
                                        <div class="input-group">
                                            <button class="btn btn-default" type="submit">
                                                <span class="special-check-color text-center">
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </span>
                                                <span>CHECKOUT</span>
                                            </button>
                                        </div>
                                    </div>
                                </div><!-- / rq-cheakout-content-->
                            </div><!-- / container-->
                        </div><!-- / checkout-area-->
                        <div class="banner-logo2">
                            <a href="#">
                                <img src="<?= ADMIN_ASSET_URL ?>img/banner-logo-3.png" alt=".." />
                            </a>
                        </div>
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div><!-- / rq-banner-area-->

    <div class="rq-hotel-palace">
        <div class="container ">
            <div class="rq-hotel-text text-center">
                <h1><?= $websetting['name'];?></h1>
                <div class="rq-palace-logo">
                    <img src="<?= ADMIN_ASSET_URL ?>img/palace_logo_2.png" alt=".." />
                </div>
                <p><?= $websetting['slogan'];?></p>
                <div class="sign">
                    <img src="<?= $websetting['slogan_author'];?>" class="img-responsive"
                        alt="Responsive image" />
                </div>
                <div class="rq-pal-bg">
                    <img src="<?= ADMIN_ASSET_URL ?>img/palace-bg.png" class="img-responsive" alt="Responsive image" />
                </div>
            </div>
        </div>
    </div>

    <section class="rq-slider-area parallax-window">
        <div class="rq-main-slider-mask pdb-3"></div>
        <a class="rq-video-play-btn popup-vimeo" href="<?= $websetting['intro_youtube_url'];?>">
            <i class="ion-ios-play-outline"></i>
        </a>
    </section>

    <!-- Room Package -->
    <section class="rq-room-package-section">
        <div class="container">
            <div class="row">
                <h2 class="text-center">ROOMS &amp; PACKAGES</h2>   

                <div class="rq-room-package-wrapper">
                    <!-- PACKAGE ITEM -->
                    <div class="rq-room-package rq-dbl-width">
                        <picture>
                            <source media="(min-width: 768px)" srcset=<?= ADMIN_ASSET_URL ?>img/room-package-img-1.jpg>
                            <img alt="Image" src="<?= ADMIN_ASSET_URL ?>img/room-package-img-1.jpg"
                                srcset=<?= ADMIN_ASSET_URL ?>img/room-package-img-1.jpg>
                        </picture>

                        <a href="#" class="rq-img-overlay-effect">
                            <p class="rq-room-name-price">
                                <span class="rq-room-title"><?= $service['name']?></span>
                                <span class="rq-package-price">$<?= $service['price']?></span>
                            </p>
                        </a>
                    </div>
                    <!-- END -->

                    <!-- PACKAGE ITEM -->
                    <div class="rq-room-package rq-dbl-height">
                        <picture>
                            <source media="(min-width: 768px)" srcset=<?= ADMIN_ASSET_URL ?>img/room-package-img-4.jpg>
                            <img alt="Image" src="<?= ADMIN_ASSET_URL ?>img/room-package-img-4.jpg"
                                srcset=<?= ADMIN_ASSET_URL ?>img/room-package-img-4.jpg>
                        </picture>

                        <a href="#" class="rq-img-overlay-effect">
                            <p class="rq-room-name-price">
                                <span class="rq-room-title"><?= $service['name']?></span>
                                <span class="rq-package-price">$<?= $service['price']?></span>
                            </p>
                        </a>
                    </div>
                    <!-- END -->

                    <!-- PACKAGE ITEM -->
                    <div class="rq-room-package">
                        <picture>
                            <source media="(min-width: 768px)" srcset=<?= ADMIN_ASSET_URL ?>img/room-package-img-2.jpg>
                            <img alt="Image" src="<?= ADMIN_ASSET_URL ?>img/room-package-img-2.jpg"
                                srcset=<?= ADMIN_ASSET_URL ?>img/room-package-img-2.jpg>
                        </picture>

                        <a href="#" class="rq-img-overlay-effect">
                            <p class="rq-room-name-price">
                                <span class="rq-room-title"><?= $service['name']?></span>
                                <span class="rq-package-price">$<?= $service['price']?></span>
                            </p>
                        </a>
                    </div>
                    <!-- END -->

                    <!-- PACKAGE ITEM -->
                    <div class="rq-room-package">
                        <picture>
                            <source media="(min-width: 768px)" srcset=<?= ADMIN_ASSET_URL ?>img/room-package-img-3.jpg>
                            <img alt="Image" src="<?= ADMIN_ASSET_URL ?>img/room-package-img-3.jpg"
                                srcset=<?= ADMIN_ASSET_URL ?>img/room-package-img-3.jpg>
                        </picture>

                        <a href="#" class="rq-img-overlay-effect">
                            <p class="rq-room-name-price">
                                <span class="rq-room-title"><?= $service['name']?></span>
                                <span class="rq-package-price">$<?= $service['price']?><span>night</span></span>
                            </p>
                        </a>
                    </div>
                    <!-- END -->

                    
                </div>
            </div>
        </div>
    </section>

    <!-- Room Package End -->


    <div class="rq-slider-area rq-what-we-offer">
        <div class="rq-main-slider-mask"></div>
        <div class="our-offer">
            <h2 class="text-center">what we offer</h2>
            <div class="container">
                <div class="row">
                    <?php foreach ($room as $r) :?>
                    <div class="col-md-4 col-sm-6 col-xs-12 rq-our-offer">
                        <div class="thumbnail">
                            <div class="rq-img-wrapper">
                                <picture>
                                    <source media="(min-width: 768px)" srcset=<?= $r['featrue_image'] ?>>
                                    <img alt="Image" src="<?= $r['featrue_image'] ?>"
                                        srcset=<?= $r['featrue_image'] ?>>
                                </picture>
                            </div>

                            <div class="caption">
                                <h3><a href="#"><?= $r['name']?></a></h3>
                                <p><?= $r['short_desc']?></p>
                                <h4 class="special-span"><span>$<?= $r['price']?></span>Night</h4>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    
                </div>
            </div>
        </div>
    </div>
    <!----------------/rq-slider-area-------------------------->


    <section class="rq-content-making-area">
      <div class="container ">
        <div class="rq-owl-carousel-content">
           <div class="owl-carousel">
             <div class="rq-content-making-item">
             <div class="rq-content-logo text-center center-block">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
             </div>
              <p class="text-center">Content making readable English desktop publishing packages editors point using is that making readable English desktop publishing packages editors point using it has a normal distribution as oppo</p>
              <p class="rq-special text-center">ADRAIN SMITH</p>
           </div>
           <div class="rq-content-making-item">
             <div class="rq-content-logo text-center center-block">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
             </div>
              <p class="text-center">Content making readable English desktop publishing packages editors point using is making readable English desktop publishing packages editors point using it has a normal distribution as oppo</p>
              <p class="rq-special text-center">ADRAIN SMITH</p>
           </div>
           </div>
        </div>
      </div><!------/container -------->
    </section><!-- / rq-content-making-area-->


    <?php 
 require_once './public/_share/footer.php';
 ?>
    <?php require_once './public/_share/script.php'; ?>
</body>

<!-- Mirrored from redqteam.com/sites/houston/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:54:05 GMT -->

</html>