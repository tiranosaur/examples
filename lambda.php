<?php

function adder($xxx)
{
    return function ($yyy) use ($xxx) {
        echo $xxx + $yyy;
    };
}

$add2 = fn($value) => adder(2)($value);
$add2(5);