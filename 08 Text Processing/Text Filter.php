<?php

$banned = explode(', ', readline());
$text = readline();

for($i = 0; $i < count($banned); $i++)
{
    $word = $banned[$i];
    for ($j = 0; $j < strlen($word); $j++)
    {
        $word = str_replace($word[$j], '*', $word);
    }
    $text = str_replace($banned[$i], $word, $text);
}

echo $text;