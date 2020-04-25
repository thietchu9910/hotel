<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$name = trim($_POST['name']);
$status = trim($_POST['status']);
$short_desc = trim($_POST['short_desc']);
$about = trim($_POST['about']);
$adults = trim($_POST['adults']);
$children = trim($_POST['children']);
$image_url = $_FILES['image_url'];

// validate bằng php
// $plate_numbererr = "";
// if(strlen($plate_number) == 0){
//     $plate_numbererr = "Yêu cầu nhập biển số xe";
// }
// // check plate_number đã tồn tại hay chưa
// $checkPlateQuery = "select * from room where plate_number = '$plate_number'";
// $plates = queryExecute($checkPlateQuery, true);
// if(count($plates) > 0){
//     $plate_numbererr = "Biển số đã tồn tại, vui lòng sử dụng biển số khác";
// }

// if($plate_numbererr != "" ){
//     header('location: ' . ADMIN_URL . "room/add-form.php?plate_numbererr=$plate_numbererr");
//     die;
// }

// upload file ảnh
$filename = "";
if ($image_url['size'] > 0) {
    $filename = uniqid() . '-' . $image_url['name'];
    move_uploaded_file($image_url['tmp_name'], "../../public/admin/img/" . $filename);
    $filename = "public/admin/img/" . $filename;
}

$insertRoomQuery = "insert into room
                          (name, image_url, status, short_desc, about, adults, children)
                    values
                          ('$name ', '$filename', '$status', '$short_desc', '$about', '$adults', '$children')";
queryExecute($insertRoomQuery, false);
//dd($insertRoomQuery);
header("location: " . ADMIN_URL . "room?msg=Sucess");
die;
?>