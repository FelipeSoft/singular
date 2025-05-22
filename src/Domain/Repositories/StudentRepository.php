<?php
namespace Src\Domain\Repositories;
use Src\Domain\Entities\Student;
use Src\Domain\ValueObjects\Email;

interface StudentRepository {
    public function save(Student $student): void;
    public function delete(string $studentId): void;
    public function paginate(array $filters, int $limit = 10, int $offset = 0): array;
    public function findByEmail(Email $email): void;
}