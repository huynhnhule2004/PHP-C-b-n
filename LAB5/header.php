<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product details</title>
    <link rel="stylesheet" href="css/header1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="main">
        <!-- start logo -->
        <div class="callout center mb-2"><img src="img/logo.webp" alt=""></div>
        <!-- end logo -->
        <!-- start menu -->
        <nav>
            <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: wheat !important;">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="#" class="nav-link active" aria-current="page">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Giới thiệu</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sản phẩm</a>
                                <ul class="dropdown-menu">
                                    <li><a href="" class="dropdown-item">T-Shirts</a></li>
                                    <li><a href="" class="dropdown-item">Shirts</a></li>
                                    <!-- <li><hr class="dropdown-divider"></li> -->
                                    <li><a href="" class="dropdown-menu">Khác</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- <form action="" class="d-flex" role="search">
                            <input type="text" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success me-2" type="submit">Search</button>
                        </form>
                        <form action="" class="d-flex" role="search">
                            <button class="btn btn-outline-success me-1" type="submit">Đăng ký</button>
                        </form>
                        <form action="" class="d-flex" role="search">
                            <button class="btn btn-outline-success me-1" type="submit">Đăng nhập</button>
                        </form> -->
                        <?php 
                        session_start();
                        if (!isset($_SESSION['email'])) {?>
                          <form action="" class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success me-2" type="submit">Search</button>
                            <a href="dangkytk.php" class="btn btn-outline-success w-100 me-2" role="button">Đăng ký tài khoản</a>
                            <a href="dangnhap.php" class="btn btn-outline-success w-100" role="button">Đăng nhập</a>

                          </form>
                       <?php } else {?>
                        <form action="" class="d-flex" role="search">
                          <input type="search" class="form-control me-2" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success me-2" type="submit">Search</button>
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <?php echo $_SESSION['email'] ?>
                            </button>
                            <ul class="dropdown-menu">
                              <li><a href="dangxuat.php" class="dropdown-item">Đăng xuất</a></li>
                            </ul>
                          </div>
                        </form>
                        <?php } ?>
                        
                    </div>
                </div>
            </nav>
        </nav>
        <!-- End menu -->

        <!-- start banner -->
        <div class="banner">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="img/slide_index_1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <!-- <h5>First slide label</h5> -->
                      <!-- <p>Some representative placeholder content for the first slide.</p> -->
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/slide_index_2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <!-- <h5>Second slide label</h5> -->
                      <!-- <p>Some representative placeholder content for the second slide.</p> -->
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/slide_index_1.jpg" class="d-block w-100" alt="...">
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
        <!-- end banner -->
    </div>
</body>
</html>