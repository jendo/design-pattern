<?php

declare(strict_types=1);

namespace App\DesignPattern\Creational\Factory\FactoryMethod;

class Cat implements Animal
{
    public const SPECIES = 'cat';

    public function getSpecies(): string
    {
        return self::SPECIES;
    }
}