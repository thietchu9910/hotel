<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$id = isset($_GET['id']) ? $_GET['id'] : -1;

$getRemoveRoomQuery = "select * from room where id = $id";
$removeRoom = queryExecute($getRemoveRoomQuery, false);
if(!$removeRoom){
    header("location: " . ADMIN_URL . "room?msg=Phương tiện không tồn tại");
    die;
}

$removeRoomQuery = "delete from room where id = $id";
queryExecute($removeRoomQuery, false);
header("location: " . ADMIN_URL . "room?msg=Xóa phương tiện thành công");
die;