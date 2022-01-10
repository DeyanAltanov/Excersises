<?php

$arr = explode(' ', readline());

$word1 = $arr[0];
$word2 = $arr[1];

$min = min(strlen($word1), strlen($word2));
$max = max(strlen($word1), strlen($word2));

$sum = 0;

for ($i = 0; $i < $min; $i++)
{
    $sum += ord($word1[$i]) * ord($word2[$i]);
}

if (strlen($word1) > strlen($word2))
{
    $smaller = $word2;
    $bigger = $word1;
}
elseif (strlen($word2) > strlen($word1))
{
    $smaller = $word1;
    $bigger = $word2;
}

for ($i = $min; $i < $max; $i++)
{
    $sum += ord($bigger[$i]);
}

echo $sum;