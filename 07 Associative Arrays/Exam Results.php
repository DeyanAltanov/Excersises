<?php

$command = readline();

$students = [];

$submissions = [];

while ($command != 'exam finished')
{
    $c = explode('-', $command);

    $name = $c[0];
    $language = $c[1];
    if (isset($c[2]))
    {
        $points = $c[2];
    }

    if (!array_key_exists($name, $students))
    {
        $students[$name] = $points;
    }
    else
    {
        if ($language == 'banned')
        {
            unset($students[$name]);
        }
        elseif ($points > $students[$name])
        {
            $students[$name] = $points;
        }
    }

    if (!array_key_exists($language, $submissions))
    {
        if ($language != 'banned')
        {
            $submissions[$language] = 1;
        }
    }
    else
    {
        $submissions[$language]++;
    }

    $command = readline();
}

uksort($students, function ($key1, $key2) use ($students){
    $points1 = $students[$key1];
    $points2 = $students[$key2];
    if ($points1 == $points2)
    {
        return $key1 <=> $key2;
    }
    else
    {
        return $points2 <=> $points1;
    }
});

uksort($submissions, function ($key1, $key2) use ($submissions){
    $count1 = $submissions[$key1];
    $count2 = $submissions[$key2];
    if ($count1 == $count2)
    {
        return $key1 <=> $key2;
    }
    else
    {
        return $count2 <=> $count1;
    }
});

echo 'Results:'.PHP_EOL;
foreach ($students as $key => $value)
{
    echo "$key | $value".PHP_EOL;
}
echo 'Submissions:'.PHP_EOL;
foreach ($submissions as $key => $value)
{
    echo "$key - $value".PHP_EOL;
}