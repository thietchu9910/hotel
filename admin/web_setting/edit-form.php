<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

$id = isset($_GET['id']) ? $_GET['id'] : -1;

$getWeb_settingEditQuery = "select * from web_setting where id = '$id'";
$web_settingEdit = queryExecute($getWeb_settingEditQuery, false);

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
                            <h1 class="m-0 text-dark">Sửa phương tiện</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->

                    <form id="edit-vehicle-form" action="<?= ADMIN_URL . 'web_setting/save-edit.php' ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <input name="id" value="<?php echo $web_settingEdit['id'] ?>" hidden>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Name<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="name" value="<?php echo $web_settingEdit['name']?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Title_hotel<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title_hotel" value="<?php echo $web_settingEdit['title_hotel']?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Logo<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="logo" value="<?php echo $web_settingEdit['logo']?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Small_logo<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="small_logo" value="<?php echo $web_settingEdit['small_logo']?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Hotline<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="hotline" value="<?php echo $web_settingEdit['hotline']?>">
                                </div>
                               
                               

                               
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                    <label for="">Locate<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="locate" value="<?php echo $web_settingEdit['locate']?>">
                                </div>
                            <div class="form-group">
                                    <label for="">Email<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="email" value="<?php echo $web_settingEdit['email']?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Background_img<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="background_img" value="<?php echo $web_settingEdit['background_img']?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Slogan<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="slogan" value="<?php echo $web_settingEdit['slogan']?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Slogan_author<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="slogan_author" value="<?php echo $web_settingEdit['slogan_author']?>">
                                </div>
                              
                                
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>&nbsp;
                            <a href="<?= ADMIN_URL . 'web_setting' ?>" class="btn btn-danger">Hủy</a>
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