<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>
    <h2>Hello world</h2>
    <?php
    //VD1: dung the tieu de h1..h6 hien thi hello world 
    for ($i=1; $i <= 6;$i++) {
        echo "<h" . $i .">Hello world</h" . $i . ">";
    }
    //VD2: dùng foreach hiển thị danh sách các phần tử trong mảng a là danh sách MSSV 
    $a = array("PC12345","PC12346","PC12447","PC12348","PC12349");
    echo "<ul>";
    foreach($a as $value) {
        echo "<li> ".$value."</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>