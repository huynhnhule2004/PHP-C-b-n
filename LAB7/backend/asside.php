<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<div class="container-fluid">
  <div class="row">
  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar text-white" >
      <div class="position-sticky">
      <ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link text-white" href="dashboard.php">
      <i class="fas fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="page.php">
      <i class="fas fa-file-alt"></i>
      <span>Page</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">
      <!-- <i class="fas fa-sitemap"></i> -->
      <span>Quản lý Danh mục</span>
    </a>
    <ul class="nav flex-column sub-menu">
      <li class="nav-item ">
        <a class="nav-link text-white" href="danh-muc-san-pham.php">
          <span>Danh mục sản phẩm</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="san-pham.php">
          <span>Sản phẩm</span>
        </a>
      </li>
    </ul>
  </li>
</ul>
      </div>
    </nav>



  </div>
</div>

</body>

</html>