<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CategoryModel;

class ProductController extends BaseController
{
    //Phương thức để hiển thị dánh sách sản phẩm
    public function index()
    {
        $products = ProductModel::all();
        return $this->view(
            "admin/products/list",
            ["products" => $products]
        );
    }
    //Hiển thị form thêm
    public function create()
    {
        $categories = CategoryModel::all();
        return $this->view(
            "admin/products/add",
            ["categories" => $categories]
        );
    }
    //Thêm dữ liệu vào database
    public function store()
    {
        //Lấy dữ liệu
        $data = $_POST;
        //Xử lý ảnh
        $file = $_FILES['image'];
        //lấy tên ảnh
        $image = $file['name'];
        //Upload
        move_uploaded_file($file['tmp_name'], "images/" . $image);
        //Thêm ảnh vào $data
        $data['image'] = $image;
        //Insert vào database
        ProductModel::insert($data);
        header("location: " . ROOT_PATH . "product/list");
        die;
    }

    //Phương thức hiển thị form dữ liệu cần cập nhật
    public function edit()
    {
        $id = $_GET['id'];
        $product = ProductModel::find($id);
        $categories = CategoryModel::all();
        return $this->view(
            "admin/products/edit",
            ['product' => $product, 'categories' => $categories]
        );
    }
}
