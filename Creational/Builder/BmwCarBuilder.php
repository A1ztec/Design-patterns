<?php

namespace Creational\Builder;



class BmwCarBuilder implements CarBuilderInterface
{

    private $car;



    public function createCar(): void
    {
        $this->car = new Models\BmwCar();
    }

    public function addDoors(): void
    {
        $this->car->setPart('doors', '4 doors');
    }

    public function addBody(): void
    {
        $this->car->setPart('body', 'Sedan body');
    }

    public function addEngine(): void
    {
        $this->car->setPart('engine', 'V6 engine');
    }

    public function getCar(): Models\BmwCar
    {
        return $this->car;
    }
}
