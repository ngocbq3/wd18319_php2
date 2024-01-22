<?php
//Hàm không có giá trị trả về
//Hàm không có tham số
function welcome()
{
    echo "<h3>Chào mừng đến với website</h3>";
}
//gọi hàm
welcome();
//Hàm có tham số
function showMessage($message)
{
    echo $message;
}
//gọi hàm
showMessage("Xin chào thế giới");
//Hàm có tham số chứa giá trị mặc định
function getFullName($fname = "Nguyễn Văn", $lname = "Trọng")
{
    echo "<h3>$fname $lname</h3>";
}

//Gọi hàm
getFullName("Lê Văn", "Khoa");

//Hàm có giá trị trả về
function sum($a, $b)
{
    return $a + $b;
}
//Gọi hàm
echo "<br>Tổng của 2 số = " . sum(10, 20);

//toán tử rest ...
//Hàm không biết trước số lượng tham số
function sumMultiNumber(...$numbers)
{
    echo "<pre>";
    var_dump($numbers);
    echo "</pre>";
    return array_sum($numbers);
}
//Gọi hàm 
echo "<br>Tổng các số: " . sumMultiNumber(3, 5, 2, 3, 5, 4, 234, 2);
