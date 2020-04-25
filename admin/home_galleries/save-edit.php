<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên
$id = trim($_POST['id']);
$img_text = trim($_POST['img_text']);
$img_link = trim($_POST['img_link']);
$short_desc = trim($_POST['short_desc']);
$price = trim($_POST['price']);
$image = $_FILES['img_url'];

$getHome_galleriesQuery = "select * from home_galleries where id = '$id'";
$home_galleries = queryExecute($getHome_galleriesQuery, false);

$filename = "";
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../public/admin/img/" . $filename);
    $filename = "public/admin/img/" . $filename;
}


$updateHome_GalleriesQuery = "update home_galleries
                    set
                          img_text = '$img_text',
                          img_url = '$filename',
                          img_link = '$img_link',
                          short_desc = '$short_desc',
                          price = '$price'
                    where id = '$id'";
queryExecute($updateHome_GalleriesQuery, false);
//dd($updateHome_GalleriesQuery);
header("location: " . ADMIN_URL . "home_galleries");
die;