<?php 
    include "../model/connect.php";
    function getDSSP() 
    {
        $conn = getdb();
        $sql = "SELECT * FROM sanpham ORDER BY id_sp DESC";
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
?>