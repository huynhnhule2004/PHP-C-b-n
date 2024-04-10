<?php require '../database.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách SP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../style/index.css">

</head>

<body>
    <div class="container-fluid col-10 mt-5">



        <div class="content container">
            <div>
                <table border="1" class="table text-center container table-striped">
                    <caption class="caption-top text-center fw-bold fs-1 text-danger">DANH SÁCH SẢN PHẨM</caption>
                    <tr class="bg-warning">
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Mô tả</th>
                        <th>Hình ảnh</th>
                        <th>Ngày thêm</th>
                        <th>Trạng thái</th>
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
                            echo "<td class='align-self-center'>" . $k['id_sp'] . "</td>";
                            echo "<td>" . $k['ten'] . "</td>";
                            echo "<td>" . $k['gia'] . "</td>";
                            echo "<td>" . $k['soLuong'] . "</td>";
                            echo "<td>" . $k['moTa'] . "</td>";
                            echo "<td><img class='img-thumbnail' width='200px' src='../img/" . $k['hinhAnh'] . "'></td>";
                            echo "<td>" . $k['creat_at'] . "</td>";
                            echo "<td>" . $k['trangThai'] . "</td>";

                            echo "</tr>";
                        endforeach;
                    endif;   ?>
                </table>
            </div>

        </div>


    </div>
    <?php include "footer.php"; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Kích hoạt chế độ tự động chuyển đổi sau mỗi 2 giây
            $('#myCarousel').carousel({
                interval: 2000 // Thời gian chờ giữa các chuyển đổi (2 giây)
            });
        });

        function an() {
            document.getElementById("icon").style.display = "none";
            document.getElementById("input").style.display = "block";
        }
    </script>
</body>

</html>