<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên
$id = trim($_POST['id']);
$room_id = trim($_POST['room_id']);
$img_url = $_FILES['img_url'];

$filename = "";
if($img_url['size'] > 0){
    $filename = uniqid() . '-' . $img_url['name'];
    move_uploaded_file($img_url['tmp_name'], "../../public/admin/img/" . $filename);
    $filename = "public/admin/img/" . $filename;
}

$updateRoom_galleriesQuery = "update room_galleries
                    set
                          room_id = '$room_id',
                          img_url = '$filename',
                    where id = '$id'";
queryExecute($updateRoom_galleriesQuery, false);
header("location: " . ADMIN_URL . "room_galleries");
die;