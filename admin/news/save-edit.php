<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên;
$id = trim($_POST['id']);
$content = trim($_POST['content']);
$title = trim($_POST['title']);
$image = $_FILES['featrue_image'];
$short_desc = trim($_POST['short_desc']);
$created_at = trim($_POST['created_at']);
$author_id = trim($_POST['author_id']);
// kiểm tra xem tin tức có tồn tại hay không
$getNewsQuery = "select * from news where id = '$id'";
$news = queryExecute($getNewsQuery, true);
// upload file
$filename = $news['featrue_image'];
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../public/admin/img/" . $filename);
    $filename = "public/admin/img/" . $filename;
}

$updateNewsQuery = "update news
                    set   title = '$title',
                    featrue_image = '$filename',
                    short_desc = '$short_desc',
                    content = '$content',
                    created_at = '$created_at',
                    author_id = '$author_id'
                    where id = '$id'";
queryExecute($updateNewsQuery, false);
//dd($filename    );
header("location: " . ADMIN_URL . "news");
die;