<?php

declare(strict_types=1);

namespace App\DesignPattern\Creational\Factory\FactoryMethod;

abstract class Shelter
{

    abstract public function create(): Animal;

    public function takeIn(): string
    {
        $animal = $this->create();

        return sprintf('We are taking the %s into shelter.', $animal->getSpecies());
    }

}