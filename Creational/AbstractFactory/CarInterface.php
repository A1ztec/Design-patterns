<?php 


namespace Creational\AbstractFactory;


interface CarInterface
{
    public function getModel(): string;

    public function getPrice(): int;
}