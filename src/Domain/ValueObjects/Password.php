<?php
namespace Src\Domain\ValueObjects;

use Src\Domain\Exceptions\PasswordException;
class Password
{
    public function __construct(
        private string $password
    ) {
        $this->validate();
    }

    private function validate(): void {
        if (strlen($this->password) < 8) {
            PasswordException::PasswordPolicyViolation();
        }
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
