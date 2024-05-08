<?php

/*
 * Command: "php fizzbuzz.php 120"
 */
[$path, $amount] = array_pad($argv, 2, 100);

$compare = [
    3 => "Fizz",
    5 => "Buzz"
];

for ($i = 1; $i <= $amount; $i++) {
    $response = null;

    foreach ($compare as $key => $value) {
        if ($i % $key === 0) $response .= $value;
    }

    echo ($response ?? $i) . PHP_EOL;
}
