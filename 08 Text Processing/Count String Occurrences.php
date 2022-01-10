<?php

$text = readline();
$word = readline();
$occurrences = 0;

$text = str_replace([' ', ',', '.', '?'], '!', $text);

$arr = explode('!', $text);

for ($i = 0; $i < count($arr); $i++)
{
    if ($word == $arr[$i])
    {
        $occurrences++;
    }
}

echo $occurrences;