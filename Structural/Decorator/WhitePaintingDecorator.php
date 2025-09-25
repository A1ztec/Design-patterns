<?php

namespace Structural\Decorator;


class WhitePaintingDecorator extends PaintingDecorator
{
    private const COLOR = 'White ';

    public function paint(Car $car): Car
    {
        parent::paint($car);
        $car->setColor(self::COLOR);
        return $car;
    }
}
