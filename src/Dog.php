<?php

namespace TDD;

class Dog
{

    public $name;
    public $age;
    public $favorite_foods = [];

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function printName()
    {
        return "My name is: {$this->name}.";
    }
    public function printAge()
    {
        return "I am {$this->age} years old.";
    }

    public function addFavoriteFood($food)
    {
        array_push($this->favorite_foods, $food);
        return true;
    }

    public function bark()
    {
        return "woof woof";
    }
}
