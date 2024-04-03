<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include '../model/taikhoan.php';
    $conn = getdb();
    dangkykh($conn);
    ?>


    <div class="container dangky">
        <h1>ĐĂNG KÝ TÀI KHOẢN</h1>
        <form method="POST" action="index.php?page=dangkytk" name="dangky">
            <div class="mb-3">
                <label for="hoten" class="form-lable">Họ tên</label>
                <input type="text" class="form-control" id="hoten" aria-describedby="emailHelp" autofocus name="hoten">
            </div>
            <div class="mb-3">
                <label for="diachi" class="form-lable">Địa chỉ</label>
                <input type="text" class="form-control" id="diachi" aria-describedby="emailHelp" autofocus name="diachi">
            </div>
            <div class="mb-3">
                <label for="email" class="form-lable">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" autofocus name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="" />
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label for="" class="form-check-lable" for="dropdownCheck">Remmber me</label>
                </div>
            </div>
            <div class="btn1">
                <button type="submit" class="btn btn-primary btn-lg">Đăng ký</button>
            </div>
        </form>
        <div class="dropdown-divider"></div>
        <a href="dangnhap.php" class="dropdown-item">Đã có tài khoản? Đăng nhập</a>
        <a href="#" class="dropdown-item">Quên mật khẩu</a>
    </div>


</body>

</html>