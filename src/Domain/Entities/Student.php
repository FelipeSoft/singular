<?php

namespace Src\Domain\Entities;

use DateTimeImmutable;
use Src\Domain\Entities\User;
use Src\Domain\ValueObjects\Email;
use Src\Domain\ValueObjects\Password;

class Student extends User
{
    private bool $active = true;
    public function __construct(
        public readonly DateTimeImmutable $planExpiresAt,
        public readonly string $name,
        public readonly string $cpf,
        public readonly string $classRoomGroupId,
        public readonly Email $email,
        public readonly ?string $id,
    ) {}

    public function isActive(): bool {
        return $this->active;
    }

    public function active(): void {
        $this->active = true;
    }

    public function desactive(): void {
        $this->active = false;
    }
}
