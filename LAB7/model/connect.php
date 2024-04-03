<?php
function getdb()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "qlbh";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully";
    return $conn;
}
$conn = getdb();
mysqli_close($conn);
