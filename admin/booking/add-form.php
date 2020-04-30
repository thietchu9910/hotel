<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();
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
                            <h1 class="m-0 text-dark">Thêm phòng</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <form id="add-user-form" action="<?= ADMIN_URL . 'booking/save-add.php' ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="">Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name">
                                </div>

                                <div class="form-group">
                                    
                                    <input type="text" class="form-control" name="status" hidden>
                                </div>
                                <div class="form-group">
                                    <label for="">Adults<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="adults">
                                </div>
                                <div class="form-group">
                                    <label for="">Chidren<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="chidren">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Total_price<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="total_price">
                                </div>
                                <div class="form-group">
                                    <label for="">Check_in<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="check_in">
                                </div>
                                <div class="form-group">
                                    <label for="">Check_in<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="check_out">
                                </div>
                            </div>
                            <div class="from-group p-2">
                                <div class="col d-flex justify-content-start">
                                    <button type="submit" class="btn btn-primary">Tạo</button>&nbsp;
                                    <a href="<?= ADMIN_URL . 'booking' ?>" class="btn btn-danger">Hủy</a>
                                </div>
                            </div>
                        </div>

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

        $('#add-user-form').validate({
            rules: {
                title: {
                    required: true,
                    maxlength: 191
                },
                content: {
                    required: true,
                    maxlength: 191
                },
                image: {
                    required: true,
                    extension: "png|jpg|jpeg|gif"
                }
            },
            messages: {
                title: {
                    required: "Hãy nhập tên bản tin",
                    maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
                },

                content: {
                    required: "Hãy nhập thông tin",
                    maxlength: "Số lượng ký tự tối đa bằng 500 ký tự"

                },
                image: {
                    required: "Hãy nhập ảnh",
                    extension: "Hãy nhập đúng định dạng ảnh (jpg | jpeg | png | gif)"
                }
            }
        });
    </script>
</body>

</html>