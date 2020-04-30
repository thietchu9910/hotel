<?php
session_start();
require_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên;
$id = trim($_POST['id']);
$name = trim($_POST['name']);
$status = trim($_POST['status']);
$adults = trim($_POST['adults']);
$chidren = trim($_POST['chidren']);
$total_price = trim($_POST['total_price']);
$check_in = trim($_POST['check_in']);
$check_out = trim($_POST['check_out']);
// kiểm tra xem tin tức có tồn tại hay không
$getBookingQuery = "select * from booking where id = '$id'";
$booking = queryExecute($getBookingQuery, false);

$updateBookingQuery = "update booking
                    set  
                          name = $name,
                          status = 1, 
                          adults = '$adults', 
                          chidren = '$chidren', 
                          total_price = '$total_price',
                          check_in = '$check_in', 
                          check_out = '$check_out'
                    where id = '$id'";
//queryExecute($updateBookingQuery, false);
header("location: " . ADMIN_URL . "booking");
die;