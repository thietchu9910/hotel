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

                    <form id="edit-vehicle-form" action="<?= ADMIN_URL . 'booking/save-edit.php' ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <input name="id" value="<?php echo $BookingEdit['id'] ?>" hidden>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Checkin_date<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="checkin_date" value="<?php echo $bookingEdit['checkin_date']?>">
                                </div>
                                <div class="form-group">
                                    <label for="">First_name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="first_name" value="<?php echo $bookingEdit['first_name']?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Last_name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="last_name" value="<?php echo $bookingEdit['last_name']?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Email<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="email" value="<?php echo $bookingEdit['email']?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Phone_number<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="phone_number" value="<?php echo $bookingEdit['phone_number']?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Address<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="address" value="<?php echo $bookingEdit['address']?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Adults<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="adults" value="<?php echo $bookingEdit['adults']?>">
                                </div>
                                

                               
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                    <label for="">Chidren<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="chidren" value="<?php echo $bookingEdit['chidren']?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Total_price<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="total_price" value="<?php echo $bookingEdit['total_price']?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Created_date<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="created_date" value="<?php echo $bookingEdit['created_date']?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Reply_by<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="reply_by" value="<?php echo $bookingEdit['reply_by']?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Reply_message<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="reply_message" value="<?php echo $bookingEdit['reply_message']?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Feedback_room<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="feedback_room" value="<?php echo $bookingEdit['feedback_room']?>">
                                </div>
                                
                                <div class="input-group mb-3 mt-3">
                                    
                                   
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