<?php

class Songs
{
    private $typeList;
    private $name;
    private $time;

    public function getTypeList()
    {
        return $this->typeList;
    }

    public function setTypeList($typeList): void
    {
        $this->typeList = $typeList;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function setTime($time): void
    {
        $this->time = $time;
    }
}

$n = intval(readline());


$songs = [];

for ($i = 0; $i < $n; $i++)
{
    $arr = explode('_', readline());

    $song = new Songs();
    $song -> setTypeList($arr[0]);
    $song -> setName($arr[1]);
    $song -> setTime($arr[2]);

    $songs[] = $song;
}

$command = readline();


if ($command == 'all')
{
    for($i = 0; $i < count($songs); $i++)
    {
        echo $songs[$i] -> getName().PHP_EOL;
    }
}
else
{
    foreach ($songs as $value)
    {
        if ($value -> getTypeList() == $command)
            {
                echo $value -> getName().PHP_EOL;
            }
    }
}