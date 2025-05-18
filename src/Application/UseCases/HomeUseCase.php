<?php
namespace Src\Application\UseCases;

use Src\Domain\Repositories\HomeRepository;

class HomeUseCase {
    public function __construct (
        private readonly HomeRepository $homeRepository
    ) {}

    public function test(): int {
        $this->homeRepository->create();
        return 1;
    }
}