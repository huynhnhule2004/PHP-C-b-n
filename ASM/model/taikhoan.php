<?php
include "../model/connect.php";

function dangkykh($conn)
{
    if (isset($_POST['email']) && isset($_POST['pass'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $pass = md5($pass); //Hash mật khẩu
        $hoten = $_POST['hoten'];
        $diachi = $_POST['diachi'];

        // Kiểm tra xem có thông báo bị bỏ trống không
        if (!$email || !$pass || !$hoten || !$diachi) {
            echo "Vui lòng nhập đầy đủ thông tin yêu cầu.
            <a href = 'javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        // Kiểm tra xem email đã tồn tại trong cơ sở dữ liệu chưa
        $sql = "SELECT * FROM khachhang WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $id = mysqli_num_rows($result);
        if ($id != 0) {
            echo "<h1>Email đã tồn tại. Vui lòng kiểm tra lại!</h1>
                <a href='javascript: history.go(-1)'><h2>Trở lại</h2></a>";
            exit;
        } else {
            // Thực hiện thêm người dùng mới vào cơ sở dữ liệu
            $sql = "INSERT INTO khachhang(ten,diaChi,email,password)
            VALUE ('$hoten','$diachi','$email','$pass')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Xử lý và kiểm tra dữ liệu đăng ký, lưu vào cơ sở dữ liệu
                    // Nếu đăng ký thành công, chuyển hướng đến trang đăng nhập
                    header("Location: index.php?page=sign-in");
                    exit;
                }
                // echo "<h1>Đăng ký thành công!</h1>";
                // Có thể thêm bất kỳ hành động nào khác sau khi đăng ký thành công ở đây
            } else {
                echo "Đã xảy ra lỗi trong quá trình đăng ký.Vui lòng thử lại sau.";
            }
        }
    }
}

function dangnhapkh($conn)
{
    if (isset($_POST['email']) && isset($_POST['pass'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $pass = md5($pass);
        //Kiểm tra xem email có được nhập không
        if (!$email || !$pass) {
            echo "Vui lòng nhập đầy đủ thông tin yêu cầu.
            <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        //Kiểm tra xem email có tồn tại trong cơ sở dữ liệu không
        $sql = "SELECT * FROM khachhang WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $id = mysqli_num_rows($result);
        if ($id == 0) {
            echo "<h1>Email này không tồn tại.Vui lòng kiểm tra lại!</h1>
            <a href='javascript: history.go(-1)'><h2>Trở lại</h2></a>";
            exit;
        }
        //Lấy thông tin khách hàng từ cơ sở dữ liệu
        $row = mysqli_fetch_array($result);
        //Kiểm tra lại mật khẩu
        if ($pass == $row["password"]) {
            //Lưu thông tin đăng nhập vào session
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['email'] = $email;
            //Chuyển hướng về trang chính sau khi đăng nhập thành công
            header("Location: index.php");
            die();
        } else {
            echo "<h1>Mật khẩu không đúng.Vui lòng nhập lại!</h1>
                <a href='javascript: history.go(-1)'><h2>Trở lại</h2></a>";
            exit;
        }
    }
}


function dangnhapnv($conn)
{
    if(isset($_POST['email']) && isset($_POST['pass'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        //$pass = md5($pass);
        //Kiểm tra xem email và mật khẩu có được nhập không
        if(!$email || !$pass) {
            echo "Vui lòng nhập đầy đủ thông tin yêu cầu.
                <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        //Kiểm tra xem email có tồn tại trong cơ sở dữ liệu không
        $sql = "SELECT * FROM admin WHERE email='$email'";
        echo $sql;
        $result = mysqli_query($conn,$sql);
        $id = mysqli_num_rows($result);

        if ($id == 0) {
            echo "<h1>Email không tồn tại. Vui lòng kiểm tra lại!</h1>
                <a href='javascript: history.go(-1)'><h2>Trở lại</h2></a>";
            exit;
        }
        //Lấy thông tin khach hàng từ cơ sở dữ liệu
        $row = mysqli_fetch_array(($result));
        //Kiểm tra mật khẩu
        if ($pass == $row["password"]) {
            //Lưu thông tin đăng nhập vào seccsion
            session_start();
            $_SESSION['email'] = $email;
            //dung kiểm tra đăng nhập thành công
            $_SESSION['loggedin'] = true;
            // Chuyển hướng về trang chính sau khi đăng nhập thành công
            header("Location:" . "../backend/index.php");
            exit;
        } else {
            echo "<h1>Mật khẩu không đúng.Vui lòng nhập lại!</h1>
                <a href='javascript: history.go(-1)'><h2>Trở lại</h2></a>";
            exit;
        }
    }
}