<?php require '../database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../backend/css/sanpham.css">
</head>
<body>
    <div>
        <table border="1">
            <caption>DANH SÁCH SẢN PHẨM</caption>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Mô tả</th>
                <th>Hình ảnh</th>
                <th>Ngày thêm</th>
                <!-- <img src="../img/SIMPLE_HOODIE_BLACK.webp" alt=""> -->
            </tr>
            <?php
            $sql = "select * from sanpham";
            $result = mysqli_query($conn, $sql);
            if ($result === false) 
                echo mysqli_error($conn);
            else 
                $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
            if (empty($articles)) :
                echo "Không có sản phẩm nào";
            else :
                foreach ($articles as $k) :
                    echo "<tr>";
                    echo "<td>".$k['id_sp']."</td>";
                    echo "<td>".$k['ten']."</td>";
                    echo "<td>".$k['gia']."</td>";
                    echo "<td>".$k['soLuong']."</td>";
                    echo "<td>".$k['moTa']."</td>";
                    echo "<td><img src='../img/".$k['hinhAnh'].".webp'></td>";
                    echo "<td>".$k['creat_at']."</td>";
                    echo "</tr>";
                endforeach;
            endif;   ?>
        </table>
    </div>
</body>
</html>