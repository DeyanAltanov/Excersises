<?php

$n = intval(readline());

$synonyms = [];

for ($i = 0; $i < $n * 2; $i++)
{
    $word = readline();
    if ($i % 2 == 0)
    {
        $key = $word;

        if (!array_key_exists($word, $synonyms))
        {
            $synonyms[$word] = [];
        }
    }
    else
    {
       array_push($synonyms[$key], $word);
    }
}

uksort($synonyms, function ($key1, $key2) use ($synonyms){
    if (count($synonyms[$key1]) == count($synonyms[$key2]))
    {
        return $key1 <=> $key2;
    }
    else
    {
        return count($synonyms[$key2]) <=> count($synonyms[$key1]);
    }
});

foreach ($synonyms as $key => $words)
{
    $w = implode(', ', $words);
    echo "$key - $w".PHP_EOL;
}