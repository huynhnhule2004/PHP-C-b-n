<?php
include '../model/danhmuc.php';
$articles = getDSDM();
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
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>DANH MỤC SẢN PHẨM</p>
        </blockquote>
    </figure>
    <div class="dssp">
        <?php foreach ($articles as $k) : ?>
            <div class="col25">
                <div class="pro">
                    <div class="tensp"><?php echo $k['ten']; ?></div>
                    <img class="label" src="../img/newicon.jpg" alt="">
                    <?php $linkdetail = "category_list.php?maloai=" . $k['id_dm']; ?>
                    <a href="<?php echo $linkdetail; ?>">
                        <img class="anhsp" src="../img/<?php echo $k['hinhAnh']; ?>.webp" alt=""></a>

                </div>
            </div>
    </div>
<?php endforeach; ?>
</body>

</html>