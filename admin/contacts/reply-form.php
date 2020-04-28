<?php
session_start();
require_once "../../config/utils.php";
checkAdminLoggedIn();

$id = isset($_GET['id']) ? $_GET['id'] : -1;
$getContact = "select * from contact where id = $id";
$contact = queryExecute($getContact, false);

if (!$contact) {
    header('location:' . ADMIN_URL . 'contacts?msg=Liên hệ không tồn tại');
    die;
}
?>
<!DOCTYPE html>
<html>

<head>
    <?php include_once '../_share/style.php' ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php include_once '../_share/header.php' ?>

        <?php include_once '../_share/sidebar.php' ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Trả Lời Liên hệ</h1>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <form action="<?= ADMIN_URL . 'contacts/save-reply.php' ?>" id="answer-form" method="post"
                    enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $contact['id'] ?>">
                    <div class="container-fluid">
                        <div class="form-group" hidden>
                            <input type="text" name="reply_by" class="form-control"
                                value="<?= $_SESSION[AUTH]['id'] ?>">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="">Tên người gửi</label>
                                            <input type="text" name="name" class="form-control"
                                                value="<?= $contact['name'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Số điện thoại</label>
                                            <input type="text" name="phone" class="form-control"
                                                value="<?= $contact['phone'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" name="email" class="form-control"
                                                value="<?= $contact['email'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Lời nhắn</label>
                                            <textarea name="message" class="form-control" id="" cols="30"
                                                rows="10"><?= $contact['message'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="">Trả lời</label>
                                            <textarea name="reply" class="form-control" id="" cols="30"
                                                rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 d-flex justify-content-start">
                                    <button type="submit" class="btn btn-primary">Lưu</button>&nbsp;
                                    <a href="<?= ADMIN_URL . 'contacts' ?>" class="btn btn-danger">Hủy</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include_once '../_share/footer.php' ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php include_once '../_share/script.php' ?>
    <script>
    $('#answer-form').validate({
        rules: {
            reply: {
                required: true
            },
        },
        messages: {
            reply: {
                required: "Hãy nhập phản hồi"
            },
        }
    });
    </script>
</body>

</html>