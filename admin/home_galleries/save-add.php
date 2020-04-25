<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$img_text = trim($_POST['img_text']);
$img_link = trim($_POST['img_link']);
$short_desc = trim($_POST['short_desc']);
$price = trim($_POST['price']);
$image = $_FILES['img_url'];
$filename = "";
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../public/admin/img/" . $filename);
    $filename = "public/admin/img/" . $filename;
}

$insertHome_galleriesQuery = "insert into home_galleries
                          (img_text, img_url, img_link, short_desc, price)
                    values
                          ('$img_text', '$filename', '$img_link', '$short_desc', '$price')";
queryExecute($insertHome_galleriesQuery, false);
//dd($insertHome_galleriesQuery);
header("location: " . ADMIN_URL . "home_galleries");
die;