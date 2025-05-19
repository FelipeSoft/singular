<?php

use Src\Domain\Exceptions\PeriodException;

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