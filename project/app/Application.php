<?php

declare(strict_types=1);

namespace App;

use App\DesignPattern\Creational\Singleton;
use Tracy\Debugger;

class Application
{

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
    }
}