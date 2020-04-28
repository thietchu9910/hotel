<?php
session_start();
require_once "./config/utils.php";
$check_in = ($_POST['check_in']);
$check_out = ($_POST['check_out']);
$adults = trim($_POST['adults']);
$chidren = trim($_POST['chidren']);
$room_id = $_POST['room_id'];

$insertBookingQuery = "insert into booking
                          (status,room_id, adults, chidren, check_in, check_out )
                    values
                          (0,'$room_id','$adults', '$chidren','$check_in', '$check_out' )";

queryExecute($insertBookingQuery, false);
//dd($insertBookingQuery);

$getBookingQuery = "select * from booking where room_id = $room_id";
$booking = queryExecute($getBookingQuery, false);

header("location: " . BASE_URL . "cart.php?id=".$booking['id'].'&&'.'mesge=active');
die;
