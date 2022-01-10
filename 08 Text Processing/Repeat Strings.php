<?php

$arr = explode(' ', readline());

for ($i = 0; $i < count($arr); $i++)
{
    echo str_repeat($arr[$i], strlen($arr[$i]));
}