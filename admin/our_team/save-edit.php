<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên
$id = trim($_POST['id']);
$member_name = trim($_POST['member_name']);
$position = trim($_POST['postion']);
$image_url = $_FILES['image_url'];
$facebook_url = trim($_POST['facebook']);
$twiter_url = trim($_POST['twiter_url']);

$filename = "";
if($image_url['size'] > 0){
    $filename = uniqid() . '-' . $image_url['name'];
    move_uploaded_file($image_url['tmp_name'], "../../public/admin/img/" . $filename);
    $filename = "public/admin/img/" . $filename;
}

$updateOur_teamQuery = "update our_team
                    set
                          member_name = '$member_name',
                          position = '$position',
                          facebook_url = '$facebook',
                          twiter_url = '$twiter',
                          linked_in_url = '$linked_in_url'
                    where id = '$id'";
queryExecute($updateOur_teamQuery, false);
header("location: " . ADMIN_URL . "our_team");
die;