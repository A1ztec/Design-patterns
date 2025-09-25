<?php

namespace Structural\Decorator;

class BluePaintingDecorator extends PaintingDecorator
{
    private const COLOR = 'Blue ';

    public function PAINT(Car $car): Car
    {
        parent::paint($car);
        $car->setColor(self::COLOR);
        return $car;
    }
}
