<?php

$a = intval(readline());
$b = intval(readline());
$c = intval(readline());
$d = intval(readline());

function sum(int $a, int $b) {return $a + $b;}
$e = sum($a, $b);
function div(int $e, int $c) {return $e / $c;}
$f = div($e, $c);
function mul(int $f, int $d) {return $f * $d;}
$g = mul($f, $d);

echo $g;