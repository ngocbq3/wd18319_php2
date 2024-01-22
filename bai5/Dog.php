<?php

require_once "./Animal.php";
class Dog extends Animal
{
    //tính đa hình
    public function makeSound()
    {
        echo "{$this->name} đang sủa gâu gâu";
    }
}
