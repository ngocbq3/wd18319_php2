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

        //lấy message khi cập nhật
        $message = $_COOKIE['message'] ?? '';
        return $this->view(
            "admin/products/edit",
            [
                'product' => $product,
                'categories' => $categories,
                'message' => $message
            ]
        );
    }
    //Phương thức cập nhật dữ liệu
    public function update()
    {
        $data = $_POST;
        //Xử lý file
        $file = $_FILES['image'];
        //Kiểm tra xem người dùng có cập nhật ảnh không
        //Xem người dùng có nhập ảnh vào form không
        if ($file['size'] > 0) {
            $image = $file['name']; //Lấy tên ảnh
            move_uploaded_file($file['tmp_name'], "images/" . $image);
            //Thêm ảnh vào data
            $data['image'] = $image;
        }
        //Cập nhật DL
        ProductModel::update($data['id'], $data);
        setcookie("message", "Cập nhật dữ liệu thành công", time() + 2);
        //Quay lại giao diện edit
        header("location:" . ROOT_PATH . "product/edit?id=" . $data['id']);
        die;
    }
    //Phương thức xóa dl
    public function delete()
    {
        $id = $_GET['id'];
        ProductModel::delete($id);
        redirect('product/list');
    }
}
