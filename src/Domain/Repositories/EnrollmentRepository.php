<?php
namespace Src\Domain\Repositories;
use Src\Domain\Entities\Enrollment;

interface EnrollmentRepository {
    public function save(Enrollment $enrollment): void;
    public function delete(string $enrollmentId): void;
    public function paginate(array $filters, int $limit = 10, int $offset = 0): array;
}