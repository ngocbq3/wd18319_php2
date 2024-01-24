<?php
const ROOT_PATH = "http://localhost/wd18319_php2/mvc/";
const ROOT_URI = "/wd18319_php2/mvc/";

//hàm dd dùng để bug
function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}
