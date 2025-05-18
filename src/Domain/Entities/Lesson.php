<?php

namespace Src\Domain\Entities;

use Src\Domain\ValueObjects\LessonStatus;
use Src\Domain\ValueObjects\LessonType;
use Src\Domain\Exceptions\LessonException;

class Lesson
{
    private LessonStatus $status;
    public function __construct(
        private string $disciplineId,
        private string $classroomGroupId,
        private LessonType $lessonType,
        private readonly string $content,
        private readonly ?string $id
    ) {}

    public function cancel(): void
    {
        if ($this->status === LessonStatus::CANCELED) {
            throw LessonException::alreadyCanceled();
        }

        if ($this->status === LessonStatus::MINISTERED) {
            throw LessonException::alreadyMinistered();
        }

        $this->status = LessonStatus::CANCELED;
    }
}
