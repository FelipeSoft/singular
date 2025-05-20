<?php
namespace Src\Domain\Entities;

use Src\Domain\Exceptions\DisciplineException;
use Src\Domain\ValueObjects\Period;

class Discipline {
    private bool $available = true;
    public function __construct(
        public readonly Period $period,
        public readonly string $name,
        public readonly int $disciplineTotalLoad,
        public readonly string $courseId,
        public readonly ?string $id
    ) {}

    public function finish() {
        if ($this->period->end === null) {
            throw DisciplineException::NotReached();
        }
        $this->available = false;
    }

    public function getAvailability(): bool {
        return $this->available;
    }
}