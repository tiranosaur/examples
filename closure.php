<?php

function method()
{
    $aa   = 1;
    $func = function () use (&$aa) {
        $aa = $aa + 1;
        echo $aa . '<br>';
    };
    return $func;
}

echo 'method'.'<br>';
$ff = method();
$ff();
$ff();
$ff();
$ff();
$ff();
$ff();

function foo()
{
    echo 1;
    return function () {
        echo 2;
        return function () {
            echo 3;
            return function () {
                echo 4;
                return function () {
                    echo 5;
                };
            };

        };
    };
}

echo '<br>'.'foo'.'<br>';
foo();
echo '<br>';
foo()();
echo '<br>';
foo()()();
echo '<br>';
foo()()();
echo '<br>';
foo()()()();
echo '<br>';
