<?php

function validateAccount($str)
{
    $regexp = '/^[_a-z0-9]{6,}$/';
    if (preg_match($regexp, $str)) {
        return true;
    }
    return false;
}

$acc1 = "123abc_";
$acc2 = "_abc123";
$acc3 = "______";
$acc4 = "123456";
$acc5 = "abcdefg";

$acc10 = ".@";
$acc11 = "12345";
$acc12 = "1234_";
$acc13 = "abcde ";

echo validateAccount($acc10);