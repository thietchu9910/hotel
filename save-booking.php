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
$date1=date_create($check_in);
$date2=date_create($check_out);
$diff=date_diff($date1,$date2);
$a = $diff->format('%a');
if($a == 0){
      $a= 1;
}
$total = $a * $roomPrice['price'];
// dd($total);

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
