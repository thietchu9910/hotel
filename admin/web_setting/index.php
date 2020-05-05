<?php
// bắt đầu một session
session_start();
//kết nối đến file utils
require_once '../../config/utils.php';
//kiểm tra quyền đăng nhập
checkAdminLoggedIn();

$keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";

// danh sách news
$getWeb_settingQuery = "select b.* from web_setting b";
// tìm kiếm
if ($keyword !== "") {
    $getWeb_settingQuery .= " where (n.title like '%$keyword%'
                            or n.content like '%$keyword%')";
}
$web_setting = queryExecute($getWeb_settingQuery, true);

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
                            <h1 class="m-0 text-dark">Web_setting</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= ADMIN_URL . 'dashboard' ?>">Dashboard</a></li>
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
                        <div class="col-md-10 col-offset-1">
                            <!-- Filter  -->
                            <form action="" method="get">
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <input type="text" value="<?php echo $keyword ?>" class="form-control" name="keyword" placeholder="Nhập tên bản tin,...">
                                    </div>
                                    <div class="form-group col-2">
                                        <button type="submit" class="btn btn-success">Tìm kiếm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Danh sách users  -->
                        <table class="table table-stripped">
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Title_hotel</th>
                                <th>Logo</th>                                                             
                                <th>Small_logo</th>
                                <th>Hotline</th>
                                <th>Locate</th>
                                <th>Email</th>
                                <th>Background_img</th>
                                <th>Slogan</th>
                                <th>Sologan_author</th>
                                <th>Intro_content</th>
                             
                            </thead>
                            <tbody>
                                <?php foreach ($web_setting as $bo) : ?>
                                    <tr>
                                        <td><?php echo $bo['id'] ?></td>
                                        <td><?php echo $bo['name'] ?></td>
                                        <td><?php echo $bo['title_hotel'] ?></td>
                                        <td><?php echo $bo['logo'] ?></td>
                                        <td><?php echo $bo['small_logo'] ?></td>
                                        <td><?php echo $bo['hotline'] ?></td>
                                        <td><?php echo $bo['locate'] ?></td>
                                        <td><?php echo $bo['email'] ?></td>
                                        <td><?php echo $bo['background_img'] ?></td>
                                        <td><?php echo $bo['slogan'] ?></td>
                                        <td><?php echo $bo['slogan_author'] ?></td>
                                        <td><?php echo $bo['intro_content'] ?></td>
                                       
                                      
                                        <td>
                                            <a href="<?php echo ADMIN_URL . 'web_setting/edit-form.php?id=' . $bo['id'] ?>" class="btn btn-sm btn-info">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.row -->

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
    <script>
        $(document).ready(function() {
            $('.btn-remove').on('click', function() {
                var redirectUrl = $(this).attr('href');
                Swal.fire({
                    title: 'Thông báo!',
                    text: "Bạn có chắc chắn muốn xóa tin này?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Đồng ý'
                }).then((result) => { // arrow function es6 (es2015)
                    if (result.value) {
                        window.location.href = redirectUrl;
                    }
                });
                return false;
            });
            <?php

            if (isset($_GET['msg'])) : ?>
                Swal.fire({
                    position: 'bottom-end',
                    icon: 'warning',
                    title: "<?= $_GET['msg']; ?>",
                    showConfirmButton: false,
                    timer: 1500
                });
            <?php endif; ?>
        });
    </script>
</body>

</html>