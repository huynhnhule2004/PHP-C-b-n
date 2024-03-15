<?php require '../database.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOODIES</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
              <div class="search d-inline " onclick="an()">
                <a href="#" class="text-decoration-none" id="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                  </svg>
                </a>
                <form action="">
                  <input type="text" placeholder="Tìm kiếm..." class="form-control" id="input">
                </form>
              </div>
              <div class="users d-inline">
                <a href="sign-in.html" class="text-decoration-none">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                  </svg>
                </a>

              </div>
              <div class="cart d-inline">
                <a href="" class="text-decoration-none">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                  </svg>
                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </header>



    <nav class="container">
      <ul class="nav d-flex justify-content-center ">
        <li class="nav-item"><a href="index.php" class="nav-link">HOME</a></li>
        <li class="nav-item list-shop">
          <a href="shop.php" class="nav-link">
            SHOP
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
            </svg>
          </a>
          <ul class="dropdown-menu border-0 p-0 border-raidu">
            <li class="nav-item"><a href="t-shirst.php" class="nav-link">T-SHIRTS</a></li>
            <li class="nav-item"><a href="shirts.php" class="nav-link">SHIRTS</a></li>
            <li class="nav-item"><a href="sweaters.php" class="nav-link">SWEATERS</a></li>
            <li class="nav-item"><a href="hoodies.php" class="nav-link">HOODIES</a></li>
            <li class="nav-item"><a href="polo.php" class="nav-link">POLO</a></li>
          </ul>
        </li>
        <li class="nav-item"><a href="blog.html" class="nav-link">BLOG</a></li>
        <li class="nav-item"><a href="contact.html" class="nav-link">CONTACT</a></li>
        <li class="nav-item"><a href="about.html" class="nav-link">ABOUT</a></li>
        <li class="nav-item"><a href="https://www.facebook.com/groups/vergency/" class="nav-link">VERGENCY GROUP</a></li>
        <li class="nav-item"><a href="https://www.tiktok.com/@vergency.vn" class="nav-link">VERGENCY TIKTOK</a></li>
      </ul>
    </nav>

    <div class="banner">
      <img src="../img/collection_image.jpg" alt="" class="img-fluid">
    </div>

    <div class="content container">
      <h3 class="text-center mt-4 ">HOODIES</h3>
      <?php
      $sql = "select * from sanpham where id_dm = 4";
      $result = mysqli_query($conn, $sql);
      if ($result === false)
        echo mysqli_error($conn);
      else
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
      if (empty($articles)) :
        echo "Không có sản phẩm nào";
      else :
        $count = 0;
        foreach ($articles as $k) :
          if ($count % 4 == 0) echo '<div class="row">';
          echo '
                    <div class="col p-0 m-4 ">
                    <img src="../img/../img/' . $k['hinhAnh'] . '.webp" class="img-fluid w-100" alt="Product Image">
                    <div class="sale">-' . $k['giamGia'] . '%</div>
                    <h4 class="mt-4 ps-3">' . $k['ten'] . '</h4>
                    <p class="ps-3">VERGENCY</p>
                    <span class="ps-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                          </svg>
                    </span>
                    <hr>
                    <div class="price pb-5">
                            <span class="float-start ps-3">₫' . $k['gia'] . '</span>
                            <span class="float-end text-decoration-line-through pe-3">₫' . $k['giaGoc'] . '</span>
                        
                    </div>
                </div>';
          if ($count % 4 == 3) echo '</div>';
          $count++;
        endforeach;
        if ($count % 4 != 0) echo '</div>';
      endif;   ?>

    </div>


    <footer>
      <div class="footer-center">
        <div class="container">
          <div class="row">
            <div class="col pt-3 pb-3">
              <h5 class="pt-3">THÔNG TIN LIÊN HỆ</h5>
              <p>Phone: <a href="tel:0373357405" class="text-decoration-none text-secondary">037 335 7405</a></p>
              <p>Email: vergency.contact@gmail.com</p>
            </div>

            <div class="col pt-3 pb-3">
              <h5 class="pt-3">CHÍNH SÁCH HỖ TRỢ</h5>
              <p>Tìm kiếm</p>
              <p>Giới thiệu</p>
              <p>Chính sách đổi trả</p>
              <p>Chính sách bảo mật</p>
              <p>Điều khoản dịch vụ</p>
            </div>

            <div class="col pt-3 pb-3">
              <h5 class="pt-3">THÔNG TIN LIÊn KẾT</h5>
              <p>Hãy kết nối với chúng tôi.</p>
              <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram " viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                </svg>
              </p>
            </div>

            <div class="col pt-3 pb-3">
              <h5 class="pt-3">THEO DÕI FANPAGE CHÚNG TÔI ĐỂ CẬP NHẬT XU HƯỚNG THỜI TRANG HOT NHẤT</h5>
              <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FVergency.vn%3Fmibextid%3DZbWKwL&tabs=tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <p class="text-center m-0">&copy;Bản quyền thuộc về VERGENCY</p>
    </footer>
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