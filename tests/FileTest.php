<?php

namespace TDD\Test;

use PHPUnit\Framework\TestCase;
use TDD\SrcFile;

class FileTest extends TestCase
{

    public function testSum()
    {
        $obj = new SrcFile();
        $input = [0, 2, 5, 8];
        $output = $obj->sum($input);

        $this->assertEquals(15, $output, "Sum of array elements should equal 15");
    }

    public function testAgeCalc()
    {
        $obj = new SrcFile();
        $output = $obj->ageCalc(2022, 1990);
        $this->assertEquals(32, $output, "The expected output is: 32");
    }
}
