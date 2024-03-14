<?php
//1. Mảng số: tạo mảng a 5 phần tử, lưu điểm php cơ bản của sv
//C1: dùng array
$a=array(5,6,7,8,9);
//In diem cua sv thứ 3
echo $a[2];
//C2: dùng []
$b=[5,6,7,8,9];

//thêm điểm cho sinh viên thứ 6 và hiển thị kết quả
$a[5]=10;
echo "<br>";
print_r($a);
//cập nhật điểm cho sv thứ 2 là 5, hiển thị kết quả
$a[1]=5;
echo "<br>";
print_r($a);
//2. Mảng liên kết: tạo mảng sv1 lưu thông tin sinh viên: hoten, mssv, diem
//c1 dùng array. 
$sv1=array(
    'hoten' => 'Le Thi Huynh Nhu',
    'mssv' => 'PC09147',
    'diem' => '10'
);
//c2 dùng []
$sv2 = [
    'hoten' => 'Le Thi Huynh Nhu',
    'mssv' => 'PC09147',
    'diem' =>  '10'
];
//Truy xuất mảng
echo "<br>";
print_r($sv1);
echo "<br>";
print_r($sv2);

//Thêm thông tin lop vao mang sv1. Truy xuất kiểm tra
$sv1['lop']='WD19303';
echo "<br>";
print_r($sv1);

//3. Mảng hỗn hợp
//4. Mảng nhiều chiều Khai báo mảng e lưu 2 mảng con
$sv=array(
    array('hoten'=>'Le Thi Huynh Nhu',
        'mssv'=> 'PC9147',
        'diem'=> '10',
        'lop' => 'WD19303'
),
    array('hoten'=>'Nguyen Van Binh',
        'msvv'=>'pc01234',
        'diem' => '10',
        'lop' => 'WD19393'

    )
);
//lay ten nguyen van binh
echo '<br>';
// echo $sv[1][0]; bi loi do value là chuỗi
echo $sv[1]['hoten'];

//5. Khai báo hằng số euler =2.718
//C1 dùng const: ý nghĩa cục bộ
const euler = 2.718;
//C2 dùng define: toàn cục và cục bộ. Khai báo one là 1, two là 2
define('one',1);
define('two',2);
echo "<br>";
echo euler;
echo "<br>";
echo two;
echo "<br>";

//6. Khai báo hằng là 1 mảng. Dùng print_r truy xuất


//7. if else: xét các trường hợp của delta bien luan nghiem cho ptb2
$delta = 4;
if ($delta < 0) 
    echo "Phương trình vô nghiệm!";
elseif ($delta == 0) 
    echo "Phương trình có nghiệm kép!";
else 
    echo "Phương trình có hai nghiệm phân biệt!";
//8.swich case kiem tra x
$x = 5;
switch ($x) {
    case 5:
        echo "x=5";
        break;
    case 6:
        echo "x=6";
        break;
    default:
        echo "x là giá trị khác!";
        break;
}
echo '<br>';
echo $x;