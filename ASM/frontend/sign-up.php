<?php require '../database.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng ký</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../style/index.css">
</head>

<body>

  <?php
  include '../model/taikhoan.php';
  $conn = getdb();
  dangkykh($conn);
  ?>
  <!-- <div class="container-fluid "> -->




  <div class="content container w-25 mt-3">
    <div class="user">
      <form class="p-3" method="POST" action="index.php?page=sign-up" name="sign-up">
        <label for="hoten" class="form-lable">Họ tên</label>
        <input type="text" class="form-control" id="hoten" aria-describedby="emailHelp" autofocus name="hoten">
        <label for="diachi" class="form-lable">Địa chỉ</label>
        <input type="text" class="form-control" id="diachi" aria-describedby="emailHelp" autofocus name="diachi">
        <label for="email" class="form-lable">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" autofocus name="email">
        <label for="pass" class="form-label">Password</label>
        <input type="password" class="form-control" name="pass" id="pass" placeholder="" />
        <input type="submit" class="btn form-control" value="Đăng ký">
        <p><a href="index.php?page=sign-in">Quay về</a></p>
      </form>

    </div>


    <!-- </div> -->



  </div>


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