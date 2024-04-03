<?php
require '../model/sanpham.php';
if (!isset($_GET['msp'])) {
    header('Location: product.php'); //Chuyển hướng đến trang product.php
    exit(); //không có mã PHP nào được thực thi sau lệnh chuyển hướng
};
$msp = $_GET['msp'];
$k = getSP($msp); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product detail</title>
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <?php include "header.php"; ?>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="product.php">Danh sách sản phẩm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm</li>
        </ol>
    </nav>
    <div class="product">
        <div class="row m-0 ">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card w-75" style="margin: left 30px; margin-right: 20px;">
                    <img class="img-thumbnail" style="width:100%" ; src="../img/<?php echo $k['hinhAnh']; ?>.webp" alt="">
                </div>
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card w75" style="margin-right: 30px;">
                    <div class="card-body" style="margin: 30px 30px;">
                        <h5 class="card-title"><?php echo "Tên sản phẩm:" . $k['ten']; ?></h5>
                        <p class="card-text"><?php echo "Đơn giá:" . $k['gia']; ?></p>
                        <p class="card-text"><?php echo "Số lượng hiện có:" . $k['soLuong']; ?></p>
                        <button type="button" class="btn btn-outline-danger">Thêm giỏ hàng</button>
                        <button type="button" class="btn btn-outline-warning">Mua ngay</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="card w-90 mb-3" style="margin: 30px 30px">
            <div class="card-body">
                <h5 class="card-title">Mô tả</h5>
                <p class="card-text"><?php echo $k['moTa']; ?></p>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
</body>

</html>