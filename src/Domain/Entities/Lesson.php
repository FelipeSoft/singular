<?php

namespace Src\Domain\Entities;

use Src\Domain\ValueObjects\LessonStatus;
use Src\Domain\ValueObjects\LessonType;
use Src\Domain\Exceptions\LessonException;

class Lesson
{
    private LessonStatus $status;
    public function __construct(
        public readonly string $disciplineId,
        public readonly string $classroomGroupId,
        public readonly LessonType $lessonType,
        public readonly string $content,
        public readonly ?string $id
    ) {}

    public function minister(): void
    {
        if ($this->status === LessonStatus::MINISTERED) {
            throw LessonException::alreadyMinistered();
        }

        if ($this->status === LessonStatus::CANCELED) {
            throw LessonException::alreadyCanceled();
        }

        $this->status = LessonStatus::MINISTERED;
    }

    public function cancel(): void
    {
        if ($this->lessonType === LessonType::EVALUATIVE) {
            throw LessonException::evaluativeLesson();
        }

        if ($this->status === LessonStatus::CANCELED) {
            throw LessonException::alreadyCanceled();
        }

        if ($this->status === LessonStatus::MINISTERED) {
            throw LessonException::alreadyMinistered();
        }

        $this->status = LessonStatus::CANCELED;
    }
}
