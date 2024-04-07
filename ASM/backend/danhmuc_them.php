<?php
include("../model/danhmuc.php");
$ten = $_GET["ten"];
$link = $_GET["link"];
$trangthai = $_GET["trangthai"];
themdm($ten,$link,$trangthai);
?>