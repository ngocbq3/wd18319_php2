<?php

//Tạo 1 lớp Animal
class Animal
{
    //Khai báo thuộc tính
    public $ten;
    public $mausac;
    public $tuoi;
    public $cannang;

    //khai báo hàm khởi tạo, hàm này sẽ được thực thi ngay khi tạo đối tượng
    public function __construct($ten, $mausac, $tuoi, $cannang)
    {
        $this->ten = $ten;
        $this->mausac = $mausac;
        $this->tuoi = $tuoi;
        $this->cannang = $cannang;
    }

    //Khai báo hành động (phương thức)
    public function an($thucan)
    {
        $this->cannang += $thucan;
        echo "$this->ten vừa ăn được $thucan kg";
    }
    public function chay()
    {
        echo "$this->ten đang chay";
    }
    //Tính bao đóng
    protected function ngu()
    {
        echo "$this->ten đang ngủ rất say";
    }
    //tạo thuộc tính sử dụng từ khóa private
    private $loaiVat = "Mèo";
    public function getLoaiVat()
    {
        echo "Loài vật là: " . $this->loaiVat;
    }
}

//Tính kế thừa
class Dog extends Animal
{
    //Gọi protected từ lớp con
    public function getNgu()
    {
        $this->ngu();
    }
    //Gọi từ lớp kế thừa
    public function getLoaiVat()
    {
        echo $this->loaiVat;
    }
}

$meo = new Animal("Mèo Tom", "Xám", 100, 10);
//Gọi đến thuộc tính
echo "Tên con vật: " . $meo->ten;
echo "<br />";
//Gọi đến hành động
$meo->an(0.2);
echo "<br />";
$meo->getLoaiVat();
// $meo->ngu(); //không thể gọi đến do đang đóng gói bằng protected
// $meo->loaiVat; //Không thể gọi đến thuộc tính private
//Tạo đối tượng từ lớp Dog
$cauVang = new Dog("Cậu Vàng", "Vàng", 4, 25);
echo "<br />";
$cauVang->an(1);
echo "<br />";
$cauVang->getNgu();
var_dump($cauVang);
// $cauVang->getLoaiVat(); //sai
