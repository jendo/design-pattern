<?php

declare(strict_types=1);

namespace App\DesignPattern\Creational\Factory\FactoryMethod;

class DogShelter extends Shelter
{

    public function create(): Animal
    {
        return new Dog();
    }
}