<?php

declare(strict_types=1);

namespace App\DesignPattern\Creational\Factory\FactoryMethod;

interface Animal
{
    /**
     * @return string
     */
    public function getSpecies(): string;
}
