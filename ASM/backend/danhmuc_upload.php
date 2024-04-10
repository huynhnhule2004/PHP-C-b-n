<?php
ob_start(); //giải quyết lỗi header không chuyển trang:
// include("index1.php");
include("../model/danhmuc.php");
$articles = getDSDM();
//Kiểm tra phương thức gửi form đi có phải là post hay ko?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Kiểm tra quá trình upload file có bị lỗi gì không?
    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png", "webp" => "image/webp");
        //Lấy thông tin file bao gồm tên file, loại file, kích cỡ file
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
        //Kiểm tra định dạng file .jpg,png,...
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        //Nếu không đúng định dạng file thì báo lỗi
        if (!array_key_exists($ext, $allowed)) die("Lỗi: Vui lòng chọn đúng định dạng file.");
        // Cho phép kích thước tối đa của file là 5MB
        $maxsize = 500 * 1024 * 1024;
        //Nếu kích thướt lớn hơn 5MB thì báo lỗi
        if ($filesize > $maxsize) die("Lỗi: Kích thước file lớn hơn giới hạn cho phép");
        if (in_array($filetype, $allowed)) {
            //Kiểm tra xem file tồn tại chưa, nếu rồi thì báo lỗi, không thì upload
            if (file_exists($_FILES["photo"]["name"])) {
                echo $_FILES["photo"]["name"] . "đã tồn tại";
            } else {
                $temp = explode(".", $_FILES["photo"]["name"]);
                $newfilename = date("Ymd_His") . '.' . end($temp);
                $upload_directory = "../img/";
                move_uploaded_file(
                    $_FILES["photo"]["tmp_name"],
                    $upload_directory . $newfilename
                );
                //luu sesion de lay file
                $file_uploaded_file = $newfilename;
                session_start();
                $_SESSION["file_uploaded"] = $file_uploaded_file;
                //echo "session <br>:;
                header("Location:" . 'danhmuc.php');
            }
        } else {
            echo "Lỗi 1: có vấn đề xảy ra khi upload file: filestyle or allowed";
        }
    } else {
        echo "Lỗi: " . $_FILES["photo"]["error"];
    }
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    #datatablesSimple th:nth-child(1) {
        width: 200px;
    }

    /* sanpham_upload.php' */
    #datatablesSimple th:nth-child(2) {
        width: 50px;
    }

    #datatablesSimple th:nth-child(7) {
        width: 200px;
    }
</style>
</head>

<body>
    <!-- main content start -->
    <!-- <div id="layoutSidenav_content"> -->
    <main class="col-10 p-0">
        <div class="container-fluid px-4  p-0">
            <h1 class="mt-4">DANH SÁCH DANH MỤC SẢN PHẨM</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">
                    <a href="sanpham_upload.php" style="text-decoration:none">Upload Danh Mục Sản phẩm</a>
                </li>
            </ol>
            <div class="card mb4">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="w-50">
                            <input class="form-control mb-2 mt-2" type="file" name="photo" id="photo">
                            <button name='luu' type="submit" class="btn btn-outline-primary mb-2">
                                <i class="fas fa-cloud-upload-alt"></i> Upload file hinh
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Danh sách danh mục sản phẩm
                </div>
                <!-- tạo thanh ngang kéo kéo khi bảng nhiều cột vượt độ rộng màn hình -->
                <div class="card-body" style="overflow-x:auto">
                    <form action="your_processing_file.php" method="GET">
                        <table id="datatablesSimple" class="table table-hover" style="overflow-x:auto">
                            <thead>
                                <tr>
                                    <th scope="col">EDIT</th>
                                    <th>STT</th>
                                    <th>TÊN DANH MỤC</th>
                                    <th>ẢNH</th>
                                    <th>TRẠNG THÁI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><?php
                                    $i = 1;
                                    foreach ($articles as $row) {
                                    ?>
                                        <td align="right">
                                            <input type="radio" name="touch" id="sua" value=<?php echo $row["id_dm"] ?>>
                                            <button name="sua" type="submit" class="btn btn-outline-warning" formaction="danhmuc_sua.php">
                                                <i class="fas fa-user-edit" style="color: green;"></i> Sửa
                                            </button>
                                            <button id="deleteBtn" name="xoa" type="submit" class="btn btn-outline-danger" formaction="danhmuc_xoa.php">
                                                <i class="fas fa-user-times" style="color: green;"></i> Xóa
                                            </button>
                                        </td>
                                        <td><?php echo $i;
                                            $i++; ?></td>
                                        <td><?php echo $row["ten"] ?></td>
                                        <td><?php echo '<img style="width:70%;height:100px;display:block;margin:0 auto;" src="../img/' . $row["hinhAnh"] . '" alt="">' ?></td>
                                        <td><?php echo $row["trangThai"] ?></td>



                                </tr>
                            <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">EDIT</th>
                                    <th>STT</th>
                                    <th>TÊN DANH MỤC</th>
                                    <th>ẢNH</th>
                                    <th>TRẠNG THÁI</th>

                                </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include "footer.php"; ?>
    <!-- </div> -->
    </div>
    <script>
        document.getElementById("deleteBtn").addEventListener("click", function() {
            // Hiển thị hộp thoại xác nhận
            var confirmation = confirm("Bạn có chắc muốn xóa?");

            // Nếu người dùng xác nhận, chuyển hướng đến trang xác nhận xóa
            if (confirmation) {
                window.location.href = "danhmuc_xoa.php";
            } else {
                document.getElementById("sua").checked = false;
            }
        });
    </script>
</body>

</html>