<?php 
include "../model/connect.php";

function getDSDM()
{
    $conn = getdb();
    $sql = "SELECT * FROM danhmuc ORDER BY id_dm DESC";
    $results = mysqli_query($conn, $sql);
    if ($results === false) 
        echo mysqli_error($conn);
    else 
        $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
    return $articles;
}

function getDM($madm)
{
    $conn = getdb();
    $sql = "SELECT b.*FROM danhmuc a, sanpham b
        WHERE a.id_dm=b.id_dm and a.id_dm= '".$madm."'";
    $results = mysqli_query($conn, $sql);
    if ($results === false) 
        echo mysqli_error($conn);
    else 
        // $k = mysqli_fetch_assoc($results);
        $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
    if (mysqli_num_rows($results) <= 0)
        echo "Không có sản phẩm thuộc danh mục này!";
    return $articles;

}