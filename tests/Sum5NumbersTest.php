<?php

namespace TDD\Test;

use PHPUnit\Framework\TestCase;

require_once("src/sum5Numbers.php");

class SumArrayTest extends TestCase
{

    public function testSumArray()
    {
        $this->assertEquals(17, sum(2, -4, 12, 2, 3, 2));
    }
}
