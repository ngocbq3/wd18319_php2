<?php

require_once "./Animal.php";
class Cat extends Animal
{
    //tính đa hình
    public function makeSound()
    {
        echo "{$this->name} đang kêu meo meo ...";
    }
}
