<header>
    <!-- Navigation Menu start-->
    <nav class="navbar rq-header-main-menu navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Navbar Toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target=".navbar-collapse" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Logo -->
                <a class="navbar-brand" href="index.php"><img class="logo" src="<?= ADMIN_ASSET_URL ?>img/logo.png"
                        alt="GLIMPSE"></a>
            </div>
            <!-- Navbar Toggle End -->

            <!-- navbar-collapse start-->
            <div id="nav-menu" class="navbar-collapse rq-menu-wrapper collapse" role="navigation">
                <ul class="nav navbar-nav rq-menus">
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="select-room-grid.php">Room</a>
                    </li>
                    <li>
                        <a href="about-us.php">About</a>
                    </li>
                    <li>
                        <a href="cart.php">Cart</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                        
                    </li>
                    
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <?php if ($loggedInUser) : ?>
                                    <li role="presentation" >
                                        <a id="drop2" href="#" class="dropdown-toggle text-primary" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                            Hi, <?= $loggedInUser['name']; ?>
                                        </a>
                                        <ul id="menu2" class="rq-sub-menu" role="menu">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Thông tin cá nhân</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Đổi thông tin</a></li>
                                            <?php if ($loggedInUser !== null && $loggedInUser['role_id'] > 1):?>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" class="login-color" href="<?=ADMIN_URL. 'dashboard'?>">Quản trị</a></li>
                                            <?php endif;?>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?=LOGIN_URL.'logout.php'?>">Đăng xuất</a></li>
                                        </ul>
                                    </li>
                                <?php else : ?>
                                    <li><a href="<?=LOGIN_URL.'login.php'?>" class="nav-link text-primary login-color">Login</a></li>
                                <?php endif ?>
                </ul>
            </div>
            <!-- navbar-collapse end-->

        </div>
    </nav>
    <!-- Navigation Menu end-->
</header> <!-- / rq-header-section end here-->