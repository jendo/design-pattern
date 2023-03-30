<?php

declare(strict_types=1);

namespace App;

use App\DesignPattern\Creational\Factory\FactoryMethod\CatShelter;
use App\DesignPattern\Creational\Factory\FactoryMethod\DogShelter;
use App\DesignPattern\Creational\Factory\FactoryMethod\Shelter;
use App\DesignPattern\Creational\Singleton;
use Tracy\Debugger;

class Application
{
    private DogShelter $dogShelter;
    private CatShelter $catShelter;

    public function __construct(DogShelter $dogShelter, CatShelter $catShelter)
    {
        $this->dogShelter = $dogShelter;
        $this->catShelter = $catShelter;
    }

    public function run(): void
    {
        /**
         * Singleton example
         */
        $s1 = Singleton::getInstance();
        $s2 = Singleton::getInstance();

        Debugger::dump($s1);
        Debugger::dump($s2);
        Debugger::dump($s1 === $s2);

        /**
         * Factory method
         */
        $this->getInfoFromShelter($this->dogShelter);
        $this->getInfoFromShelter($this->catShelter);
    }

    private function getInfoFromShelter(Shelter $shelter): void
    {
        Debugger::dump($shelter->takeIn());
    }
}