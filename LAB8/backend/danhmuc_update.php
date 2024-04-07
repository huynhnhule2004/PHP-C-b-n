<?php
include("../model/danhmuc.php");
$ma = $_GET["ma"];
$ten = $_GET["ten"];
$trangthai = $_GET["trangthai"];
suadm($ma, $ten, $trangthai);
?>