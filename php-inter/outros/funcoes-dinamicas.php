<?php

function name(string $name)
{
    echo "Hey you, $name." . PHP_EOL;
}

$function_name = "name";
$function_name('Taylon');

function sum(int $n1, int $n2): int
{
    return $n1 + $n2;
}

$function_sum = "sum";
echo $function_sum(2,4);

