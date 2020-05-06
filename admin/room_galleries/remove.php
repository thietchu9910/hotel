<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// get id from url
$id = isset($_GET['id']) ? $_GET['id'] : -1;

$getRemoveroom_galleriesQuery = "select * from room_galleries where id = $id";
$removeRoom_galleries = queryExecute($getRemoveRoom_galleriesQuery, false);

// s

$removeRoom_galleriesQuery = "delete from room_galleries where id = '$id'";
queryExecute($removeRoom_galleriesQuery, false);
header("location: " . ADMIN_URL . "room_galleries?msg=Xóa galleries thành công");
die;