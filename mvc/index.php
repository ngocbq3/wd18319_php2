<?php

use App\Router;
use App\Controllers\HomeController;

require_once __DIR__ . "/env.php";
require_once __DIR__ . "/config.php";

require_once __DIR__ . "/vendor/autoload.php";

$router = new Router();

Router::get("/home", [HomeController::class, 'index']);
//Khai báo các đường dẫn cho website
Router::get("/", function () {
    echo "HOME PAGE";
});
Router::get("/contact", function () {
    echo "Contact PAGE";
});
Router::get("/product/create", function () {
    echo "Create Product Page";
});

$router->resolve();
