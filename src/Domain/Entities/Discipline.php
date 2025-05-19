<?php
namespace Src\Domain\Entities;
class Discipline {
    private bool $available;
    public function __construct(
        public readonly string $name,
        public readonly int $disciplineTotalLoad,
        public readonly string $courseId,
        public readonly ?string $id
    ) {}
}