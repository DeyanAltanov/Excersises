<?php

$arr = explode(', ', readline());

$participants = [];

for ($i = 0; $i < count($arr); $i++)
{
    $participants[$arr[$i]] = 0;
}

$input = readline();

while ($input != 'end of race')
{
    $participant = array_filter(preg_split('/[!@#$%^&*()_+=\-;:~`{}\[\]\'"|<>\?\/\\.,0-9]/', $input));

    $d = array_filter(preg_split('/[!@#$%^&*()_+=\-;:~`{}\[\]\'"|<>\?\/\\.,a-zA-Z]/', $input));

    $participant = implode('', $participant);

    if (key_exists($participant, $participants))
    {
        $d = implode('', $d);

        $distance = 0;

        for ($i = 0; $i < strlen($d); $i++)
        {
            $distance += $d[$i];
        }

        $participants[$participant] += $distance;
    }

    $input = readline();
}

arsort($participants);

$prtspnts = [];

foreach ($participants as $participant => $distance)
{
    $prtspnts[$participant] = $distance;
    if (count($prtspnts) >= 3)
    {
        break;
    }
}

$place = 1;

foreach ($prtspnts as $participant => $distance)
{
    if ($place == 1)
    {
        echo "$place".'st'." place: $participant".PHP_EOL;
    }
    elseif ($place == 2)
    {
        echo "$place".'nd'." place: $participant".PHP_EOL;
    }
    elseif ($place == 3)
    {
        echo "$place".'rd'." place: $participant".PHP_EOL;
    }
    $place ++;
}