<?php

namespace TDD\Test;

use PHPUnit\Framework\TestCase;

require_once("src/averageArray.php");

class AverageArrayTest extends TestCase
{

    public function testAvArray()
    {
        $this->assertEquals(5, calcAverage([3, 5, 3, 5, 9]));
    }
}
