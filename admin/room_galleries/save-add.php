<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$member_name = trim($_POST['member_name']);
$position = trim($_POST['position']);
$image = $_FILES['image_url'];
$facebook_url = trim($_POST['facebook_url']);
$twiter_url = trim($_POST['twiter_url']);
$linked_in_url = trim($_POST['linked_in_url']);


// validate bằng php
$member_name = "";
$position = "";
$image_url = "";
$facebook_url = "";
$twiter_url = "";
$linked_in_url = "";



if ($image_url['size'] > 0) {
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../public/admin/img/" . $filename);
    $filename = "public/admin/img/" . $filename;
}

$insertOur_teamQuery = "insert into our_team
                          (member_name, position, image_url , facebook_url, twiter_url, linked_in_url)
                    values
                          ('$member_name', '$position', '$filename', '$facebook_url', '$twiter_url', '$linked_in_url')";
queryExecute($insertOur_teamQuery, false);
dd($insertOur_teamQuery);
//header("location: " . ADMIN_URL . "our_team");
die;