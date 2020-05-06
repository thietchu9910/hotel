<?php
session_start();
require_once '../../config/utils.php';
$member_name = $_POST['member_name'];

$typeId = isset($_POST['id']) ? $_POST['id'] : false;

$checkTypeQuery = "select * from our_team where member_name = '$member_name'";

if($typeId !== false){
    $checkTypeQuery .= " and id != $typeId";
}

$types = queryExecute($checkTypeQuery, true);
echo count($types) == 0 ? "true" : "false";