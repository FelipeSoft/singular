<?php
require __DIR__ . '/../vendor/autoload.php';

$modules = [
    require __DIR__ . '/modules/HomeModule.php',
];

$bindings = array_merge(...$modules);
$services = [];

$container = [];

foreach ($bindings as $key => $resolver) {
    $container[$key] = function () use (&$services, $resolver, &$container, $key): mixed {
        if (!isset($services[$key])) {
            $services[$key] = $resolver($container);
        }
        return $services[$key];
    };
}

return $container;
