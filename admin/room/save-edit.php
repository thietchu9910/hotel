<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$id = trim($_POST['id']);
$name = trim($_POST['name']);
$status = trim($_POST['status']);
$image = $_FILES['featrue_image'];
$about = trim($_POST['about']);
$adults = trim($_POST['adults']);
$children = trim($_POST['children']);
$short_desc = trim($_POST['short_desc']);
// validate bằng php

$getRoomQuery = "select * from room where id = '$id'";
$room = queryExecute($getRoomQuery, false   );
// upload file
$filename = $room['featrue_image'];
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../public/admin/img/" . $filename);
    $filename = "public/admin/img/" . $filename;
}
$updateRoomQuery = "update room
                    set
                        title = '$title',
                        featrue_image = '$filename',
                        status = '$status',
                        short_desc = '$short_desc',
                        about = '$about',
                        adults = '$adults',
                        children = '$children'
                    where id = '$id'";
queryExecute($updateRoomQuery, false);
//dd($updateRoomQuery);
header("location: " . ADMIN_URL . "room?msg=Sửa thông tin phương tiện thành công");
die;

