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
    <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
        <div class="bg-dark p-4">
            <h5 class="text-body-emphasis h4">Collapsed content</h5>
            <span class="text-body-secondary">Toggleable via the navbar brand.</span>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid row justify-content-between">
            <div class="col-3">
                <a class="navbar-brand">GÓC ĂN VẶT</a>
                <button class="navbar-toggler ms-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="col-5"></div>
            <div class="col-3">
                <form class="d-flex ms-5" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="col-1">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="views/login.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="views/login.html">
                                <i class="fas fa-sign-in-alt"></i>
                                Đăng nhập</a></li>
                        <li><a class="dropdown-item" href="views/register.html">
                                <i class="fas fa-user-plus"></i>
                                Đăng ký</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="views/forgotpass.html">
                                <i class="fas fa-lock-open"></i>
                                Quên mật khẩu</a></li>
                    </ul>
                </div>
                <!-- <div class="dropdown">

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="views/login.html">
                                <i class="fas fa-sign-in-alt"></i>
                                Đăng nhập</a></li>
                        <li><a class="dropdown-item" href="views/register.html">
                                <i class="fas fa-user-plus"></i>
                                Đăng ký</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="views/forgotpass.html">
                                <i class="fas fa-lock-open"></i>
                                Quên mật khẩu</a></li>
                    </ul>
                </div> -->




            </div>
        </div>
    </nav>
</body>

</html>