<?php

use App\Router;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Models\ProductModel;

require_once __DIR__ . "/env.php";
require_once __DIR__ . "/config.php";

require_once __DIR__ . "/vendor/autoload.php";

$router = new Router();

Router::get("/home", [HomeController::class, 'index']);
Router::get("/detail", [HomeController::class, 'detail']);
//Khai báo các đường dẫn cho website
Router::get("/", function () {
    echo "HOME PAGE";
});
Router::get("/contact", function () {
    echo "Contact PAGE";
});
Router::get("/product/list", [ProductController::class, 'index']);
Router::get("/product/create", [ProductController::class, 'create']);
Router::post("/product/create", [ProductController::class, 'store']);
Router::get("/product/edit", [ProductController::class, 'edit']);
Router::post("/product/edit", [ProductController::class, 'update']);
//Xóa dữ liệu
Router::get("/product/delete", [ProductController::class, 'delete']);

$router->resolve();
