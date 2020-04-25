<?php
session_start();
require_once '../../config/utils.php';

checkAdminLoggedIn();

$id = isset($_GET['id']) ? $_GET['id'] : -1;

$getNewsQuery = "select * from news where id = '$id'";
$news = queryExecute($getNewsQuery, false);

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
                            <h1 class="m-0 text-dark">Sửa tin tức</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <form id="add-user-form" action="<?= ADMIN_URL . 'news/save-edit.php' ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="id" value="<?= $news['id'] ?>" hidden>
                                <div class="form-group">
                                    <label for="">Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" value="<?= $news['title'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Short_desc<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="short_desc" value="<?= $news['short_desc'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">Created_at<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="created_at" value="<?= $news['created_at'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Content<span class="text-danger">*</span></label>
                                    <textarea name="content" class="form-control" id="" cols="30" rows="5"><?= $news['content'] ?></textarea>
                                </div>


                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Author_id<span class="text-danger">*</span></label>
                                    <input type="author_id" class="form-control" name="created_at" value="<?= $news['author_id'] ?>">
                                </div>
                                <div class="col-6 offset-md-3">
                                    <img src="<?= BASE_URL . $news['featrue_image'] ?>" id="preview-img" class="img-fluid">
                                </div>
                                <div class="input-group mb-3 mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Ảnh tin tức<span class="text-danger">*</span></span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="featrue_image" onchange="util.convertImg(this, '#preview-img', '<?= BASE_URL . $news['featrue_image'] ?>')">
                                        <label class="custom-file-label" for="inputGroupFile01">Chọn ảnh</label>
                                    </div>
                                </div>
                                <div class="col-6 d-flex justify-content-start">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>&nbsp;
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
        $('#add-user-form').validate({
            rules: {
                title: {
                    required: true,
                    maxlength: 100
                },
                content: {
                    required: true
                }
            },
            messages: {
                title: {
                    required: "Hãy nhập tên bản tin",
                    maxlength: "Số lượng ký tự tối đa bằng 100 ký tự"
                },

                content: {
                    required: "Hãy nhập nội dung bài viết"

                }
            }
        });

    </script>
</body>

</html>