<?php
session_start();
require_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên;
$id = trim($_POST['id']);
$checkin_date = trim($_POST['checkin_date']);
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$email = trim($_POST['email']);
$phone_number = trim($_POST['phone_number']);
$address = trim($_POST['address']);
$adults = trim($_POST['adults']);
$chidren = trim($_POST['chidren']);
$total_price = trim($_POST['total_price']);
$created_date = trim($_POST['created_date']);
$reply_by = trim($_POST['reply_by']);
$reply_message = trim($_POST['reply_message']);
$checked_in = trim($_POST['checked_in']);
$check_in_date = trim($_POST['check_in_date']);
$message = trim($_POST['message']);
$feedback_room = trim($_POST['feedback_room']);
// kiểm tra xem tin tức có tồn tại hay không
$getBookingQuery = "select * from booking where id = '$id'";
$booking = queryExecute($getBookingQuery, false);

$updateBookingQuery = "update booking
                    set  
                          checkin_date = '$checkin_date' ,
                          first_name = $first_name,
                          last_name = '$last_name', 
                          email = '$email', 
                          phone_number = '$phone_number', 
                          address = '$address', 
                          adults = '$adults', 
                          chidren = '$chidren', 
                          total_price = '$total_price',
                          created_date = '$created_date',
                          reply_by = '$reply_by', 
                          reply_message = '$reply_message', 
                          checked_in = '$checked_in', 
                          check_in_date = '$check_in_date', 
                          message = '$message', 
                          feedback_room = '$feedback_room' 
                    where id = '$id'";
dd($updateBookingQuery);
//queryExecute($updateBookingQuery, false);
header("location: " . ADMIN_URL . "booking");
die;