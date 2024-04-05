<?php
include '../model/danhmuc.php';
if (!isset($_GET['maloai'])) {//chưa hiểu
    echo "không";
    // header("Location: category.php"); //Chuyển hướng tới trang category.php
    exit(); //không có mã php nào được thực thi sau lệnh chuyển hướng
};
$maloai = $_GET['maloai'];
$articles = getDM($maloai);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/product.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "header.php";?>
    <div class="dssp">
        <?php 
        // if (emty($articles)) :
        //     echo "không có sản phẩm nào!";
        // else :
            foreach ($articles as $k) :
        ?>
        <div class="col25">
            <div class="pro">
                <div class="tensp"><?php echo $k['ten']; ?></div>
                <img class="label" src="../img/newicon.jpg" alt="">
                <?php $linkdetail = "product_detail.php?msp=" . $k['id_sp']; ?>
                <a href="<?php echo $linkdetail; ?>">
                    <img class="anhsp" src="../img/<?php echo $k['hinhAnh'];?>.webp" alt="">
                </a>
                <div class="giasp"><?php echo $k['gia']?></div>
                <div class="icon">
                    <img src="../img/tim.png" alt="">
                    <img src="../img/thu.png" alt="">
                    <img src="../img/giohang.png" alt="">

                </div>
            </div>
        </div>
        <?php
            endforeach;
            // endif;
        ?>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
