<?php

$arr = explode(' : ', readline());

$course = $arr[0];

$courses = [];

while($course != 'end')
{
    if (!key_exists($course, $courses))
    {
        $courses[$course] = [];
        $courses[$course][] = $arr[1];
    }
    elseif(isset($arr[1]))
    {
        $courses[$course][] = $arr[1];
    }

$arr = explode(' : ', readline());

    $course = $arr[0];
}

uksort($courses, function ($arr1, $arr2) use ($courses){
    return  count($courses[$arr2]) <=> count($courses[$arr1]);
});

foreach ($courses as $course => $users)
{
    sort($users);
    $count = count($users);
    echo "$course: $count".PHP_EOL;
    foreach ($users as $user)
    {
        echo "-- $user".PHP_EOL;
    }
}