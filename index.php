<?php
// bắt đầu sử dụng session
session_start();
require_once './config/utils.php';
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;
//lấy dữ liệu bảng web_settings
$getWebsettingQuery=" select * from web_setting";
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
    <div id="rq-circle-loader-wrapper">
        <div id="rq-circle-loader-center">
            <div class="rq-circle-load">
                <img src="<?= ADMIN_ASSET_URL ?>img/oval.svg" alt="Page Loader">
            </div>
        </div>
    </div>
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
                        <form action="post-login.php" method="POST">
                            <input type="text" name="email" id="rq-user-input" placeholder="User Name">
                            <input type="password" name="password" id="rq-user-password" placeholder="Password">
                            <button type="submit">Login</button>
                        </form>
                        <div class="d-flex justify-content-center">
                            <?php if (isset($_GET['msg'])) : ?>
                            <span class="text-danger"><?php echo $_GET['msg'] ?></span>
                            <?php endif; ?>
                        </div>
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

    <?php include_once './public/_share/header.php'; ?>

    <div id="home2-banner" class="rq-banner-area">
        <div class="rq-banner-area-mask">
            <div class="container">
                <div class="bq-banner-text">
                    <div class="bq-banner-text-middle">
                        <img src="<?=ADMIN_ASSET_URL ?>img/<?=$websetting['small-logo'];?>" alt="Responsive image" />
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
                    <img src="<?= ADMIN_ASSET_URL ?>img/<?= $websetting['slogan_author'];?>" class="img-responsive"
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
                                <span class="rq-room-title">COMBO BUFFET</span>
                                <span class="rq-package-price">$250</span>
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
                                <span class="rq-room-title">DINNER PACKEGE</span>
                                <span class="rq-package-price">$250</span>
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
                                <span class="rq-room-title">MASTER ROOM</span>
                                <span class="rq-package-price">$250</span>
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
                                <span class="rq-room-title">SUNSET DELUXE</span>
                                <span class="rq-package-price">$250 <span>night</span></span>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 rq-our-offer">
                        <div class="thumbnail">
                            <div class="rq-img-wrapper">
                                <picture>
                                    <source media="(min-width: 768px)" srcset=<?= ADMIN_ASSET_URL ?>img/palace-img1.jpg>
                                    <img alt="Image" src="<?= ADMIN_ASSET_URL ?>img/palace-img1.jpg"
                                        srcset=<?= ADMIN_ASSET_URL ?>img/palace-img1.jpg>
                                </picture>
                            </div>

                            <div class="caption">
                                <h3><a href="#">large cafe</a></h3>
                                <p>point of using that has more less normal distribution is among</p>
                                <h4 class="special-span"><span>$250</span>Night</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 rq-our-offer">
                        <div class="thumbnail">
                            <div class="rq-img-wrapper">
                                <picture>
                                    <source media="(min-width: 768px)" srcset=<?= ADMIN_ASSET_URL ?>img/palace-img2.jpg>
                                    <img alt="Image" src="<?= ADMIN_ASSET_URL ?>img/palace-img2.jpg"
                                        srcset=<?= ADMIN_ASSET_URL ?>img/palace-img2.jpg>
                                </picture>
                            </div>
                            <div class="caption">
                                <h3><a href="#">rooftop cusine</a></h3>
                                <p>point of using that has more less normal distribution is among</p>
                                <h4 class="special-span"><span>$250</span>Night</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 rq-our-offer">
                        <div class="thumbnail">
                            <div class="rq-img-wrapper">
                                <picture>
                                    <source media="(min-width: 768px)" srcset=<?= ADMIN_ASSET_URL ?>img/palace-img3.jpg>
                                    <img alt="Image" src="<?= ADMIN_ASSET_URL ?>img/palace-img3.jpg"
                                        srcset=<?= ADMIN_ASSET_URL ?>img/palace-img3.jpg>
                                </picture>
                            </div>
                            <div class="caption">
                                <h3><a href="#">premium living</a></h3>
                                <p>point of using that has more less normal distribution is among</p>
                                <h4 class="special-span"><span>$250</span>Night</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------/rq-slider-area-------------------------->


    <div id="testimonial" class="rq-content-making-area">
        <div class="container ">
            <div class="rq-owl-carousel-content">
                <div class="owl-carousel">
                    <div class="rq-content-making-item">
                        <div class="rq-content-logo text-center center-block">
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                        </div>
                        <p class="text-center">Content making readable English desktop publishing packages editors point
                            using is that making readable English desktop publishing packages editors point using it has
                            a normal distribution as oppo</p>
                        <p class="rq-special text-center">ADRAIN SMITH</p>
                    </div>
                    <div class="rq-content-making-item">
                        <div class="rq-content-logo text-center center-block">
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                        </div>
                        <p class="text-center">Content making readable English desktop publishing packages editors point
                            using is making readable English desktop publishing packages editors point using it has a
                            normal distribution as oppo</p>
                        <p class="rq-special text-center">ADRAIN SMITH</p>
                    </div>
                </div>
            </div>
        </div>
        <!------/container -------->
    </div><!-- / rq-content-making-area-->


    <?php 
 require_once './public/_share/footer.php';
 ?>
    <?php require_once './public/_share/script.php'; ?>
</body>

<!-- Mirrored from redqteam.com/sites/houston/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:54:05 GMT -->

</html>