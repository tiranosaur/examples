<?php

$factorial = fn($item, $factorial) => $item <= 1 ? 1 : $item * $factorial($item - 1, $factorial, $factorial);
function factorial($item)
{
    if ($item <= 1) {
        return 1;
    }
    return $item * factorial($item - 1);
}

function factorialShort($item)
{
    return $item <= 1 ? 1 : $item * factorialShort($item - 1);
}

echo '<br>Arrow Recursive 5! = ' . $factorial(5, $factorial);
echo '<br>Recursive 5! = ' . factorial(5);
echo '<br>Short Form Recursive 5! = ' . factorialShort(5);