<?php
namespace Src\Domain\Exceptions;

use Exception;

class PeriodException extends Exception
{
    public static function InvalidPeriod(): self
    {
        return new self("Period invalid.");
    }
}
