<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

# Lấy ra tất cả bản ghi trong bảng users
$getAllMemberSql = "select * from users where role_id = 1";
$users = queryExecute($getAllMemberSql, true);

# Lấy ra tất cả các bản ghi trong bảng vehicles
$getAllBookingSql = "select * from booking";
$booking = queryExecute($getAllBookingSql, true);

# Lấy ra tất cả các bản ghi trong bảng vehicle type
$getAllNewsSql = "select * from news";
$news = queryExecute($getAllNewsSql, true);

# Lấy ra tất cả các bản ghi trong bảng routes
$getAllWeb_settingSql = "select * from web_setting";
$web_setting = queryExecute($getAllWeb_settingSql, true);

# Lấy ra tất cả các bản ghi trong bảng shedules
$getAllServicesSql = "select * from services";
$services = queryExecute($getAllServicesSql, true);

#lấy ra các gt của bản ghi trong our_team
$getAllOur_teamSql = "select * from our_team";
$our_team = queryExecute($getAllOur_teamSql, true);

# lấy ra các gt của bản ghi trong room
$getAllRoomSql = "select * from room";
$room = queryExecute($getAllRoomSql, true);
?>
<!DOCTYPE html>
<html>

<head>
    <?php include_once '../_share/style.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include_once '../_share/header.php'; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once '../_share/sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?= count($users); ?></h3>
                                    <p>Users</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <a href="<?= ADMIN_URL . 'users' ?>" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3><?= count($our_team) ?></h3>
                                    <p>Our_team</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-motorcycle"></i>
                                </div>
                                <a href="<?= ADMIN_URL . 'our_team' ?>" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h3><?= count($booking) ?></h3>
                                    <p>Booking</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-list-alt"></i>
                                </div>
                                <a href="<?= ADMIN_URL . 'booking/' ?>" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?= count($news) ?></h3>

                                    <p>News</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa fa-truck"></i>
                                </div>
                                <a href="<?= ADMIN_URL . 'news' ?>" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?= count($room) ?></h3>

                                    <p>Room</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa fa-truck"></i>
                                </div>
                                <a href="<?= ADMIN_URL . 'room' ?>" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?= count($web_setting) ?></h3>
                                    <p>Web_setting</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-route"></i>
                                </div>
                                <a href="<?= ADMIN_URL . 'web_setting' ?>" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include_once '../_share/footer.php'; ?>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php include_once '../_share/script.php'; ?>

</body>

</html>