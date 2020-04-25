<?php
/**
 * 1. lấy id xuống
 * 2. kiểm tra xem có quyền để xóa tài khoản với id đc nhận hay không
 * 4. thực hiện câu lệnh xóa với csdl
 * 5. điều hướng về danh sách
 *
 */
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$id = isset($_GET['id']) ? $_GET['id'] : -1;


$removeBookingQuery = "delete from booking where id = $id";
queryExecute($removeBookingQuery, false);
header("location: " . ADMIN_URL . "booking?msg=Xóa tin tức thành công");
die;