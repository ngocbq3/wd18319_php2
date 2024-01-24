<?php

require_once __DIR__ . "/env.php";
require_once __DIR__ . "/config.php";

require_once __DIR__ . "/vendor/autoload.php";

use App\Models\ProductModel;

// dd(ProductModel::all());
// dd(ProductModel::find(143));

// $product = ProductModel::where('name', 'LIKE', "%iphone%")->get();

// dd($product);

$data = [
    'name' => "Iphone 21 new",
    'price' => 2000,
    'detail' => '1 quả thận',
    'image' => 'iphone21.jpg'
];

// dd(ProductModel::update(169, $data));
dd(ProductModel::delete(165));
