<?php

namespace Structural\Decorator;


class WhitePaintingDecorator extends PaintingDecorator
{
    private const COLOR = 'White ';

    public function paint(Car $car): Car
    {
        $car->setColor(self::COLOR);
        parent::paint($car);
        return $car;
    }
}
