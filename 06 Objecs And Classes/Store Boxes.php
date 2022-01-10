<?php

class Box
{
    private $serialNumber;
    private $item;
    private $itemQuantity;
    private $price;
    private $priceForBox;

    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    public function setSerialNumber($serialNumber): void
    {
        $this->serialNumber = $serialNumber;
    }

    public function getItem()
    {
        return $this->item;
    }

    public function setItem($item): void
    {
        $this->item = $item;
    }

    public function getItemQuantity()
    {
        return $this->itemQuantity;
    }

    public function setItemQuantity($itemQuantity): void
    {
        $this->itemQuantity = $itemQuantity;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getPriceForBox()
    {
        return $this->priceForBox;
    }

    public function setPriceForBox($priceForBox): void
    {
        $this->priceForBox = $priceForBox;
    }
}

$input = readline();
$arr = [];
$arr2 = [];

$i = explode(' ', $input);

while ($input != 'end')
{
    $product = new Box();
    $product -> setSerialNumber($i[0]);
    $product -> setItem($i[1]);
    $product -> setItemQuantity($i[2]);
    $product -> setPrice($i[3]);
    $product -> setPriceForBox($i[2] * $i[3]);
    $arr[] = $product;

    $input = readline();

    $i = explode(' ', $input);
}

function sortPrice ($a, $b)
{
    return ($a->getPriceForBox() < $b->getPriceForBox());
}

usort($arr, "sortPrice");

foreach ($arr as $value)
{
    echo "{$value -> getSerialNumber()}".PHP_EOL;
    printf('-- %s - $%.2f: %d', $value -> getItem(), $value -> getPrice(), $value -> getItemQuantity());
    echo PHP_EOL;
    printf('-- $%.2f', $value -> getPriceForBox());
    echo PHP_EOL;
}