<?php
namespace Src\Domain\ValueObjects;

use Src\Domain\Exceptions\PeriodException;
use DateTimeImmutable;

class Period {
    public function __construct(
        public readonly DateTimeImmutable $start,
        public readonly ?DateTimeImmutable $end,
    ) {
        $this->validate();
    }

    private function validate() {
        if ($this->end < $this->start) {
            throw PeriodException::InvalidPeriod();
        }
    }
}