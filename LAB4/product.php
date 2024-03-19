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
                        <img src="./img/ANCIENT_ASIA_T-SHIRT_RED.webp" alt="" class="label">
                        <?php $linkdetail = "product_detail.php?msp=" . $k['id_sp']; ?>
                        <a href="<?php echo $linkdetail; ?>">
                            <img alt="" class="anhsp" src="./img/<?php echo $k['hinhAnh']; ?>.webp"></a>

                        <div class="giasp">
                            <?php echo $k['gia']; ?>
                        </div>
                        <div class="icon">
                            <img src="./img/011_BLOKECORE_T-SHIRT_WHITE-BLACK.webp" alt="">
                            <img src="./img/011_BLOKECORE_T-SHIRT_WHITE-BLACK.webp" alt="">
                            <img src="./img/019_LINE_T-SHIRT_GRAY-BLACK.webp" alt="">
                        </div>
                    </div>
                </div>
        <?php
            endforeach;
        endif;
        ?>
    </div>
</body>

</html>