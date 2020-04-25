<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// get id from url
$id = isset($_GET['id']) ? $_GET['id'] : -1;

$getRemoveOur_teamQuery = "select * from our_team where id = $id";
$removeOur_team = queryExecute($getRemoveOur_teamQuery, false);

// s

$removeOur_teamQuery = "delete from our_team where id = '$id'";
queryExecute($removeOur_teamQuery, false);
header("location: " . ADMIN_URL . "our_team?msg=Xóa loại phương tiện thành công");
die;