<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$name = trim($_POST['name']);
$short_desc = trim($_POST['short_desc']);
$price = trim($_POST['price']);
$image = $_FILES['img_url'];
$filename = "";
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../public/admin/img/" . $filename);
    $filename = "public/admin/img/" . $filename;
}

$insertserviceQuery = "insert into service
                          (img_url, short_desc, price, name)
                    values
                          ('$filename', '$short_desc', '$price', '$name')";
queryExecute($insertserviceQuery, false);
header("location: " . ADMIN_URL . "service");
die;