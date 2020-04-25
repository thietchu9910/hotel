<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();
// get id from url
$id = isset($_GET['id']) ? $_GET['id'] : -1;
// get data from vehicle types tables by id
$getHome_GalleriesQuery = "select * from home_galleries where id = '$id'";
$home_galleriesEdit = queryExecute($getHome_GalleriesQuery, false);
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
                            <h1 class="m-0 text-dark">Sửa loại phương tiện</h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->

                    <form id="add-vehicle-type-form" action="<?= ADMIN_URL . 'home_galleries/save-edit.php' ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Image_url<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="img_text" value="<?php $home_galleriesEdit['img_text'] ?>">
                                    <?php if (isset($_GET['img_urlerr'])) : ?>
                                        <label class="error"><?= $_GET['img_urlerr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Image_link<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="img_link" value="<?php $home_galleriesEdit['img_link'] ?>">
                                    <?php if (isset($_GET['img_linkerr'])) : ?>
                                        <label class="error"><?= $_GET['img_linkerr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Short_desc<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="short_desc" value="<?php $home_galleriesEdit['short_desc'] ?>">
                                    <?php if (isset($_GET['Short_descerr'])) : ?>
                                        <label class="error"><?= $_GET['Short_descerr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Price<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="price" value="<?php $home_galleriesEdit['price'] ?>">
                                    <?php if (isset($_GET['priceerr'])) : ?>
                                        <label class="error"><?= $_GET['priceerr'] ?></label>
                                    <?php endif; ?>
                                </div>

                               
                            </div>
                            <div class="col-md-6">
                            <div class="form-group d-flex justify-content-center">
                                    <img src="<?= DEFAULT_IMAGE ?>" width="300" id="preview-img" alt="">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="img_url" onchange="encodeImageFileAsURL(this)">
                                        <label class="custom-file-label" for="inputGroupFile01">Ảnh<span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-start">
                                    <button type="submit" class="btn btn-primary">Tạo</button>&nbsp;
                                    <a href="<?= ADMIN_URL . 'home_galleries' ?>" class="btn btn-danger">Hủy</a>
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
        $('#edit-vehicle-type-form').validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 191,
                    remote: {
                        url: "<?= ADMIN_URL . 'home_galleries/verify-name-type-existed.php' ?>",
                        type: "post",
                        data: {
                            name: function() {
                                return $("input[name='name']").val();
                            },
                            id: <?= $home_GalleriesEdit['id']?>
                        }
                    }
                },
                seat: {
                    required: true,
                    number: true,
                    min: 9,
                    max: 40
                },
                status: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "Hãy nhập loại phương tiện",
                    maxlength: "Số lượng ký tự tối đa bằng 191 ký tự",
                    remote: "Loại phương tiện đã tồn tại."
                },
                seat: {
                    required: "Nhập số ghế có",
                    number: "Hãy nhập số ghế bằng số",
                    min: "Số ghế tối thiểu phải lớn hơn hoặc bằng 9",
                    max: "Số ghế tối đa phải nhỏ hơn 40"
                },
                status: {
                    required: "Chọn trạng thái xe"
                }
            }
        });
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
    </script>
</body>

</html>