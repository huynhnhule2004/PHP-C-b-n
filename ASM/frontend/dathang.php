<?php require '../database.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin đặt hàng</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h1 class="pt-4">Vergency</h1>
        <table class="table">
            <tr>
                <td class="w-50">
                    <h3>Thông tin giao hàng</h3>
                    <form action="" class="form">
                        <label for="" class="form-label">Họ và tên</label>
                        <input type="text" class="form-control">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control">
                        <label for="" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" name="sdt">
                        <label for="" class="form-label">Địa chỉ giao hàng</label>
                        <input type="text" class="form-control">
                        <label for="" class="form-label">Phương thức thanh toán</label> <br>
                        <select name="" id="" class="form-select-sm">
                            <option value="">Thanh toán khi giao hàng(COD)</option>
                            <option value="">Ví điện tử</option>
                            <option value="">Thẻ tín dụng hoặc thẻ ghi nợ</option>
                        </select> <br>
                        <a href="success.php">
                            <input type="button" class="btn bg-info text-white mt-4" value="Hoàn tất đơn hàng">
                        </a>
                    </form>
                </td>
                <td class="w-50 bg-light">
                    <div class="container">
                        <table>
                            <tr>
                                <td class="w-25">
                                    <img src="../img/011_BLOKECORE_T-SHIRT_WHITE-BLACK.webp" alt="" class="w-75">
                                </td>
                                <td class="w-50">
                                    <span>ZODIAC T-SHIRT/DARK BROW</span><br>
                                    <span>L</span>
                                </td>
                                <td class="w-25">
                                    <span class="ps-5">₫98,000</span>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <div class="div">
                            <span class="float-start">Tổng cộng</span>
                            <span class="float-end fw-bold fs-4">₫133,000</span>
                        </div>
                    </div>

                </td>
            </tr>
        </table>
    </div>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/js/bootstrap.min.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>