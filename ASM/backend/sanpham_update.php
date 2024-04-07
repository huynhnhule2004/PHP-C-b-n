<?php
include("../model/sanpham.php");
$ma = $_GET["ma"];
$ten = $_GET["ten"];
$gia = $_GET["gia"];
$soluong = $_GET["soluong"];
$mota = $_GET["mota"];
$loai = $_GET["loai"];
$trangthai = $_GET["trangthai"];
suasp($ma, $ten, $gia, $soluong, $mota, $loai, $trangthai);
?>