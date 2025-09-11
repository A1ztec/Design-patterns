<?php


namespace Creational\AbstractFactory;

class BenzCar implements CarInterface
{
    private $price;
    private $tax = 150000;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function getModel(): string
    {
        return 'Benz';
    }

    public function getPrice(): int
    {
        return $this->price + $this->tax;
    }
}
