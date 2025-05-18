<?php
namespace Src\Domain\Repositories;

use Src\Domain\Entities\Lesson;

interface LessonRepository {
    public function save(Lesson $lesson): void;
    public function delete(): void;
}