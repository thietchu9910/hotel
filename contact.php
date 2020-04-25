<?php
session_start();
require_once "./config/utils.php";
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from redqteam.com/sites/houston/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Mar 2020 06:52:20 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Houston | Contact</title>
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
                                <input type="password" name="rq-user-password" id="rq-user-password"
                                    placeholder="Password">
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
        <?php include_once './public/_share/header.php'; ?>

        <div id="map" style="position: relative" ;>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d29250.209765296404!2d105.8194541!3d21.0227387!3m2!1i1024!2i768!4f13.1!5e1!3m2!1svi!2s!4v1585295978631!5m2!1svi!2s"
                width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe></div>

        <div class="rq-contact-message">
            <div class="container">
                <div class="rq-submit-review">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <h2>send a message</h2>
                            <form action="#">
                                <input type="text" name="rq-contact-name" id="rq-contact-name" placeholder="Name">
                                <input type="email" name="rq-contact-email" id="rq-contact-email" placeholder="Email">
                                <input type="text" name="rq-contact-web" id="rq-contact-web" placeholder="Web">
                                <textarea name="rq-contact-message" id="rq-contact-message" cols="30" rows="5"
                                    placeholder="Message"></textarea>
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                        <!----- /col-md-8  ------>
                        <div class="col-md-3 col-md-offset-1 col-sm-4">
                            <div class="rq-address-wrapper">
                                <h5>address 1</h5>
                                <ul>
                                    <li>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <a href="#">Green lake, Hotel plaza <br> <span>new york, USA</span> </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <a href="#">807 302 2186</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <a href="#">mail@domain.com</a>
                                    </li>
                                </ul>
                            </div>

                            
                        </div>
                    </div>
                    <!---- /row ---->
                </div>
            </div>
        </div>

        <?php require_once "./public/_share/footer.php"?>
    </div><!-- main-wrapper -->
    <?php require_once "./public/_share/script.php"; ?>
</body>

<!-- Mirrored from redqteam.com/sites/houston/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Mar 2020 06:52:20 GMT -->

</html>