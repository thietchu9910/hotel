<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();
// get vehicle types query
$getRoomQuery = "select * from room";
$room = queryExecute($getRoomQuery, true);
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
                            <h1 class="m-0 text-dark">Add room</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <form id="add-room-form" action="<?= ADMIN_URL . 'room/save-add.php' ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name">
                                    <?php if (isset($_GET['nameerr'])) : ?>
                                        <label class="error"><?= $_GET['nameerr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Status<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="status">
                                    <?php if (isset($_GET['statuserr'])) : ?>
                                        <label class="error"><?= $_GET['statuserr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Short_desc<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="short_desc">
                                    <?php if (isset($_GET['short_descerr'])) : ?>
                                        <label class="error"><?= $_GET['short_descerr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="">About<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="about">
                                    <?php if (isset($_GET['abouterr'])) : ?>
                                        <label class="error"><?= $_GET['abouterr'] ?></label>
                                    <?php endif; ?>
                                </div>
                            
                            <div class="form-group">
                                    <label for="">Adults<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="adults">
                                    <?php if (isset($_GET['adultserr'])) : ?>
                                        <label class="error"><?= $_GET['adultserr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Children<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="children">
                                    <?php if (isset($_GET['childrenerr'])) : ?>
                                        <label class="error"><?= $_GET['childrenerr'] ?></label>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-6 offset-md-3">
                                    <img src="<?= DEFAULT_IMAGE ?>" id="preview-img" class="img-fluid">
                                </div>
                                <div class="input-group mb-3 mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Ảnh <span class="text-danger">*</span></span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="featrue_image" 
                                        onchange="util.convertImg(this, '#preview-img', '<?= DEFAULT_IMAGE ?>')">
                                        <label class="custom-file-label" for="inputGroupFile01">Chọn ảnh</label>
                                    </div>
                                </div>
                                
                              
                                <div class="from-group p-2">
                                    <div class="col d-flex justify-content-start">
                                        <button type="submit" class="btn btn-primary">Tạo</button>&nbsp;
                                        <a href="<?= ADMIN_URL . 'room' ?>" class="btn btn-danger">Hủy</a>
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
        
        $('#add-vehicle-form').validate({
            rules: {
                plate_number: {
                    required: true,
                    maxlength: 191,
                    remote: {
                        url: "<?= ADMIN_URL . 'room/verify-plate-number-vehicle-existed.php' ?>",
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