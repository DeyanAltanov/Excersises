<?php

$courses = explode(', ', readline());

$command = readline();

$c = explode(':', $command);

function swap(array $arr, string $lesson, string $lesson1)
{
    $index = array_search($lesson, $arr);
    $index1 = array_search($lesson1, $arr);

    if ($index !== false && $index1 !== false)
    {
        $arr[$index] = $lesson1;
        $arr[$index1] = $lesson;
    }

    if (isset($arr[$index + 1]) && $arr[$index + 1] == $lesson . "-Exercise")
    {
        array_splice($arr, $index + 1, 1);
        array_splice($arr, $index1 + 1, 0, $lesson . "-Exercise");
    }

    elseif (isset($arr[$index1 + 1]) && $arr[$index1 + 1] == $lesson1 . "-Exercise")
    {
        array_splice($arr, $index1 + 1, 1);
        array_splice($arr, $index + 1, 0, $lesson1 . "-Exercise");
    }

    return $arr;
}

while ($command != 'course start')
{
    switch ($c[0])
    {
        case 'Add':
            $exist = false;
            for ($i = 0; $i < count($courses); $i++)
            {
                if ($courses[$i] == $c[1])
                {
                    $exist  = true;
                }
            }
            if ($exist == false)
            {
                $courses[] = $c[1];
            }
        break;
        case 'Insert':
            $exist = false;
            for ($i = 0; $i < count($courses); $i++)
            {
                if ($courses[$i] == $c[1])
                {
                    $exist  = true;
                }
            }
            if ($exist == false)
            {
                array_splice($courses, $c[2], 0, $c[1]);
            }
        break;
        case 'Remove':
            for ($i = 0; $i < count($courses); $i++)
            {
                if ($courses[$i] == $c[1])
                {
                    array_splice($courses, $i, 1);
                    for ($j = $i; $j < count($courses); $j++)
                    {
                        if ($courses[$i] == $c[1] . "-Exercise")
                        {
                            array_splice($courses, $j, 1);
                        }
                    }
                }
            }
        break;
        case 'Swap':
            $courses = swap($courses, $c[1], $c[2]);
        break;
        case 'Exercise':
            $exist = array_search($c[1], $courses);
            $exist1 = array_search($c[1] . "-Exercise", $courses);
            if ($exist == false)
            {
                $courses[] = $c[1];
                $courses[] = $c[1] . "-Exercise";
            }
            elseif ($exist1 == false)
            {
                array_splice($courses, $exist +1, 0, $c[1] . "-Exercise");
            }
        break;
    }

    $command = readline();

    $c = explode(':', $command);
}

for ($i = 0; $i < count($courses); $i++)
{
    $p = $i + 1;
    echo "$p.$courses[$i]";
    echo PHP_EOL;
}