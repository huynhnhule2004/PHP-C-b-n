<?php
require './database.php';
if (!isset($_GET['msp'])) {
    header('Location: bai4pro.php'); //Chuyen huong den trang newpage.php
    exit(); // Dam bao rang khong co ma php nao duoc thuc thi sau lenh chuyen huong
};
$value = $_GET['msp'];
// echo $value;
$sql = "SELECT * FROM sanpham WHERE id_sp='" . $value . "'";
//echo $sql;
$results = mysqli_query($conn, $sql);
if ($results === false)
    echo mysqli_error($conn);
else
    // $k = mysqli_fetch_assoc($results);
    $k = mysqli_fetch_array($results);
if (mysqli_num_rows($results) <= 0) :
    echo "Khong co san pham nao!";
else :
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../ASM/style/index.css">
        <link rel="stylesheet" href="./css/product.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include "header.php" ?>
        <div class="content container w-75 mt-5">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="ms-3 mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="bai4pro.php">Danh sách sản phẩm</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col shadow-none">
                        <img class="img-fluid" src="./img/<?php echo $k['hinhAnh']; ?>.webp" alt="">
                    </div>
                    <div class="col shadow-none">
                        <h2><?php echo $k['ten'] ?></h2>
                        <p class="m-0 text-black">SKU: ZOD-10-2</p>
                        <span class="m-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                        </span>
                        <div class="price">
                            <span class=" text-lg">₫<?php echo $k['gia'] ?></span>
                            <span class="ms-2 text-decoration-line-through">₫<?php echo $k['giaGoc'] ?></span>
                        </div>
                        <form action="">
                            <h6 class="mt-3">Kích thướt</h6>
                            <div class="size" role="group" aria-label="Kích thước sản phẩm">

                                <!-- Nút cho kích thước M -->
                                <button type="button" class="btn ">M</button>

                                <!-- Nút cho kích thước L -->
                                <button type="button" class="btn">L</button>

                                <!-- Nút cho kích thước XL -->
                                <button type="button" class="btn">XL</button>
                            </div>

                            <div class="input-group mb-3 mt-3 w-50">
                                <label for="btn" class="me-3 mt-2">
                                    <h6>Số lượng</h6>
                                </label>
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary forcus-none" type="button">-</button>
                                </div>
                                <input type="text" class="form-control text-center" value="1">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">+</button>
                                </div>
                            </div>

                            <div class="buy">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                                    </svg>
                                    THÊM VÀO GIỎ
                                </button>
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                                    </svg>
                                    MUA NGAY
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col shadow-none ">
                        
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col hover-none">
                        <div class="description">
                            <h5 class="mt-3">MÔ TẢ SẢN PHẨM</h5>
                            <p>Thông tin sản phẩm:</p>
                            <p><?php echo $k['ten'] ?></p>
                            <p>HOẠ TIẾT: IN LỤA U.S.A INK</p>
                            <p> COLOR: BLACK / WHITE / DARK GREEN / DARK BROW / DARK GREY / RED</p>
                            <p>SIZE: M / L / XL</p>
                            <p><?php echo $k['moTa'] ?></p>
                            <img src="https://file.hstatic.net/200000305259/file/vgc-tee_size_chart_2022-01_e52095dcda6342a1b18dc216b796fe01_master.jpg" alt="" class="img-fluid">
                        </div>
                    </div>

                </div>

            </div>

    <?php
endif;
include "footer.php"; 
    ?>
    </body>

    </html>