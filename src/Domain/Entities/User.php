<?php
namespace Src\Domain\Entities;

use Src\Domain\ValueObjects\Email;
use Src\Domain\ValueObjects\Password;
abstract class User {
    protected readonly Email $email;
    protected readonly Password $password;
    protected readonly ?string $id;
}