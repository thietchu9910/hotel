<?php
session_start();
require_once "./config/utils.php";
$check_in = ($_POST['check_in']);
$check_out = ($_POST['check_out']);
$adults = trim($_POST['adults']);
$chidren = trim($_POST['chidren']);
$room_id = $_POST['room_id'];

$getRoomPriceQuery = "select * from room where id = '$room_id'";
$roomPrice = queryExecute($getRoomPriceQuery, false);

$date1 = strtotime($check_in);
$date2 = strtotime($check_out);


if($date2 - $date1 < 0) {
  echo " asjc c ";die;
}else if($date2 - $date1 == 0){
  echo " thanhf coong";die;
}

$diff=date_diff($date2,$date1);
$a = $diff->format('a');




$today = date("Y-m-d");
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
// dd($insertBookingQuery);

$getBookingQuery = "select * from booking where room_id = $room_id order by id desc";
$booking = queryExecute($getBookingQuery, false);

header("location: " . BASE_URL . "cart.php?id=".$booking['id'].'&'.'mesge=active');
die;
