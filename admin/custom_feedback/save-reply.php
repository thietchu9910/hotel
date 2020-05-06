<?php
session_start();
include_once '../../config/utils.php';
$id = trim($_POST['id']);
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$reply_content = trim($_POST['reply_content']);
$comment = trim($_POST['comment']);
$reply_by = $_SESSION[AUTH]['name'];

$updateCustom_feedbackQuery = "update custom_feedback
                            set name= '$name',
                                email= '$email',
                                status= 1,
                                reply_content = '$reply_content',
                                comment = '$comment',
                                reply_by = '$reply_by'
                            where id = '$id'";
queryExecute($updateCustom_feedbackQuery, false);
dd($updateCustom_feedbackQuery);
header('location: '.ADMIN_URL. "custom_feedback");
die;
?>
