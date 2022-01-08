<?php

$grade = floatval(readline());

if ($grade >= 3.00)
{
    echo "Passed!";
}
elseif ($grade < 3.00)
{
    echo "Failed!";
}