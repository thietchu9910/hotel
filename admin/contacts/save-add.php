<?php
session_start();
include_once '../../config/utils.php';

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$message = trim($_POST['message']);

$insertContactQuery = "insert into contact
                                    (name,email,phone,message)
                                values
                                    ('$name','$email','$phone','$message')";
queryExecute($insertContactQuery, false);
header('location: '.BASE_URL."contact.php?msg=Gửi lời nhắn thành công");
die;
?>
