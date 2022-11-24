<?php

namespace TDD;

class SrcFile
{
    public function sum(array $numbers = [])
    {
        return array_sum($numbers);
    }

    public function ageCalc($current, $birth)
    {
        return ($current - $birth);
    }
}
