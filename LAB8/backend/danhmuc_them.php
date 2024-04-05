<?php
include("../model/sanpham.php");
$ten = $_GET["ten"];
$gia = $_GET["gia"];
$soluong = $_GET["soluong"];
$mota = $_GET["mota"];
$link = $_GET["link"];
$loai = $_GET["loai"];
$trangthai = $_GET["trangthai"];
themsp($ten,$gia,$soluong,$mota,$link,$loai,$trangthai);
?>