<?php 
session_start();
require_once "./config/utils.php";
?>


<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from redqteam.com/sites/houston/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:56:39 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Houston | Blog Details</title>
    <?php require_once "./_share/style.php"?>
  </head>
  <body>
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


    <?php require_once "./_share/header.php"; ?>

    <div id="banner">
      <img src="<?= ADMIN_ASSET_URL ?>img/blog-details-banner.jpg" alt="" class="img-responsive">      
    </div>
    <main role="main" id="blog-post-details">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-2 col-md-8">
            <article>
              <h1>HOTEL BOWLING CLUB</h1>
              <div>
                <ol class="breadcrumb">
                  <li><time datetime="2016-05-20">MAY 20, 2016</time></li>
                  <li class="active"><a href="#">ADMIN</a></li>
                  <li><a href="#">COMMENT<span> 3</span></a></li>
                </ol>
              </div>
              <p>Blinded by desire, that they cannot foresee the pain and trouble that are bounds to ensure blames belongs to those a weakness of will, which is the same therefore always holds in these matters to this princple of selection and he amon and the other hand, we denounce with righteous indignation and dislike mens who are so begueled and demoralized</p>
              <p>Blinded by desire, that they cannot foresee the pain and trouble that are bounds to ensure blames belongs to those a weakness of will, which is the same therefore always</p>
              <blockquote>
                <p>Making readable English desktop publishing packages editors it has a normal distribution as oppo</p>
              </blockquote>
              <p>Blinded by desire, that they cannot foresee the pain and trouble that are bounds to ensure blames belongs to those a weakness of will, which is the same therefore always holds in these matters to this princple of selection and he amon and the other hand, we denounce with righteous</p>
              <div class="blog-img">
                <div class="row">
                <div class="col-md-6 col-sm-6 rq-single-img-left">
                  <img src="<?= ADMIN_ASSET_URL ?>img/blog-details-post-img-1.jpg" alt="" class="img-responsive">
                </div>
                <div class="col-md-6 col-sm-6 padding-left rq-single-img-right">
                  <img src="<?= ADMIN_ASSET_URL ?>img/blog-details-post-img-2.jpg" alt="" class="img-responsive">
                </div>
              </div>
              </div>
              <p>Blinded by desire, that they cannot foresee the pain and trouble that are bounds to ensure blames belongs to those a weakness of will, which is the same therefore always holds in these matters to this princple of selection and he amon and the other hand, we denounce with righteous indignation and dislike mens who are so begueled and demoralized. blinded by desire, that they cannot foresee the pain and trouble that are bounds to ensure blames belongs to those a weakness of will, which is the same therefore always holds in these matters to this princple of selection and he reject</p>
              <p>Blinded by desire, that they cannot foresee the pain and trouble that are bounds to ensure blames belongs to those a weakness of will, which is the same therefore always</p>
              <div class="nav-bottom">
                <a class="btn btn-flat-text" href="#" role="button">ROOM</a>
                <a class="btn btn-flat-text" href="#" role="button">HOTEL</a>
                <a class="btn btn-flat-text" href="#" role="button">TEA</a>
                <a class="btn btn-flat pull-right" href="#" role="button">SHARE</a>
              </div>
            </article>
            <article class="comments">
              <h3>COMMENTS</h3>
              <ul class="media-list">
                <li class="media">
                  <div class="media-left">
                    <a href="#">                
                      <img src="<?= ADMIN_ASSET_URL ?>img/blog-details-commenter.png" alt="">                
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="arrow_box">
                      <div class="comment-block">
                        <h4>DAVID</h4>
                        <span><time datetime="2016-05-20">MAY 20, 2016</time></span>
                      </div> 
                      <p>cannot foresee the pain and trouble that are bounds to ensure blames belongs to those a weakness of will</p>
                      <p class="font11">REPLAY</p>
                    </div>
                    <div class="media">
                      <div class="media-left">
                        <a href="#">                
                          <img src="<?= ADMIN_ASSET_URL ?>img/blog-details-commenter.png" alt="">                
                        </a>
                      </div>
                      <div class="media-body">
                        <div class="arrow_box">
                          <div class="comment-block">
                            <h4>DAVID</h4>
                            <span><time datetime="2016-05-20">MAY 20, 2016</time></span>
                          </div> 
                          <p>cannot foresee the pain and trouble that are bounds to ensure blames belongs to those a weakness of will</p>
                          <p class="font11">REPLAY</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </article>
            <section id="feedback">
              <h3>SUBMIT A COMMENT</h3>
              <div class="row">
                <form class="comment-form">
                  <div class="form-group">
                    <label class="sr-only" for="userName">User Name</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" id="userName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="userEmail">Email</label>
                    <div class="col-md-4">
                      <input type="email" class="form-control" id="userEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="userWeb">Web</label>
                    <div class="col-md-4">
                      <input type="url" class="form-control" id="userWeb" placeholder="Web">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <textarea class="form-control" rows="7" placeholder="Comment"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-3">
                      <button type="submit" class="btn btn-flat">SUBMIT</button>
                    </div>
                  </div>
                </form>
              </div>
            </section>            
          </div>
        </div>
      </div>
    </main>
    
    <?php require_once "./_share/footer.php"; ?>
    <?php require_once "./_share/script.php"; ?>
  </body>

<!-- Mirrored from redqteam.com/sites/houston/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 05:56:42 GMT -->
</html>