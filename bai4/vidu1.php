<?php
//Khai báo lớp
class TenLop
{
    //Khai báo thuộc tính sử từ khóa public, protected, private
    public $thuoctinh1;
    public $thuoctinh2;

    //Khai báo các hành động (phương thức) của đối tượng
    public function hanhdong1()
    {
        echo "<h3>Đây là hành động 1</h3>";
    }
    public function hanhdong2()
    {
        echo "<h3>Đây là hành động 2</h3>";
    }
}

//Khai báo đối tượng
$doituong1 = new TenLop();
$doituong1->thuoctinh1 = "Giá trị của thuộc tính 1";
$doituong1->thuoctinh2 = "Giá trị 2";
$doituong1->hanhdong1();
echo "<pre>";
var_dump($doituong1);
