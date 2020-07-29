<?php

$arr    = range(1, 10);
$rndArr = array_map(fn($item) => rand(1, 100), range(1, 10));

var_dump(array_map(function ($item) {
    return $item * $item;
}, $arr));

var_dump(array_filter($arr, function ($item) {
    return $item % 2 == 0;
}));

var_dump(array_reduce($arr, function ($item, $result) {
    return $result + $item;
}));

uasort($rndArr, fn($a, $b) => $a >= $b);
var_dump($rndArr);