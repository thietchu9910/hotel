<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// get id from url
$id = isset($_GET['id']) ? $_GET['id'] : -1;

$getHome_galleriesQuery = "select * from home_galleries where id = '$id'";
$vehicleTypes = queryExecute($getHome_galleriesQuery, false);
if(!$vehicleTypes){
    header("location: " . ADMIN_URL . "home_galleries?msg=Loại phương tiện không tồn tại");
    die;
}

$removeHome_galleries = "delete from home_galleries where id = '$id'";
queryExecute($removeHome_galleries, false);
header("location: " . ADMIN_URL . "home_galleries?msg=Xóa loại phương tiện thành công");
die;