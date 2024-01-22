<?php

//Biến hằng
const PI = 3.14;
define("HELLO", "Xin chào các bạn lớp WD18319");

echo HELLO;

//Biến cục bộ
function show()
{
    $str = "INDEX";
    echo $str;
}
echo "<br>";
//Biến toàn cục
$green = "Màu xanh";
function showGreen()
{
    global $green;
    echo $green;
}
showGreen();
