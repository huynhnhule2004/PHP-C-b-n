

<?php
// header.php
ob_start(); // Bắt đầu output buffering
// Code của bạn ở đây
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product details</title>
  <link rel="stylesheet" href="css/header1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <div class="main">
    <!-- start menu -->
    <nav>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 " style="width:300px">
              <li class="nav-item w">
                <a href="index.php" class="nav-link active" aria-current="page">GÓC MUA SẮM</a>
              </li>
              <li class="nav-item">
              <button class="btn btn-link " id="sidebarToggle">
                        <span class="navbar-toggler-icon"></span>
                </button>
              </li>

            </ul>
            <?php
            session_start();
            if (!isset($_SESSION['email'])) { ?>
              <form action="" class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success me-2" type="submit">Search</button>
                <a href="index.php?page=dangnhap" class="btn btn-outline-success w-100" role="button">Đăng nhập</a>
              </form>
            <?php } else { ?>
              <form action="" class="d-flex" role="search">
                <input type="search" class="form-control me-2" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success me-2" type="submit">Search</button>
              </form>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $_SESSION['email'] ?>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="dangxuat.php" class="dropdown-item">Đăng xuất</a></li>
                </ul>
              </div>
                  <?php } ?> 
                  
          </div>
        </div>
      </nav>
    </nav>
    <!-- End menu -->


  </div>
</body>

</html>