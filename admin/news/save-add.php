<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();

$content = trim($_POST['content']);
$title = trim($_POST['title']);
$featrue_image = $_FILES['featrue_image'];
$created_at = trim($_POST['created_at']);
$author_id = trim($_POST['author_id']);
$short_desc = trim($_POST['short_desc']);
// validate bằng php
$nameerr = "";
$emailerr = "";

// upload file ảnh
$filename = $news['featrue_image'];
if($featrue_image['size'] > 0){
    $filename = uniqid() . '-' . $featrue_image['name'];
    move_uploaded_file($featrue_image['tmp_name'], "../../public/admin/img/" . $filename);
    $filename = "public/admin/img/" . $filename;
}
$insertNewsQuery = "insert into news
                          (title, featrue_image, short_desc, content, created_at, author_id)
                    values
                          ('$title', '$filename ', '$short_desc', '$content', '$created_at', '$author_id')";
//dd($featrue_image);
queryExecute($insertNewsQuery, false);
header("location: " . ADMIN_URL . "news");
die;
