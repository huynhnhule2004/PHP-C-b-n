<?php
ob_start();// giải quyết lỗi header không chuyển trang: https://central.superhost
include('index1.php');
include("../model/sanpham.php");
$conn = getdb();
?>
<!-- main content start -->
<!-- <div id="layoutSidenav_content"> -->
    <main class="col-10 p-0">
        <div class="container-fluid px-4">
            <h1 class="mt-4">DANH SÁCH SẢN PHẨM</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcumb-item active">
                    <a href="sanpham_upload.php" style="text-decoration: none;">Upload sản phẩm</a>
                </li>
            </ol>
            <div class="card mb-4">
                <form class="form-horizontal" action="" method="GET">
                    <h3 align='center' style="font-weight: bold; color:#b81b1b">THÊM SẢN PHẨM</h3>
                    <table>
                        <tr>
                            <td class="col-3">
                                <div class="input-group w-70 mb-3 mt-2" >
                                    <!-- lề trái ms-2 lề phải me-2 -->
                                    <span class="input-group-text ms-2 w-40" id="inputGroup-sizing-default">Link file</span>
                                    <?php 
                                        error_reporting(0);
                                        session_start();
                                        if (isset($_SESSION['file_uploaded'])) {
                                        $filename = $_FILES["photo"]["name"];
                                        echo '<input name="link" class="form-control me-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="link" type=text value=' . $_SESSION['file_uploaded'] . '>';
                                        } ?>
                                </div>
                            </td>
                            <td class="col-3">
                                <div class="input-group w-70 mb-3 mt-2">
                                    <span class="input-group-text ms-2 w-25" id="inputGroup-sizing-default">Tên</span>
                                    <input name="ten" type="text" class="form-control me-2" aria-label="sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </td>
                            <td class="col-3">
                                <div class="input-group w-70 mb-3 mt-2">
                                    <span class="input-group-text ms-2 w-30" id="inputGroup-sizing-default">Đơn giá</span>
                                    <input name="gia" type="number" min=1000 class="form-control me-2" aria-label="sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-3">
                                <div class="input-group w-70 mb-3 mt-2">
                                    <span class="input-group-text ms-2 w-40" id="inputGroup-sizing-default">Số lượng</span>
                                    <input name="soluong" type="number" min=1 class="form-control me-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </td>
                            <td class="col-3">
                                <div class="input-group w-70 mb-3 mt-2">
                                    <span class="input-group-text ms-2 w-40" id="inputGroup-sizing-default">Trạng thái</span>
                                    <input name="trangthai" type="text" class="form-control me-2" aria-lable="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </td>
                            <td class="col-3">
                                <div class="input-group w-70 mb-3 mt-2">
                                    <span class="input-group-text ms-2 w-30" id="inputgroup-sizing-default">Loại</span>
                                    <select type="text" name="loai" class="form-select" id="" aria-label="Default select example">
                                        <option selected disabled value="">-Chọn loại sản phẩm-</option>
                                        <?php $sql = "select * from danhmuc";
                                        $result = $conn->query($sql) or die(mysqli_error($conn));
                                        while($row = $result->fetch_array()) { ?> 
                                        <option value=<?php echo $row["id_dm"];?>> <?php echo $row['id_dm'] . "-" . $row['ten']; ?></option>  
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
                                    <div class="form-floating me-2">
                                        <textarea class="form-control"placeholder="Leave a comment here"  id="floatingTextarea" name="mota" ></textarea>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <button name='them' type="submit" formaction='sanpham_them.php' class="btn btn-primary mb-3">
                                    <i class="fas fa-user-plus" style="color:orange;"></i> Thêm
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
<!-- </div> -->