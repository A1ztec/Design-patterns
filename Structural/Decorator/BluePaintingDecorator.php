<?php

namespace Structural\Decorator;

class BluePaintingDecorator extends PaintingDecorator
{
    private const COLOR = 'Blue ';

    public function paint(Car $car): Car
    {
        $car->setColor(self::COLOR);
        parent::paint($car);
        return $car;
    }
}
