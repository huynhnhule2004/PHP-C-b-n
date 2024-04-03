<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    require "./database.php";
    if (isset($_POST['email']) && isset($_POST['pass'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $pass = md5($pass);

        if (!$email || !$pass) {
            echo "Vui lòng nhập đầy đủ thông tin yêu cầu.
            <a href = 'javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        //Kiểm tra mail có tồn tại không
        $sql = "SELECT * FROM khachhang WHERE email='" . $email . "'";
        $result = mysqli_query($conn, $sql);
        $id = mysqli_num_rows($result);
        if ($id == 0) {
            exit;
        }
        $row = mysqli_fetch_array($result);
        // check password
        if ($pass == $row["password"]) {
            //Lưu tên đăng nhập
            session_start();
            $_SESSION['email'] = $email;
            echo $_SESSION['email'];
            header("Location: bai4pro.php");
            die();
        } else {
            echo "<h1>Mật khẩu không đúng. Vui lòng nhập lại!</h1>
            <a href='javascript: history.go(-1)'><h2>Trở lại</h2></a>";
            exit;
        }
    }
    include("header.php");
    ?>


    <div class="container dangky">
        <h1>ĐĂNG NHẬP</h1>
        <form method="POST" action="dangnhap.php" name="dangnhap">

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
                <button type="submit" class="btn btn-primary btn-lg">Đăng nhập</button>
            </div>
        </form>
        <div class="dropdown-divider"></div>
        <a href="dangnhap.php" class="dropdown-item">Chưa có tài khoản? Đăng ký</a>
        <a href="#" class="dropdown-item">Quên mật khẩu?</a>
    </div>

    </div>

    <?php include("footer.php") ?>
</body>

</html>