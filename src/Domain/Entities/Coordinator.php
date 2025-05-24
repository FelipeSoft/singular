<?php

namespace Src\Domain\Entities;

use Src\Domain\Entities\User;
use Src\Domain\ValueObjects\Email;
use Src\Domain\ValueObjects\Password;

class Coordinator extends User
{
    public function __construct(
        protected readonly string $name,
        protected readonly string $cpf,
        protected readonly Email $email,
        protected readonly Password $password,
        protected readonly ?string $id,
    ) {}
}
