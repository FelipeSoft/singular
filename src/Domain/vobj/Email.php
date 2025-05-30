<?php
namespace Src\Domain\ValueObjects;

use Src\Domain\Exceptions\EmailException;
class Email
{
    public function __construct(
        private string $email
    ) {
        $this->validate();
    }

    private function validate(): void {
        if (strlen($this->email) < 8) {
            EmailException::InvalidEmail();
        }
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
