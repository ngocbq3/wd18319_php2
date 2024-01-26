<?php

namespace App\Controllers;

use App\Models\ProductModel;

class HomeController extends BaseController
{
    public function index()
    {
        $products = ProductModel::all();

        return $this->view(
            "client/home",
            ['products' => $products]
        );
    }
    public function detail()
    {
        $id = $_GET['id'];
        $product = ProductModel::find($id);
        return $this->view(
            "client/detail",
            ['product' => $product]
        );
    }
}
