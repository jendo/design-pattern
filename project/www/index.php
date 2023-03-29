<?php

declare(strict_types=1);

use App\Application;

require __DIR__ . '/../vendor/autoload.php';

try {
    $container = App\Bootstrap::boot();

    /** @var Application $application */
    $application = $container->getByType(Application::class);
    $application->run();
} catch (Exception $e) {
    exit($e->getMessage());
}
