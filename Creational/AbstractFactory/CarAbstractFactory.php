<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BmwCar;


class CarAbstractFactory
{

    private $price;



    public function __construct(int $price)
    {
        $this->price = $price;
    }


    public function createBenzCar(): BenzCar
    {
        return new BenzCar($this->price);
    }

    public function createBmwCar(): BmwCar
    {
        return new BmwCar($this->price);
    }
}
