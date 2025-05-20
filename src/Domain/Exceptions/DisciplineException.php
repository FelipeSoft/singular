<?php
namespace Src\Domain\Exceptions;

use Exception;

class DisciplineException extends Exception
{
    public static function NotReached(): self
    {
        return new self("Period invalid.");
    }
}
