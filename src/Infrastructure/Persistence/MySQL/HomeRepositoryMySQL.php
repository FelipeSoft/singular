<?php
namespace Src\Infrastructure\Persistence\MySQL;

use Src\Domain\Repositories\HomeRepository;
class HomeRepositoryMySQL implements HomeRepository {
    public function create(): void {
        echo "Hello from RepositoryMySQL!";
    }
}