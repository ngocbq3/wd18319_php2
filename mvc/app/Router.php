<?php

namespace App;

class Router
{
    //thuôc tính $routes để lưu trữ đường dẫn của website
    protected static $routes = [];

    /**
     * method get: khai báo đường dẫn theo phương thức get
     * $path: đường dẫn
     * $callback: hành đồng theo đường dẫn
     */
    public static function get($path, $callback)
    {
        static::$routes['get'][$path] = $callback;
    }
    public static function post($path, $callback)
    {
        static::$routes['post'][$path] = $callback;
    }

    //Method getmethod: để lấy thông tin của Method
    public function getMethod()
    {
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }
}
