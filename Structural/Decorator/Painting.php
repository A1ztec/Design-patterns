<?php

namespace Structural\Decorator;

class painting implements PaintingInterface

{
    
    public function paint(Car $car): Car
    {
        $car->setColor('Red ');
        return $car;
    }
}
