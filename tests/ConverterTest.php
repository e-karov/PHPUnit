<?php

namespace TDD\Test;

use PHPUnit\Framework\TestCase;

require_once("src/currencyConverter.php");

class ConverterTest extends TestCase
{
    public function testCurrencyConverter()
    {
        $this->assertStringContainsString("20.71", convertEurToUsd(20, 1.03573));
    }
}
