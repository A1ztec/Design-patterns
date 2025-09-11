<?php


namespace Creational\Builder;

use Creational\Builder\Models\Car;


class CarProducer
{
    private $builder;


    public function __construct(CarBuilderInterface $builder)
    {
        $this->builder = $builder;
    }


    public function construct(): Car
    {
        $this->builder->createCar();
        $this->builder->addDoors();
        $this->builder->addBody();
        $this->builder->addEngine();

        return $this->builder->getCar();
    }
}
