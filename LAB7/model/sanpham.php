<?php 
    include "../model/connect.php";
    function getDSSP() 
    {
        $conn = getdb();
        $sql = "SELECT * FROM sanpham WHERE trangThai = 1 ORDER BY id_sp DESC";
        $results = mysqli_query($conn, $sql);
        if ($results === false)
            echo mysqli_errno($conn);
        else 
            $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
        return $articles;
    }

    function getSP($masp)
    {
        $conn = getdb();
        $sql = "SELECT * FROM sanpham WHERE id_sp='".$masp."'";
        $results = mysqli_query($conn, $sql);
        if ($results === false)
            echo mysqli_error($conn);
        else 
        // $k = mysqli_fetch_assoc($results);
        $k = mysqli_fetch_array($results);
        if (mysqli_num_rows($results) <= 0)
            echo "Không có sản phẩm nào!";
        return $k;
    }
    //Hàm sửa sản phẩm
    function suasp($ma, $ten, $gia, $soluong, $mota, $loai, $trangthai)
    {
        $conn = getdb();
        $sql = "UPDATE sanpham SET ten = '$ten', gia=$gia, soLuong=$soluong,
            moTa = '$mota',id_dm=$loai,trangThai=$trangthai WHERE id_sp=$ma";
        echo $sql;

        $results = mysqli_query($conn, $sql);
        if($results === false)
            echo mysqli_errno($conn);
        header("Locaction: " . 'sanpham_upload.php');
    }

    //Ham them san pham
    function themsp($ten,$gia,$soluong,$mota,$link,$loai,$trangthai) {
        $conn = getdb();
        if(!$ten || !$gia || !$soluong || !$mota) {
            echo "<h1>Vui lòng nhập đầy đủ thông tin sản phẩm!</h1>";
            echo "<a href=".'"sanpham.php"'.">Trở lại</a>";
            exit;
        }
        $sql = "SELECT * FROM sanpham WHERE ten='$ten'";
        $resulut = $conn->query($sql);
        //chua ton tai model cung ten
        if(mysqli_num_rows($resulut) == 0) {
            $sql = "INSERT INTO sanpham(ten,gia,soLuong,moTa,hinhAnh,id_dm,trangThai)
            VALUES ('$ten',$gia,$soluong,'$mota','$link',$loai,'$trangthai')";
            echo $sql;
            $resulut = $conn->query($sql);
            //Xóa cookie để xóa linkfilemodel cũ
            session_start();
            unset($_SESSION["file_uploaded"]);
            header("Location:" . 'sanpham_upload.php');
        } else {
            echo "<h1>Sản phẩm đã tồn tại!</h1>";
            echo "<a href" . '"sanpham.php"' . " >Trở lại</a>";
            exit;
        }
    }
?>