<?php

$arr = explode(' ', readline());

$command = strtolower(readline());

$c = explode(' ', $command);

while ($command != '3:1')
{
    switch ($c[0])
    {
        case 'merge':
            $element = '';
            if ($c[1] < 0 && $c[2] < 0)
            {
                for ($i = 0; $i < count($arr); $i++)
                {
                }
            }
            elseif ($c[1] >= count($arr) - 1 && $c[2] >= count($arr) - 1)
            {
                for ($i = 0; $i < count($arr); $i++)
                {
                }
            }
            else
            {
                if ($c[1] < 0)
                {
                    $c[1] = 0;
                }
                if ($c[2] > count($arr))
                {
                    $c[2] = count($arr) -1;
                }
                for ($i = $c[1]; $i <= $c[2]; $i++)
                {
                    $element .= $arr[$i];
                }
                array_splice($arr, $c[1], $c[2] - $c[1] + 1, $element);
            }
        break;
        case 'divide':
            $element = $arr[$c[1]];
            $elementLength = floor(strlen($element) / $c[2]);

            $arr2 = str_split($element, $elementLength);
            array_splice($arr, $c[1], 1);

            $remainder = strlen($element) % $c[2];
            $additionalLast = substr($element, strlen($element) - $remainder );

            if ($remainder > 0)
            {
                array_splice($arr2, count($arr2) - $remainder, $remainder);
                $lastElement = $arr2[count($arr2) - 1];
                $lastElement .= $additionalLast;
                array_splice($arr2, count($arr2) - 1, 1, $lastElement);
                for ($i = count($arr2) - 1;$i >= 0; $i--)
                {
                    array_splice($arr, $c[1], 0, $arr2[$i]);
                }
            }
            else
            {
                for ($i = count($arr2) - 1;$i >= 0; $i--)
                {
                    array_splice($arr, $c[1], 0, $arr2[$i]);
                }
            }
        break;
    }

    $command = strtolower(readline());

    $c = explode(' ', $command);
}

echo implode(" ", $arr).PHP_EOL;