<?php

//function view để render ra giao diện người dùng
//$view: trang giao diện ở view
//$data: dữ liệu được đưa vào cho view
function view($view, $data = [])
{
    extract($data);
    include_once "views/$view.php";
}
