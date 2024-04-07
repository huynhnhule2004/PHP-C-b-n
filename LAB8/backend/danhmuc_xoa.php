<?php
include("../model/connect.php");
$conn = getdb();
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $ma = $_GET["touch"];
    $sql = "DELETE FROM danhmuc WHERE id_dm=$ma";
    echo $sql;
    $results = mysqli_query($conn,$sql);
    if($results === false)
        echo mysqli_error($conn);
    header("Location:" . 'index.php?page=danhmuc_upload');
}