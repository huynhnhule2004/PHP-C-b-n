<?php 
session_start();
session_unset();//Xóa các biến trong phiên
setcookie("email",'',time() - 3600);
//Xóa cookie với tên là "email" bằng cách đặt thời gian hết hạn trong quá khứ,
//Làm cho cookie bị hủy bỏ
header("Refresh:3;url=bai4pro.php");
//Chuyeenr hướng người dùng đến trên bai4pro.php sau 3 giây
echo "Ban đã đăng xuất!!...";