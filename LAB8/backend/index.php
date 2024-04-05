<?php
session_start();
// Kiểm tra xem session 'loggedin' đã được thiết lập và có giá trị là true hay không
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Nếu đã đăng nhập thành công, hiển thị nội dung của trnag chủ admin ở đây
    include "header.php";
    include "asside.php";
    if (isset($_GET['page']) && ($_GET['page'] != "")) {
        $page = $_GET['page'];
        //echo $page;
        switch ($page) {
            case 'danhmuc_upload':
                include_once("danhmuc_upload.php");
                break;

            case 'sanpham_upload':
                include_once("sanpham_upload.php");
                break;

            case 'dangnhap':
                include_once("dangnhap.php");
                break;

            case 'dangxuat':
                include_once("dangxuat.php");
                break;
            default :
            include_once("index.php");
            include ("article.php");
            break;
        }
    } else {
        include_once("index.php");
        include ("article.php");
    }
} else {
    // nếu chưa đăng nhập thành công, chuyển hướng người dùng đến trang đăng nhập
    include "dangnhap.php";
    exit();//Kết thúc quá trình chạy script
}
