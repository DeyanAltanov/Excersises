<?php

function addAndSubstract($n, $m, $p)
{
    $sum = $n + $m;
    echo $sum - $p;
}

addAndSubstract(intval(readline()), intval(readline()), intval(readline()));