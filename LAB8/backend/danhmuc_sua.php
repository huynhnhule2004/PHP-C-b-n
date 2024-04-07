<?php
ob_start(); //giaỉ quyết lổi header không chuyển trang
include('index1.php');
include("../model/danhmuc.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $ma = $_GET["touch"];
    $k = getDM1($ma);
}
?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- main content start -->
<!-- <div id="layoutSidenav_content"> -->
    <main class="col-10 p-0">
        <div class="container-fluid px-4">
            <h1 class="mt-4">DANH SÁCH DANH MỤC</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">
                    <a href="danhmuc_upload.php" style="text-decoration:none">Upload DANH MỤC</a>
                </li>
            </ol>
            <div class="card mb-4">
                <form class="form-horizontal" method="GET" >
                    <h3 align="center" style="font-weight:bold" color:#b81b1b>CẬP NHẬT DANH MỤC</h3>
                    <table>
                        <tr>
                            <td class="col-3">
                                <div class="input-group w-70 mb-3 mt-2">
                                    <!-- lề trái ms-2 lề phải me-2 -->
                                    <span class="input-group-text ms-2 " id="inputGroup-sizing-default">Mã danh mục</span>
                                    <?php echo '<input name="ma" readonly autofocus class="form-control me-2"
                                    aria-lable="Sizing example input" aria-describedly="inputGroup-sizing-default" type=text value="' . $k["id_dm"] . '">'; ?>
                                </div>
                            </td>
                            <td class="col-3">
                                <div class="input-group w-70 mb-3 mt-2">
                                    <!-- lề trái ms-2 lề phải me-2 -->
                                    <span class="input-group-text ms-2 w-25" id="inputGroup-sizing-default">Tên</span>
                                    <?php echo '<input name="ten"  autofocus class="form-control me-2"
                                    aria-lable="Sizing example input" aria-describedly="inputGroup-sizing-default" type=text value="' . $k['ten'] . '">'; ?>
                                </div>
                            <!-- </td> -->


                        </tr>
                        <tr>

                            <td class="col-3">
                                <div class="input-group w-70 mb-3 mt-2">
                                    <!-- lề trái ms-2 lề phải me-2 -->
                                    <span class="input-group-text ms-2 w-40" id="inputGroup-sizing-default">Trạng thái</span>
                                    <?php echo '<input name="trangthai"  autofocus class="form-control me-2"
                                    aria-lable="Sizing example input" aria-describedly="inputGroup-sizing-default" type=text value="' . $k['trangThai']. '">'; ?>
                                </div>
                            </td>

                        </tr>
                        <tr>

                        </tr>
                        <tr>
                            <td colspan="3" align='center'>
                                <button name='them' type='submit' formaction="danhmuc_update.php" class="btn btn-primary mb-3">
                                    <!-- mb-3 lề dưới -->
                                    <i class="fas fa-user-plus" style="color: orange;"></i> Lưu
                                </button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </main>
    </div>
    <?php include "footer.php"; ?>

</body>
</html>