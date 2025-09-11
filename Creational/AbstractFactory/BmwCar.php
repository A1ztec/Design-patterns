<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\CarInterface;

class BmwCar implements CarInterface
{
    private $price;
    public function __construct(int $price)
    {
        $this->price = $price;
    }


    public function getModel(): string
    {
        return 'BMW';
    }

    public function getPrice(): int
    {
        return $this->price + 120000;
    }
}
