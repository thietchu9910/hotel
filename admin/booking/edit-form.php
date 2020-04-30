<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

$id = isset($_GET['id']) ? $_GET['id'] : -1;

$getBookingEditQuery = "select * from booking where id = '$id'";
$bookingEdit = queryExecute($getBookingEditQuery, false);
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
                            <h1 class="m-0 text-dark">Edit booking</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->

                    <form id="edit-vehicle-form" action="<?= ADMIN_URL . 'booking/save-edit.php' ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <input type="text" class="form-control" name="id" value="<?= $_GET['id'] ?>" hidden>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="">Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $bookingEdit['name'] ?>">
                                </div>
                                <div class="form-group">    
                                    <input type="text" class="form-control" name="status" value="<?php echo $bookingEdit['status'] ?>" hidden>
                                </div>

                                <div class="form-group">
                                    <label for="">Adults<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="adults" value="<?php echo $bookingEdit['adults'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">Chidren<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="chidren" value="<?php echo $bookingEdit['chidren'] ?>">
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="">Total_price<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="total_price" value="<?php echo $bookingEdit['total_price'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">check_in<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="check_in" value="<?php echo $bookingEdit['check_in'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">check_out<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="check_out" value="<?php echo $bookingEdit['check_out'] ?>">
                                </div>



                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>&nbsp;
                            <a href="<?= ADMIN_URL . 'booking' ?>" class="btn btn-danger">Hủy</a>
                        </div>
                    </form>

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
        function encodeImageFileAsURL(element) {
            var file = element.files[0];
            if (file === undefined) {
                $('#preview-img').attr('src', "<?= DEFAULT_IMAGE ?>");
                return false;
            }
            var reader = new FileReader();
            reader.onloadend = function() {
                $('#preview-img').attr('src', reader.result)
            }
            reader.readAsDataURL(file);
        }
        $('#add-vehicle-form').validate({
            rules: {
                plate_number: {
                    required: true,
                    maxlength: 191,
                    remote: {
                        url: "<?= ADMIN_URL . 'vehicles/verify-plate-number-vehicle-existed.php' ?>",
                        type: "post",
                        data: {
                            name: function() {
                                return $("input[name='plate_number']").val();
                            }
                        }
                    }
                },
                type_id: {
                    required: true
                }
            },
            messages: {
                plate_number: {
                    required: "Hãy nhập phương tiện",
                    maxlength: "Số lượng ký tự tối đa bằng 191 ký tự",
                    remote: "Phương tiện đã tồn tại."
                },
                type_id: {
                    required: "Chọn loại phương tiện"
                }
            }
        });
    </script>
</body>