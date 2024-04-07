<?php 
include "../model/connect.php";

function getDSDM()
{
    $conn = getdb();
    $sql = "SELECT * FROM danhmuc where trangThai=1 ORDER BY id_dm DESC";
    $results = mysqli_query($conn, $sql);
    if ($results === false) 
        echo mysqli_error($conn);
    else 
        $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
    if (empty($articles))
        echo "Không có danh mục nào!";
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

function getDM1($ma)
{
    $conn = getdb();
    $sql = "SELECT * FROM danhmuc WHERE id_dm='".$ma."'";
    $results = mysqli_query($conn, $sql);
    if ($results === false)
        echo mysqli_error($conn);
    else 
    // $k = mysqli_fetch_assoc($results);
        $k = mysqli_fetch_array($results);
    if (mysqli_num_rows($results) <= 0)
        echo "Không có danh mục nào!";
    return $k;
}

    //Hàm sửa danh muc sản phẩm
    function suadm($ma, $ten, $trangthai)
    {
        $conn = getdb();
        $sql = "UPDATE danhmuc SET ten = '$ten', trangThai=$trangthai WHERE id_dm=$ma";
        echo $sql;

        $results = mysqli_query($conn, $sql);
        if($results === false)
            echo mysqli_error($conn);
        header("Location: " . 'index.php?page=danhmuc_upload');
    }

    //Ham them danh muc san pham
    function themdm($ten,$link,$trangthai) 
    {
        $conn = getdb();
        if(!$ten || !$trangthai) {
            echo "<h1>Vui lòng nhập đầy đủ thông tin sản phẩm!</h1>";
            echo "<a href=".'"danhmuc.php"'.">Trở lại</a>";
            exit;
        }
        $sql = "SELECT * FROM danhmuc WHERE ten='$ten'";
        $result = $conn->query($sql);
        //chua ton tai model cung ten
        if(mysqli_num_rows($result) == 0) {
            $sql = "INSERT INTO danhmuc(ten,hinhAnh,trangThai)
            VALUES ('$ten','$link',$trangthai)";
            echo $sql;
            $result = $conn->query($sql);
            //Xóa cookie để xóa linkfilemodel cũ
            session_start();
            unset($_SESSION["file_uploaded"]);
            header("Location:" . 'index.php?page=danhmuc_upload');
        } else {
            echo "<h1>Sản phẩm đã tồn tại!</h1>";
            echo "<a href" . '"danhmuc.php"' . " >Trở lại</a>";
            exit;
        }
    }