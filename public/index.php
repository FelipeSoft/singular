<?php
$container = require __DIR__ . '/../bootstrap/container.php';

use Src\Application\UseCases\HomeUseCase;

/** @var HomeUseCase $homeUseCase */
$homeUseCase = $container['homeUseCase']();
echo $homeUseCase->test();