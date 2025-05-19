<?php
namespace Src\Domain\Exceptions;

use Exception;

class LessonException extends Exception
{
    public static function AlreadyCanceled(): self
    {
        return new self("A lesson is already canceled.");
    }

    public static function AlreadyMinistered(): self
    {
        return new self("A lesson is already canceled.");
    }

    public static function EvaluativeLesson(): self
    {
        return new self("Could not cancel a evaluative lesson.");
    }

    public static function InvalidStatus(string $status): self
    {
        return new self("Invalid status provided: {$status}");
    }

    public static function NotFound(string $lessonId): self
    {
        return new self("Lesson with ID {$lessonId} not found.");
    }
}