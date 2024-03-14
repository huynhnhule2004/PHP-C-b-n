<?php 
// Bài 1: Toán tử
    $x = (2 == 3);
    $x = (2 != 3);
    $x = (2 <> 3);
    $x = (2 === 3);
    $x = (2 !== 3);
    $x = (2 > 3);
    $x = (2 < 3);
    $x = (2 >= 3);
    $x = (2 <= 3);
// Bài 2: Chuỗi (string)
    echo "<br> <h1> Bài 2 : Chuỗi(String)</h1> <br>";
    echo "<br> Xuống dòng và các kí tự đặc biệt <br>";

        $string = "Hello <br> World";
        echo $string;
        $string2 = '<br> It\'s<br>';
        echo $string2;
        echo "<br> Hello <br> World";
        echo "<br>&copy";
        echo "\u{00A9}";
        // echo "\xC2\xA9";
    echo "<br> Lấy giá trị của biến và coi đó là tên của biến ($$) <br>";
    $a = 'Hello';
    $$a = 'World';
    echo "$a ${$a} <br> ";
// Bài 3: Viết chương trình tính tổng 2 số a,b cho trước và xuất ra kết quả.
    $a = 5;
    $b = 10;
    $c = $a + $b;
    echo "Tổng hai số $a và $b là: $c";
?>