<?php require '../database.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/index.css">
</head>

<body>
    <!-- <div class="container-fluid "> -->




        <div class="content container w-75 mt-3">
            <div class="row">
                <div class="col products shadow-none">
                    <h4 class="mb-3">Giỏ hàng</h4>
                    <table class="mb-3">
                        <tr>
                            <td>
                                <a href=""><img src="../img/TYPO_T-SHIRT_RED.webp" alt=""></a>

                            </td>
                            <td class="w-50">
                                <a href="" class="fw-bold d-block">TYPO T-SHIRT/RED</a>
                                <a href="" class="d-block">L</a>
                                <span class="m-3">₫49,000 <span class="text-decoration-line-through">(₫420,000)</span></span>
                                <div class="input-group  w-50 ms-3">
                                    <div class="input-group-prepend">
                                        <button class=" border-secondary " type="button">-</button>
                                    </div>
                                    <input type="text" class="text-center w-25 border-secondary" value="1">
                                    <div class="input-group-append">
                                        <button class="border-secondary" type="button">+</button>
                                    </div>
                                </div>
                            </td>
                            <td class="w-50">
                                <span class="drop ">Xóa sản phẩm</span>
                                <span class="price-detail">₫49,000</span>
                            </td>
                        </tr>
                    </table>
                    <hr>
                </div>
                <div class="col-3">
                    <h6>Đơn hàng</h6>
                    <div class="total border">
                        <form action="" class="p-4">
                            <label for="" class="float-start fw-bold">Tổng tiền</label>
                            <label for="" class="float-end">₫49000</label> <br>
                            <a href="index.php?page=dathang">
                                <input type="button" value="THANH TOÁN" class="mt-2">
                            </a>
                        </form>
                    </div>
                </div>
            </div>

        </div>



    <!-- </div> -->


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