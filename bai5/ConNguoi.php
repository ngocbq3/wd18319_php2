<?php

namespace App;

class ConNguoi
{
    public static function getClass()
    {
        echo "<br />Truy cập static: ";
        var_dump(new static);
        echo "<br />Truy cập self: ";
        var_dump(new self);
    }
}
