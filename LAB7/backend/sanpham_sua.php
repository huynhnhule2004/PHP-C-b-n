<?php
ob_start(); //giaỉ quyết lổi header không chuyển trang
include('index1.php');
include("../model/sanpham.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $ma = $_GET["touch"];
    $k = getSP($ma);
}
?>
<!-- main content start -->
<!-- <div id="layoutSidenav_content"> -->
    <main class="col-10 p-0">
        <div class="container-fluid px-4">
            <h1 class="mt-4">DANH SÁCH SẢN PHẨM</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">
                    <a href="sanpham_upload.php" style="text-decoration:none">Upload Sản phẩm</a>
                </li>
            </ol>
            <div class="card mb-4">
                <form class="form-horizontal" method="GET" >
                    <h3 align="center" style="font-weight:bold" color:#b81b1b>CẬP NHẬT SẢN PHẨM</h3>
                    <table>
                        <tr>
                            <td class="col-3">
                                <div class="input-group w-70 mb-3 mt-2">
                                    <!-- lề trái ms-2 lề phải me-2 -->
                                    <span class="input-group-text ms-2 " id="inputGroup-sizing-default">Mã sản phẩm</span>
                                    <?php echo '<input name="ma" readonly autofocus class="form-control me-2"
                                    aria-lable="Sizing example input" aria-describedly="inputGroup-sizing-default" type=text value="' . $k["id_sp"] . '">'; ?>
                                </div>
                            </td>
                            <td class="col-3">
                                <div class="input-group w-70 mb-3 mt-2">
                                    <!-- lề trái ms-2 lề phải me-2 -->
                                    <span class="input-group-text ms-2 w-25" id="inputGroup-sizing-default">Tên</span>
                                    <?php echo '<input name="ten"  autofocus class="form-control me-2"
                                    aria-lable="Sizing example input" aria-describedly="inputGroup-sizing-default" type=text value="' . $k['ten'] . '">'; ?>
                                </div>
                            </td>
                            <td class="col-3">
                                <div class="input-group w-70 mb-3 mt-2">
                                    <!-- lề trái ms-2 lề phải me-2 -->
                                    <span class="input-group-text ms-2 w-30" id="inputGroup-sizing-default">Đơn giá</span>
                                    <?php echo '<input name="gia"  readonly autofocus class="form-control me-2"
                                    aria-lable="Sizing example input" aria-describedly="inputGroup-sizing-default" type=text value="' . $k['gia'] . '">'; ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-3">
                                <div class="input-group w-70 mb-3 mt-2">
                                    <!-- lề trái ms-2 lề phải me-2 -->
                                    <span class="input-group-text ms-2 w-40" id="inputGroup-sizing-default">Số lượng</span>
                                    <?php echo '<input name="soluong"  autofocus class="form-control me-2"
                                    aria-lable="Sizing example input" aria-describedly="inputGroup-sizing-default" type=text value="' . $k['soLuong'] . '">'; ?>
                                </div>
                            </td>
                            <td class="col-3">
                                <div class="input-group w-70 mb-3 mt-2">
                                    <!-- lề trái ms-2 lề phải me-2 -->
                                    <span class="input-group-text ms-2 w-40" id="inputGroup-sizing-default">Trạng thái</span>
                                    <?php echo '<input name="trangthai"  autofocus class="form-control me-2"
                                    aria-lable="Sizing example input" aria-describedly="inputGroup-sizing-default" type=text value="' . $k['trangThai']. '">'; ?>
                                </div>
                            </td>
                            <td class="col-3">
                                <div class="input-group w-70 mb-3 mt-2">
                                    <!-- lề trái ms-2 lề phải me-2 -->
                                    <span class="input-group-text ms-2 w-30" id="inputGroup-sizing-default">Loại</span>
                                    <select type="text" name="loai" class="form-select"
                                    aria-label="Default select example">
                                <option selected disabled>-Chọn loại sản phẩm-</option>
                                <?php 
                                $conn = getdb() ;
                                $sql = "select * from danhmuc";
                                $result = $conn->query($sql) or die(mysqli_error($conn));
                                while ($row = $result->fetch_array()) { ?>
                                    <option value=<?php echo $row["id_dm"]; ?>>
                                        <?php echo $row["id_dm"] . "-" .$row["ten"]; ?>
                                    </option>
                               <?php } ?>
                                
                            </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="input-group w-70 mb-3 mt-2">
                                    <!-- lề trái ms-2 lề phải me-2 -->
                                    <span class="input-group-text ms-2" id="inputGroup-sizing-default">Mô tả</span>
                                    <?php echo '<input name="mota" autofocus class="form-control me-2"
                                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" type=text value="' . $k['moTa'].'">';?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align='center'>
                                <button name='them' type='submit' formaction="sanpham_update.php" class="btn btn-primary mb-3">
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