<?php
namespace Src\Domain\Exceptions;

use Exception;

class EmailException extends Exception
{
    public static function InvalidEmail(): self
    {
        return new self("The email is invalid.");
    }
}
