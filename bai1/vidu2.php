<?php

//Mảng tuần tự
$arr1 = [1, 3, 4, 'hello', 2.3];
$arr2 = array(2.4, 4, 6, 4, 7);

$a = $arr1[3];

//Mảng liên hợp là mảng có key và value
$user = [
    "id" => 1,
    "username" => "admin",
    "address" => "Hà Nội",
    "email" => "admin@gmail.com",
    "password" => "223344"
];
//Lấy ra email
$email = $user['email'];

//Mảng 2 chiều
$sinhvien = [
    ["mssv" => "PH12345", "hoten" => "nguyễn Văn A", "email" => "anvph12345@fpt.edu.vn", "quequan" => "Hà Nội", "hinh" => "image.jpg"],
    ["mssv" => "PH12346", "hoten" => "Trần Anh Tú", "email" => "tutaph12346@fpt.edu.vn", "quequan" => "nam định", "hinh" => "image.jpg"],
    ["mssv" => "PH12347", "hoten" => "Lê Quang Liêm", "email" => "liemlqph12347@fpt.edu.vn", "quequan" => "Hà Nam", "hinh" => "image.jpg"],
];
//truy cập phần tử
echo $sinhvien[1]['email'];
