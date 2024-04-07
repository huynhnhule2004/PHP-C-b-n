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
  <title>ASM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../style/index.css">

</head>

<body>
  <div class="container-fluid ">
    <header>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="phonenumber d-flex justify-content-center icon-link ">
              <a href="tel:0373357405" class="text-decoration-none ">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                  </svg>
                </span>
                0373357405
              </a>

            </div>
          </div>
          <div class="col">
            <div class="logo d-flex justify-content-center icon-link">
              <a href="index.php"><img class="img-fluid" src="../img/logo.webp" alt=""></a>
            </div>
          </div>
          <div class="col">
            <div class="require d-flex justify-content-center icon-link">
            <?php
            session_start();
            if (!isset($_SESSION['email'])) { ?>
              <form action="" class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info me-2" type="submit">Search</button>
                <a href="index.php?page=sign-up" class="btn btn-outline-info w-100 me-2" role="button">Đăng ký tài khoản</a>
                <a href="index.php?page=sign-in" class="btn btn-outline-info w-100" role="button">Đăng nhập</a>

              </form>
            <?php } else { ?>
              <form action="" class="d-flex" role="search">
                <input type="search" class="form-control me-2" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info me-2" type="submit">Search</button>
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
        </div>
      </div>
    </header>



    



    <nav class="container">
      <ul class="nav d-flex justify-content-center ">
        <li class="nav-item"><a href="index.php" class="nav-link nav active" aria-current="page">HOME</a></li>
        <li class="nav-item list-shop">
          <a href="index.php?page=category" class="nav-link">
            SHOP
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
            </svg>
          </a>
          <ul class="dropdown-menu border-0 p-0 border-raidu">
            <li class="nav-item"><a href="index.php?page=t-shirst" class="nav-link">T-SHIRTS</a></li>
            <li class="nav-item"><a href="index.php?page=shirts" class="nav-link">SHIRTS</a></li>
            <li class="nav-item"><a href="index.php?page=sweaters" class="nav-link">SWEATERS</a></li>
            <li class="nav-item"><a href="index.php?page=hoodies" class="nav-link">HOODIES</a></li>
            <li class="nav-item"><a href="index.php?page=polo" class="nav-link">POLO</a></li>
          </ul>
        </li>
        <li class="nav-item"><a href="index.php?page=blog" class="nav-link">BLOG</a></li>
        <li class="nav-item"><a href="index.php?page=contact" class="nav-link">CONTACT</a></li>
        <li class="nav-item"><a href="index.php?page=about" class="nav-link">ABOUT</a></li>
        <li class="nav-item"><a href="https://www.facebook.com/groups/vergency/" class="nav-link">VERGENCY GROUP</a></li>
        <li class="nav-item"><a href="https://www.tiktok.com/@vergency.vn" class="nav-link">VERGENCY TIKTOK</a></li>
      </ul>
    </nav>

    <div class="banner">
      <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="../img/slide_index_1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h5>First slide label</h5> -->
              <!-- <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="../img/slide_index_2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h5>Second slide label</h5> -->
              <!-- <p>Some representative placeholder content for the second slide.</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/slide_index_1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h5>Third slide label</h5> -->
              <!-- <p>Some representative placeholder content for the third slide.</p> -->
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
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