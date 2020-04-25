<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

$id = isset($_GET['id']) ? $_GET['id'] : -1;

// get keyword from url
$keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";
$status = isset($_GET['status']) == true ? $_GET['status'] : "";
// get vehicle types query
$getOur_teamQuery = "select * from our_team";
// điều kiện tìm kiếm
if ($keyword !== "" && $keyword !== false) {
    $getOur_teamQuery .= " where (name like '%$keyword%'
                                    or seat like '%$keyword%')";
    if ($status !== "" && $status !== false) {
        $getOur_teamQuery .= " and status = '$status'";
    }
} else {
    if ($status !== "" && $status !== false) {
        $getOur_teamQuery .= " where status = '$status'";
    }
}
$our_team = queryExecute($getOur_teamQuery, true);
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
                            <h1 class="m-0 text-dark">Our_team</h1>
                        </div><!-- /.col -->
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
                                        <input type="text" value="<?php echo $keyword ?>" class="form-control" name="keyword" placeholder="Nhập tên loại phương tiện...">
                                    </div>
                                    <div class="form-group col-4">
                                        <select name="status" class="form-control">
                                            <option selected value="">Tất cả</option>
                                            <option value="<?= ACTIVE ?>">Có hiệu lực</option>
                                            <option value="<?= INACTIVE ?>">Không có hiệu lực</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-2">
                                        <button type="submit" class="btn btn-success">Tìm kiếm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Danh sách vehicle types  -->
                        <table class="table table-stripped">
                            <thead>
                                <th>ID</th>
                                <th>Member_name</th>
                                <th>Position</th>
                                <th>Image_url</th>
                                <th>Facebook_url</th>
                                <th>twiter_url</th>
                                <th>linked_in_url</th>
                                <th>
                                    <a href="<?php echo ADMIN_URL . 'our_team/add-form.php' ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Thêm</a>
                                </th>
                            </thead>
                            <tbody>
                                <?php foreach ($our_team as $ot) : ?>
                                    <tr>
                                        <td><?= $ot['id'] ?></td>
                                        <td><?= $ot['member_name'] ?></td>
                                        <th><?= $ot['position'] ?></th>
                                        <td>
                                            <img class="img-fluid" src="<?= BASE_URL . $ot['image_url'] ?>" alt="">
                                        </td>
                                        <td><?= $ot['facebook_url'] ?></td>
                                        <td><?= $ot['twiter_url'] ?></td>
                                        <td><?= $ot['linked_in_url'] ?></td>

                                        <td>
                                            <a href="<?php echo ADMIN_URL . 'our_team/edit-form.php?id=' . $ot['id'] ?>" class="btn btn-sm btn-info">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="<?php echo ADMIN_URL . 'our_team/remove.php?id=' . $ot['id'] ?>" class="btn-remove btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i>
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
                    text: "Bạn có chắc chắn muốn xóa loại phương tiền này?",
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
            <?php if (isset($_GET['msg'])) : ?>
                Swal.fire({
                    position: 'bottom-center',
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