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

    //Method resolve: thực hiện việc điều hướng theo routes
    public function resolve()
    {
        $method = $this->getMethod();
        //Lấy đường dẫn trên thanh địa chỉ trình duyệt
        $path = $_SERVER["REQUEST_URI"];
        //Tiến hành làm gọn đường dẫn
        $path = str_replace(ROOT_URI, "/", $path);

        $callback = false;
        //Kiểm tra xem đường dẫn có được khai báo chưa
        if (isset(static::$routes[$method][$path])) {
            $callback = static::$routes[$method][$path];
        }
        if ($callback === false) {
            echo "404 NOT FOUND";
            die;
        }
        if (is_callable($callback)) {
            return $callback();
        }
    }
}
