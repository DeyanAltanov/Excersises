<?php

$input = readline();

$sides = [];

while ($input != 'Lumpawaroo')
{
    if (strpos($input, ' | '))
    {
        $arr = explode(' | ', $input);

        if (!array_key_exists($arr[0], $sides))
        {
            $sides[$arr[0]][] = $arr[1];
        }
        else
        {
            if (in_array($arr[1], $sides[$arr[0]]) == false)
            {
                $sides[$arr[0]][] = $arr[1];
            }
        }
    }
    else
    {
        $arr = explode(' -> ', $input);

        if (!array_key_exists($arr[1], $sides))
        {
            $sides[$arr[1]][] = $arr[0];
        }
        else
        {
            foreach ($sides as $side => &$users)
            {
                if (in_array($arr[0], $users) == true)
                {
                    $i = array_search($arr[0], $users);
                    unset ($users[$i]);
                }
            }

            $sides[$arr[1]][] = $arr[0];
            echo "$arr[0] joins the $arr[1] side!".PHP_EOL;
        }
    }

    $input = readline();
}

uksort($sides, function ($key1, $key2) use ($sides) {
    if (count($sides[$key1]) != count($sides[$key2]))
    {
        return $sides[$key2] <=> $sides[$key1];

    }
    elseif (count($sides[$key1]) == count($sides[$key2]))
    {
        return $key1 <=> $key2;
    }
});

foreach ($sides as $side => &$users)
{
    asort($users);
}

foreach ($sides as $side => &$users)
{
    if (count($users) > 0)
    {
        $count = count($users);
        echo "Side: $side, Members: $count".PHP_EOL;
        foreach ($users as $user)
        {
            echo "! $user".PHP_EOL;
        }
    }
}