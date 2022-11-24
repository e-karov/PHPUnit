<?php

namespace TDD\Test;

use PHPUnit\Framework\TestCase;
use TDD\Dog;

class DogTest extends TestCase
{

    function testClassConstructor()
    {
        $dog = new Dog("Bill", 4);

        $this->assertSame("Bill", $dog->name);
        $this->assertEquals(4, $dog->age);
        $this->assertEmpty($dog->favorite_foods);
    }

    function testAddFavoriteFood()
    {
        $dog = new Dog("Sam", 8);
        $this->assertTrue($dog->addFavoriteFood("Pizza"));
        $this->assertContains("Pizza", $dog->favorite_foods);
    }

    function testBark()
    {
        $dog = new Dog("Max", 6);

        $this->assertIsString($dog->bark());
    }
}
