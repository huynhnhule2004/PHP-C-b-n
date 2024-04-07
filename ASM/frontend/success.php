<?php require '../database.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đặt hàng thành công</title>
  <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style/index.css">
</head>

<body>
  <div class="container-fluid ">

    <div class="content container w-50 text-center">
      <div class="shadow mt-3">
        <div class="bg-success" style="height: 10px;"></div>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check-circle-fill text-success mt-5" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </svg>
        <h3 class="text-black">Đặt hàng thành công!</h3>
        <span>Mã đơn hàng: #10643</span> <br>
        <span>*****************************</span>
        <h6 class="mt-5">Thông tin giao hàng</h6>
        <span>Lê Thị Huỳnh Như</span> <br>
        <span>0364402449</span><br>
        <span>Lê Bình, Cái Răng, Cần Thơ</span>
        <h6 class="mt-5">Phương thức thanh toán</h6>
        <span>Thanh toán khi giao hàng(COD)</span> <br>
        <a href="index.php">
          <button class="mt-5 btn bg-info text-white mb-5">Tiếp tục mua hàng</button>
        </a>
      </div>


    </div>

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