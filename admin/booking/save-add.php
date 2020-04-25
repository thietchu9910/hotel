<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();

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

// validate bằng php
$checkin_date = "";
$first_name = "";

$insertBookingQuery = "insert into booking
                          (checkin_date, first_name, last_name, email, phone_number, address, adults, chidren, total_price, created_date, reply_by, reply_message, checked_in, check_in_date, message, feedback_room)
                    values
                          ('$checkin_date', '$first_name', '$last_name', '$email', '$phone_number', '$address', '$adults', '$chidren', '$total_price', '$created_date', '$reply_by', '$reply_message', '$checked_in', '$check_in_date', '$message', '$feedback_room')";
dd($insertNewsQuery);
queryExecute($insertBookingQuery, false);
header("location: " . ADMIN_URL . "booking");
die;
