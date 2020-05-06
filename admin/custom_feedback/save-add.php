<?php
session_start();
include_once '../../config/utils.php';

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$comment = trim($_POST['comment']);
$room_id = trim($_POST['room_id']);


$insertCustom_feedbackQuery = "insert into custom_feedback
                                    (name,email,status,comment,room_id)
                                values
                                    ('$name','$email',0,'$comment', '$room_id')";
queryExecute($insertCustom_feedbackQuery, false);
header('location: '.BASE_URL."single-room.php?msg=Gửi lời nhắn thành công");
die;
?>
