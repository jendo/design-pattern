<?php

declare(strict_types=1);

namespace App\DesignPattern\Creational\Factory\FactoryMethod;

class Dog implements Animal
{
    public const SPECIES = 'dog';

    public function getSpecies(): string
    {
       return self::SPECIES;
    }
}