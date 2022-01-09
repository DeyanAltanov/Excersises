<?php

$numbers = array_map('intval', explode(' ', readline()));

while (count($numbers) > 1)
{
    $nums = [];
    for($i = 0; $i < count($numbers) - 1; $i++)
    {
        $nums[] = $numbers[$i] + $numbers[$i + 1];
    }
    $numbers = $nums;
}

echo $numbers[0];