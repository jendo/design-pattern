<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

try {
    $container = App\Bootstrap::boot();
} catch (Exception $e) {
    exit($e->getMessage());
}
