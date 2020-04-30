<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();

$name = trim($_POST['name']);
$adults = trim($_POST['adults']);
$chidren = trim($_POST['chidren']);
$total_price = trim($_POST['total_price']);
$check_out = trim($_POST['check_out']);
$check_in = trim($_POST['check_in']);
$insertBookingQuery = "insert into booking
                          (name, status, adults, chidren, total_price, check_in, check_out)
                    values
                          ('$name', 0, '$adults', '$chidren', '$total_price', '$check_in', '$check_out')";
queryExecute($insertBookingQuery, false);
header("location: " . ADMIN_URL . "booking");
die;
