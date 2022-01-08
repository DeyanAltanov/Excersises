<?php

$a = floatval(readline());
$b = floatval(readline());

$eps = 0.000001;

if  (abs($a - $b) < $eps)
{
    echo "True";
}
else
{
    echo "False";
}