<?php

$n = intval(readline());

$studentsGradesSum = [];

$studentsGradeCount = [];

for ($i = 0; $i < $n; $i++)
{
    $name = readline();
    $grade = floatval(readline());

    if (!key_exists($name, $studentsGradesSum))
    {
        $studentsGradesSum[$name] = $grade;
        $studentsGradeCount[$name] = 1;
    }
    else
    {
        $studentsGradesSum[$name] += $grade;
        $studentsGradeCount[$name] ++;
    }
}

$studentsAvg = [];

foreach ($studentsGradesSum as $student => $grade)
{
    $average = $studentsGradesSum[$student] / $studentsGradeCount[$student];
    if ($average >= 4.50)
    {
        $studentsAvg[$student] = $average;
    }
}

arsort($studentsAvg);

foreach ($studentsAvg as $student => $avg)
{
    printf('%s -> %.2f', $student, $avg);
    echo PHP_EOL;
}