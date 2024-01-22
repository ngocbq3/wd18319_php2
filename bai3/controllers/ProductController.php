<?php

//function productIndex để hiển thị danh sách sản phẩm
function productIndex()
{
    $products = getProductAll();
    // $data = ["products" => $products];
    view("listproduct", ["products" => $products]);
}
