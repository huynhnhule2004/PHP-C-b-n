<?php
include "header.php";
if (isset($_GET['page']) && ($_GET['page'] != "")) {
    $page = $_GET['page'];

    switch ($page) {
        case 'category':
            include_once("category.php");
            break;
        case 'product':
            include_once("product.php");
            break;
        case 'dangnhap':
            include_once("dangnhap.php");
            break;
        case 'dangkytk':
            include_once("dangkytk.php");
            break;
        default:
            include_once("index.php");
            break;
    }
} else
    include_once("product.php");

include "footer.php";
