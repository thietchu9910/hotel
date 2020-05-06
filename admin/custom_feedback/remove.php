<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();
$id = isset($_GET['id']) ? $_GET['id'] : -1;

$getCustom_feedback = "select * from custom_feedback where id = $id";
$custom_feedback = queryExecute($getCustom_feedback, false);

if(!$custom_feedback){
    header("location: ".ADMIN_URL."custom_feedbacks?msg=Phản hồi không tồn tại");
    die;
}
$removeCustom_feedback = "delete from custom_feedback where id = $id";
queryExecute($removeCustom_feedback, false);
header("location: ".ADMIN_URL."custom_feedback?msg=Xóa phản hồi thành công!")
?>