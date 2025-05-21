<?php
namespace Src\Domain\Exceptions;

use Exception;

class PasswordException extends Exception
{
    public static function PasswordPolicyViolation(): self
    {
        return new self("The password does not follow the security policy.");
    }
}
