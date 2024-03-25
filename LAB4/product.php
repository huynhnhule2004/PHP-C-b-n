<?php
require './database.php';
$sql = "SELECT * FROM sanpham";
$result = mysqli_query($conn, $sql);
if ($result === false)
    echo mysqli_error($conn);
else
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/product.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <?php include "header.php"; ?>
    <div class="dssp">
        <?php
        if (empty($articles)) :
            echo "Không có sản phẩm nào!";
        else :
            foreach ($articles as $k) :
        ?>
                <div class="col25">
                    <div class="pro">
                        <div class="tensp">
                            <?php echo $k['ten']; ?>
                        </div>
                        <img src="./img/newicon.jpg" alt="" class="label label">
                        <?php $linkdetail = "product_detail.php?msp=" . $k['id_sp']; ?>
                        <a href="<?php echo $linkdetail; ?>">
                            <img alt="" class="anhsp" src="./img/<?php echo $k['hinhAnh']; ?>.webp"></a>

                        <div class="giasp">
                            <?php echo $k['gia']; ?>
                        </div>
                        <div class="icon">
                            <img src="./img/tim.png" alt="">
                            <img src="./img/thu.png" alt="">
                            <img src="./img/giohang.png" alt="">
                        </div>
                    </div>
                </div>
        <?php
            endforeach;
        endif;
        ?>
    </div>
    <?php include "footer.php"; ?>
</body>
    


</html>