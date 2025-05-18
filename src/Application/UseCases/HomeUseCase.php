<?php
class HomeUseCase {
    public function __construct (
        private readonly HomeRepository $homeRepository
    ) {}

    public function test() {
        return 1;
    }
}