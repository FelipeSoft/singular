<?php
namespace Src\Domain\Exceptions;

use Exception;

class DisciplineException extends Exception
{
    public static function NotReach(): self
    {
        return new self("Period invalid.");
    }
}
