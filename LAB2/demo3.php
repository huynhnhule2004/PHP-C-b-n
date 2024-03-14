<?php
//1. toán tử bậc 3
//VD1: Nếu delta>=0 phương trình có nghiệm, ngược lại vô nghiệm
$delta = 5;
$kq = ($delta >= 0) ?"phương trình có nghiệm": "phương trình vô nghiệm";
echo $kq;
//2. toán tử match
//VD2: Cho biết y là số chẵn hay lẻ
$y = 5;
$kq1=match($y%2) {
    0 => 'số chẵn',
    default => 'số lẻ'
};
echo "<br>";
echo $kq1;

//VD3: match nhiều đk giống nhau: z= 2 4 6 thì in số chẵn, 
//ngược lại in chưa kiểm tra

//3. VÒNG LẶP WHILE
//VD4: Dùng while hiển thị số chẵn trong khoảng từ 1-10
$i = 12;
while ($i <= 10) {
    if($i % 2 == 0) {
        echo $i." ";
    }
    $i++;
}

//4. VÒNG LẶP DO WHILE
//VD5: Làm vd4 sử dụng do while. Kiểm tra sự khác biệt khi i và j ban đầu =12
echo "<br>";
$j=12;
do {
    if ($j % 2 == 0) {
        echo $j." ";
    }
    $j++;
} while ($j <= 10);
//5. VÒNG LẶP FOR
//VD6: thực hiện vd4 sử dụng for
echo "<br>";
for ($i = 1;$i <= 10;$i++) {
    if($i % 2== 0) {
        echo $i." ";}
}
echo "<br>";
//VD7: Khai báo mảng a gồm 5 phần tử. Duyệt các số chẵn trong mảng a
$a=array(5,6,7,8,9);
for ($i=0;$i<= sizeof($a)-1;$i++) {
    if ($a[$i] % 2 == 0)
    echo $a[$i]." ";
}
echo "<br>";
//6. VÒNG LẶP FOREACH
//VD8: tương tự VD7
foreach ($a as $value) {
    if ($value % 2==0) {
        echo $value." ";
    }
}
//VD9: Tạo mảng liên kết b, hiển thị mảng b
//Lấy cả key, value
$b = array(
    'hoten' => 'Nguyễn Văn Tèo',
    'mssv' => 'PC0912345'
);
echo "<br>";
foreach ($b as $key => $value) {
    echo $key. ":".$value.' ';
}
//Lấy value