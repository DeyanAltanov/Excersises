<?php

$username = readline();
$pass = strrev($username);

for ($i = 1; $i <= 4; $i++)
{
    $password = readline();

    if ($password == $pass)
    {
        printf('User %s logged in.', $username); break;
    }
    else if  ($i == 4)
    {
        printf('User %s blocked!', $username); break;
    }
    else
    {
        echo 'Incorrect password. Try again.' . PHP_EOL;
    }
}