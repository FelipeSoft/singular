<?php

namespace Src\Domain\Entities;

class Course
{
    private bool $available;
    public function __construct(
        public readonly ?string $id
    ) {}
}
