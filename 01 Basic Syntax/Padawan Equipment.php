<?php

$money = floatval(readline());
$students = intval(readline());
$lightsaber = floatval(readline());
$robe = floatval(readline());
$belt = floatval(readline());

$k = $students;

for ($i = 1; $i <= $students; $i++)
{
    if ($i % 6 == 0)
    {
        $k--;
    }
}

$price = (ceil(($students * 0.1) + $students) * $lightsaber) + ($students * $robe) + ($k * $belt);

if ($money >= $price)
{
    printf('The money is enough - it would cost %.2flv.', $price);
}
else if($money < $price)
{
    printf('Ivan Cho will need %.2flv more.', $price - $money);
}