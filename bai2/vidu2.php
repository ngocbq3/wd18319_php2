<?php
//1. Anonymous Function
function () {
    echo "Xin chào";
};
//Gọi hàm
call_user_func(function () {
    echo "Xin chào";
});
echo "<br />";
//Hàm có chứa tham số
call_user_func(function ($name) {
    echo "Xin chào: $name";
}, "Hưng");

//2. IIFE
(function ($fullname) {
    echo "<h3>Xin chào: $fullname </h3>";
})("Nguyễn Văn Hưng");

//3. Closure
$hello = function () {
    echo "Xin chào các bạn đên với lớp học PHP nâng cao";
};
//Gọi hàm
$hello();

//4. Callback
function setFullName($fname, $lname, $callback)
{
    $fullname = $fname . " " . $lname;
    //Kiểm tra xem callback có phải là 1 hàm hay không
    if (is_callable($callback)) {
        $callback($fullname);
    } else {
        echo "$callback không phải là 1 function";
    }
}
echo "<br />";
//gọi hàm
setFullName("Lê Huy", "Hưng", function ($fullname) {
    echo "<h3>$fullname</h3>";
});
//Xây dựng sẵn 1 hàm callback
function fullName($fullname)
{
    echo "<h3>$fullname</h3>";
}

//Gọi hàm
setFullName("Lê Văn", "Duy", "fullName");
