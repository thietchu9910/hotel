<?php 
session_start();
require_once "./config/utils.php";
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from redqteam.com/sites/houston/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:56:22 GMT -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Houston | About Us</title>
  <?php require_once "./public/_share/style.php"; ?>
</head>
<body>
<div id="rq-circle-loader-wrapper">
  <div id="rq-circle-loader-center">
    <div class="rq-circle-load">
      <img src="<?= ADMIN_ASSET_URL ?>img/oval.svg" alt="Page Loader">
    </div>
  </div>
</div>

  <!-- <div id="main-wrapper"> -->
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


  <?php require_once "./public/_share/header.php"; ?>
  
    <div class="rq-checkout-banner">
      <div class="rq-checkout-banner-mask">
        <div class="container">
          <div class="rq-checkout-banner-text">
            <div class="rq-checkout-banner-text-middle">
              <h1>about us</h1>
            </div>
          </div>
       </div>
      </div>
    </div><!-- / rq-banner-area-->
    <div class="rq-about-us">
        <div class="container ">
          <div class="rq-hotel-text text-center">
           <h1>we are suprime</h1>
           <div class="rq-palace-logo"><img src="<?= ADMIN_ASSET_URL ?>img/palace_logo_2.png" alt=""></div>
           <p>
             content here making look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default beautiful brconsectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat volup tatem rctatio is that it has a more or less normal distribution of letters, as opposed to using content here
           </p>
           <div class="rq-about-suprime">
             <div class="row">
               <div class="col-md-6 col-xs-6 col-sm-6 rq-about-suprime-img">
                 <picture>
                      <source media="(min-width: 768px)" srcset=<?= ADMIN_ASSET_URL ?>img/about-suprime-1.jpg>
                      <img alt="Image" src="<?= ADMIN_ASSET_URL ?>img/about-suprime-1.jpg" srcset=<?= ADMIN_ASSET_URL ?>img/about-suprime-1.jpg>
                  </picture>
               </div>
               <div class="col-md-6 col-xs-6 col-sm-6 rq-about-suprime-img">
                 <picture>
                      <source media="(min-width: 768px)" srcset=<?= ADMIN_ASSET_URL ?>img/about-suprime-2.jpg>
                      <img alt="Image" src="<?= ADMIN_ASSET_URL ?>img/about-suprime-2.jpg" srcset=<?= ADMIN_ASSET_URL ?>img/about-suprime-2.jpg>
                  </picture>
               </div>
             </div>
           </div>
          </div>
          <section id="our-team">
            <h2 class="text-center">Our TEam</h2>
            <div class="row">
              <div class="rq-team-member col-md-4 col-sm-4 col-xs-12">
                <div class="thumbnail view second-effect">
                  <div class="rq-image-wrapper">
                      <picture>
                          <source media="(min-width: 768px)" srcset=<?= ADMIN_ASSET_URL ?>img/our-team-1.jpg>
                          <img alt="Image" src="<?= ADMIN_ASSET_URL ?>img/our-team-1.jpg" srcset=<?= ADMIN_ASSET_URL ?>img/our-team-1.jpg>
                      </picture>
                       <ul class="mask">
                           <li class="rq-facebook">
                              <a href="#" class="info"><img src="<?= ADMIN_ASSET_URL ?>img/facebook.png" alt="Facebook"/></a>   
                           </li>

                           <li class="rq-twitter">
                              <a href="#" class="info"><img src="<?= ADMIN_ASSET_URL ?>img/twitter.png" alt="Twitter"/></a>   
                           </li>
                            
                            <li class="rq-linkedinf">
                                <a href="#" class="info"><img src="<?= ADMIN_ASSET_URL ?>img/linkin.png" alt="Linkedin"/></a>
                            </li>
                      </ul>
                  </div>
                  <div class="caption">
                    <h3><a href="#">deo PERU</a></h3>
                    <p>Relationship Manager</p>
                  </div>
                </div>
              </div>

              <div class="rq-team-member col-md-4 col-sm-4 col-xs-12">
                <div class="thumbnail view second-effect">
                  <div class="rq-image-wrapper">
                      <picture>
                          <source media="(min-width: 768px)" srcset=<?= ADMIN_ASSET_URL ?>img/our-team-2.jpg>
                          <img alt="Image" src="<?= ADMIN_ASSET_URL ?>img/our-team-2.jpg" srcset=<?= ADMIN_ASSET_URL ?>img/our-team-2.jpg>
                      </picture>
                       <ul class="mask">
                           <li class="rq-facebook">
                              <a href="#" class="info"><img src="<?= ADMIN_ASSET_URL ?>img/facebook.png" alt="facebook" /></a>   
                           </li>

                           <li class="rq-twitter">
                              <a href="#" class="info"><img src="<?= ADMIN_ASSET_URL ?>img/twitter.png" alt="twitter" /></a>   
                           </li>
                            
                            <li class="rq-linkedinf">
                                <a href="#" class="info"><img src="<?= ADMIN_ASSET_URL ?>img/linkin.png" alt="linkin" /></a>
                            </li>
                      </ul>
                  </div>
                  <div class="caption">
                    <h3><a href="#">deo PERU</a></h3>
                    <p>Relationship Manager</p>
                  </div>
                 
                </div>
              </div>

              <div class="rq-team-member col-md-4 col-sm-4 col-xs-12">
                <div class="thumbnail view second-effect">
                  <div class="rq-image-wrapper">
                      <picture>
                          <source media="(min-width: 768px)" srcset=<?= ADMIN_ASSET_URL ?>img/our-team-3.jpg>
                          <img alt="Image" src="<?= ADMIN_ASSET_URL ?>img/our-team-3.jpg" srcset=<?= ADMIN_ASSET_URL ?>img/our-team-3.jpg>
                      </picture>
                       <ul class="mask">
                           <li class="rq-facebook">
                              <a href="#" class="info"><img src="<?= ADMIN_ASSET_URL ?>img/facebook.png" alt="facebook" /></a>   
                           </li>

                           <li class="rq-twitter">
                              <a href="#" class="info"><img src="<?= ADMIN_ASSET_URL ?>img/twitter.png" alt="twitter" /></a>   
                           </li>
                            
                            <li class="rq-linkedinf">
                                <a href="#" class="info"><img src="<?= ADMIN_ASSET_URL ?>img/linkin.png" alt="linkin" /></a>
                            </li>
                      </ul>
                  </div>
                  <div class="caption">
                    <h3><a href="#">deo PERU</a></h3>
                    <p>Relationship Manager</p>
                  </div>
                </div>
              </div>
            </div>
          </section><!-- / rq-about-us -->
        </div>
      </div>
    <div class="rq-content-making-area">
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
              <p class="text-center">Content making readable English desktop publishing packages editors point using is that making readable English desktop publishing packages editors point using it has a normal distribution as oppo</p>
              <p class="rq-special text-center">ADRAIN SMITH</p>
           </div>
           </div>
        </div>
      </div><!------/container -------->
    </div><!-- / rq-content-making-area-->
    
  <?php require_once "./public/_share/footer.php"; ?>
  <?php require_once "./public/_share/script.php"; ?>

</body>

<!-- Mirrored from redqteam.com/sites/houston/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:56:30 GMT -->
</html>
