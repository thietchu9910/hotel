<?php
session_start();
require_once "./config/utils.php";
$idRoom= trim($_POST['idRoom']);
$check_in = ($_POST['check_in']);
$check_out = ($_POST['check_out']);
$adults = trim($_POST['adults']);
$chidren = trim($_POST['chidren']);
$room_id = $_POST['room_id'];

$getRoomPriceQuery = "select * from room where id = '$room_id'";
$roomPrice = queryExecute($getRoomPriceQuery, false);

// thoi gian hien tai
date_default_timezone_set('Asia/Ho_Chi_Minh');
$timeNow = date('m/d/Y',time());

$date1 = date('m/d/Y', strtotime($check_in));
$date2 = date('m/d/Y', strtotime($check_out));

// validate set date

if($timeNow - $date1 <= 0) {
  header("Location: " . BASE_URL . "single-room.php?id=$idRoom&msg=Không thể chọn ngày hôm nay và trước ngày hôm nay");
  die;
}

if($date2 - $date1 == 0){
  header("Location: " . BASE_URL . "single-room.php?id=$idRoom&msg=Không thể chọn ngày đến bằng ngày rời đi");
  die;
}

// $diff=date_diff($date2,$date1);
// $a = $diff->format('a');

// $today = date("Y-m-d");
$check_inerr = "";
if (strtotime($today) > strtotime($check_in)) {
  $check_inerr =  "Nhập ngày vào";
}

$total = $a * $roomPrice['price'];

$insertBookingQuery = "insert into booking
                          (status,room_id, adults, chidren,total_price, check_in, check_out )
                    values
                          (0,'$room_id','$adults', '$chidren','$total','$check_in', '$check_out' )";
queryExecute($insertBookingQuery, false);
header("location: " . BASE_URL . "cart.php?id=".$booking['id'].'&'.'mesge=active');
die;
