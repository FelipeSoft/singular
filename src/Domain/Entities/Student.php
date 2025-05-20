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
        private readonly DateTimeImmutable $planExpiresAt,
        private readonly string $name,
        private readonly string $cpf,
        private readonly string $classRoomGroupId,
        protected readonly Email $email,
        protected readonly Password $password,
        protected readonly ?string $id,
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
