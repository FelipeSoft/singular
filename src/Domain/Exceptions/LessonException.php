<?php
namespace Src\Domain\Exceptions;

use Exception;

class LessonException extends Exception
{
    public static function alreadyCanceled(): self
    {
        return new self("A lesson is already canceled.");
    }

    public static function alreadyMinistered(): self
    {
        return new self("A lesson is already canceled.");
    }

    public static function invalidStatus(string $status): self
    {
        return new self("Invalid status provided: {$status}");
    }

    public static function notFound(string $lessonId): self
    {
        return new self("Lesson with ID {$lessonId} not found.");
    }
}