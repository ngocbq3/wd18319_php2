<?php

require_once "./Dog.php";
require_once "./Cat.php";

$cauVang = new Dog("Cậu Vàng", "Vàng");
$meoTom = new Cat("Mèo Tom", "Xám");

$cauVang->makeSound();
echo "<br />";
$meoTom->makeSound();


//Tính trừu tượng
require_once "./HDBank.php";

$bank = new HDBank("Lê Văn Dũng", "012345", 20000000);
$bank->napTien(500000);
//Xem số tiền nạp
echo "<br />";
echo "Số dư tài khoản là: " . $bank->soDu;

//Interface
require_once "./BankInterface.php";
require_once "./HKBank.php";

use App\HKBank;

$user1 = new HKBank("Nguyễn Văn Lộc", "098123", 20000000);
$user2 = new HKBank("Trần Thị Loan", "0990123", 0);

$user1->chuyenTien(500000, $user2);


//static và self
require_once "./ConNguoi.php";
require_once "./NguoiLon.php";

use App\NguoiLon;

NguoiLon::getClass();
