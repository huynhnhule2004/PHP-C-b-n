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
<header>
<nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid row justify-content-between">
            <div class="col-3">
                <a class="navbar-brand">GÓC MUA SẮM</a>
                <button class="navbar-toggler ms-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="col-4"></div>
            <div class="col-3">
                <form class="d-flex ms-5" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="col-1">

            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <?php
                // session_start();
                if(!isset($_SESSION['email'])) { ?>
                    <form class="d-flex" role="search">
                        <a href="index.php?page=dangnhap" class="btn btn-outline-success w-100" role="button">Đăng nhập</a>
                    </form>
                    <?php } else { ?>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button">
                                <?php echo $_SESSION['email'] ?>
                            </button>
                            <button class="btn btn-secondary dropdown-toggle" type="button" aria-expanded="false">
                                <a href="index.php?page=dangxuat" style="text-decoration: none;" role="button">Đăng xuất</a>
                            </button>
                        </div>
                    <?php } ?>
                
                
            </li>
        </ul>



            </div>
        </div>
    </nav>
</header>

    
</body>

</html>