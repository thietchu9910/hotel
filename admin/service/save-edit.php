<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên
$id = trim($_POST['id']);
$name = trim($_POST['name']);
$short_desc = trim($_POST['short_desc']);
$price = trim($_POST['price']);
$image = $_FILES['img_url'];

$getserviceQuery = "select * from service where id = '$id'";
$service = queryExecute($getserviceQuery, false);

$filename = "";
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../public/admin/img/" . $filename);
    $filename = "public/admin/img/" . $filename;
}
$updateserviceQuery = "update service
                    set
                          img_url = '$filename',
                          short_desc = '$short_desc',
                          price = '$price',
                          name = '$name'
                    where id = '$id'";
queryExecute($updateserviceQuery, false);
header("location: " . ADMIN_URL . "service");
die;