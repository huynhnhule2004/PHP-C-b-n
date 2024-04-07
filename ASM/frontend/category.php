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
    <link rel="stylesheet" href="../style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
<div class="content container">
      <h3 class="text-center mt-4 ">DANH MỤC SẢN PHẨM</h3>
      <div class="row justify-content-center">
      <?php foreach ($articles as $k) : ?>

            <div class="col-md-3 col p-0 m-4 ">
            <?php $linkdetail = "category_list.php?maloai=" . $k['id_dm']; ?>
              <a href="<?php echo $linkdetail; ?>">
                <img alt="" class="img-fluid w-100" src="../img/<?php echo $k['hinhAnh']; ?>"></a>
              <h4 class="mt-4 ps-3 text-center"><?php echo $k['ten'] ?></h4>
              <p class="ps-3 text-center">VERGENCY</p>

            </div>
        <?php
          endforeach;
        ?>
      </div>
    </div>
</body>

</html>