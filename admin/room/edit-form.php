<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

$id = isset($_GET['id']) ? $_GET['id'] : -1;

$getRoomQuery = "select * from room where id = '$id'";
$roomEdit = queryExecute($getRoomQuery, false);
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
                            <h1 class="m-0 text-dark">Edit room</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->

                    <form id="edit-room-form" action="<?= ADMIN_URL . 'room/save-edit.php' ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="id" value="<?= $roomEdit['id'] ?>" hidden>
                                <div class="form-group">
                                    <label for="">Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" value="<?= $roomEdit['name'] ?>">
                                    <?php if (isset($_GET['nameerr'])) : ?>
                                        <label class="error"><?= $_GET['nameerr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Status<span class="text-danger">*</span></label>
                                    <select name="status" id="statusRoom" class="form-control">
                                        <option value="">Select ... </option>
                                        <option value="<?= ACTIVE ?>">Kích hoạt</option>
                                        <option value="<?= INACTIVE ?>">Khong Kich hoạt</option>
                                    </select>
                                    <?php if (isset($_GET['statuserr'])) : ?>
                                        <label class="error"><?= $_GET['statuserr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Short_desc<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="short_desc" value="<?= $roomEdit['short_desc'] ?>">
                                    <?php if (isset($_GET['short_descerr'])) : ?>
                                        <label class="error"><?= $_GET['short_descerr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="">About<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="about" value="<?= $roomEdit['about'] ?>">
                                    <?php if (isset($_GET['abouterr'])) : ?>
                                        <label class="error"><?= $_GET['abouterr'] ?></label>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label for="">Adults<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="adults" value="<?= $roomEdit['adults'] ?>">
                                    <?php if (isset($_GET['adultserr'])) : ?>
                                        <label class="error"><?= $_GET['adultserr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Children<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="children" value="<?= $roomEdit['children'] ?>">
                                    <?php if (isset($_GET['childrenerr'])) : ?>
                                        <label class="error"><?= $_GET['childrenerr'] ?></label>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-6 offset-md-3">
                                    <img src="<?= BASE_URL . $roomEdit['featrue_image'] ?>" id="preview-img" class="img-fluid">
                                </div>
                                <div class="input-group mb-3 mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Ảnh phương tiện<span class="text-danger">*</span></span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="featrue_image" 
                                        onchange="util.convertImg(this, '#preview-img', '<?= BASE_URL . $roomEdit['featrue_image'] ?>')">
                                        <label class="custom-file-label" for="inputGroupFile01">Chọn ảnh</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>&nbsp;
                            <a href="<?= ADMIN_URL . 'room' ?>" class="btn btn-danger">Hủy</a>
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
        
        var statusRoom = document.getElementById('statusRoom');
        statusRoom.value = <?= $room['status'] ?>;
        $(document).ready(() => {
            
            $('#edit-room-form').validate({
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