<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// get id from url
$id = isset($_GET['id']) ? $_GET['id'] : -1;

$getserviceQuery = "select * from service where id = '$id'";
$vehicleTypes = queryExecute($getserviceQuery, false);
if(!$vehicleTypes){
    header("location: " . ADMIN_URL . "service?msg=Loại phương tiện không tồn tại");
    die;
}

$removeservice = "delete from service where id = '$id'";
queryExecute($removeservice, false);
header("location: " . ADMIN_URL . "service?msg=Xóa loại phương tiện thành công");
die;