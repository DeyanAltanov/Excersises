<?php

$country = strtolower(readline());

if ($country == 'usa' || $country == 'england')
    {
        echo 'English';
    }

else if($country == 'spain' || $country == 'mexico' || $country == 'argentina' )
    {
        echo 'Spanish';
    }

else
    {
        echo 'unknown';
    }