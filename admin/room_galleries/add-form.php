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
                            <h1 class="m-0 text-dark">Add our_team</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <form id="add-our_team-form" action="<?= ADMIN_URL . 'our_team/save-add.php' ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Member_name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="member_name">
                                    <?php if (isset($_GET['member_nameerr'])) : ?>
                                        <label class="error"><?= $_GET['member_nameerr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Position<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="position">
                                    <?php if (isset($_GET['member_nameerr'])) : ?>
                                        <label class="error"><?= $_GET['positionerr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Facebook_url<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="facebook_url">
                                    <?php if (isset($_GET['facebook_urlerr'])) : ?>
                                        <label class="error"><?= $_GET['Facebook_urlerr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Twiter<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="twiter_url">
                                    <?php if (isset($_GET['twitererr'])) : ?>
                                        <label class="error"><?= $_GET['twitererr'] ?></label>
                                    <?php endif; ?>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Linked_in_url<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="linked_in_url">
                                    <?php if (isset($_GET['linked_in_urlerr'])) : ?>
                                        <label class="error"><?= $_GET['linked_in_urlerr
                                        '] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="col-6 offset-md-3">
                                    <img src="<?= DEFAULT_IMAGE ?>" id="preview-img" class="img-fluid">
                                </div>
                                <div class="input-group mb-3 mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Ảnh <span class="text-danger">*</span></span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="featrue_image" onchange="util.convertImg(this, '#preview-img', '<?= DEFAULT_IMAGE ?>')">
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
        $('#add-our-team-form').validate({
            rules: {
                member_name: {
                    required: true,
                    maxlength: 191,
                    remote: {
                        url: "<?= ADMIN_URL . 'our_team/verify-name-type-existed.php' ?>",
                        type: "post",
                        data: {
                            name: function() {
                                return $("input[name='name']").val();
                            }
                        }
                    }
                },
                position: {
                    required: true,

                },
                facebook_url: {
                    required: true
                },
                twiter_url: {
                    required: true;
                },
                linked_in_url: {
                    required: true;
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
    </script>
</body>