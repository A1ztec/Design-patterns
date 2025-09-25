<?php

namespace Structural\Decorator;

class Car
{
    private string $color = '';

    public function setColor(string $color): void
    {
        $this->color .= $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}
