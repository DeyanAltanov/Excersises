<?php

class Students
{
    private $firstName;
    private $lastName;
    private $age;
    private $hometown;

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }

    public function getHometown()
    {
        return $this->hometown;
    }

    public function setHometown($hometown): void
    {
        $this->hometown = $hometown;
    }
}

$input = readline();
$students = [];

$i = explode(' ', $input);

while ($input != 'end')
{
    $student = new Students();
    $student -> setFirstName($i[0]);
    $student -> setLastName($i[1]);
    $student -> setAge($i[2]);
    $student -> setHometown($i[3]);

    $students[] = $student;

    $input = readline();

    $i = explode(' ', $input);
}

$town = readline();

foreach ($students as $value)
{
    if ($value -> getHometown() == $town)
    {
        echo "{$value -> getFirstName()} {$value -> getLastName()} is {$value -> getAge()} years old.".PHP_EOL;
    }
}