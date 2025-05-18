<?php

use Src\Application\UseCases\HomeUseCase;
use Src\Infrastructure\Persistence\MySQL\HomeRepositoryMySQL;

return [
    'homeRepository' => fn(): HomeRepositoryMySQL => new HomeRepositoryMySQL(),
    'homeUseCase' => fn($container): HomeUseCase => new HomeUseCase(homeRepository: $container['homeRepository']()),
];
