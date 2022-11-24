<?php


function convertEurToUsd($eur, $convertionRate)
{
    $result = round(($eur * $convertionRate), 2);
    return "The amount in EUR is: {$result}";
}
