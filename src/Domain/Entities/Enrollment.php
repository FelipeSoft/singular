<?php
namespace Src\Domain\Entities;

class Enrollment
{
    public function __construct(
        private string $enrollmentId,      // UUID ou autoincrement
        private string $studentId,         // ID do aluno já cadastrado
        private string $courseId,          // ID do curso
        private string $classGroupId,      // ID da turma (turma = class group)
        private array $subjectsIds,        // IDs das disciplinas (matrícula múltipla)
        private \DateTime $enrollmentDate  // Data da matrícula
    ) {}

    public function getStudentId(): string
    {
        return $this->studentId;
    }

    public function getCourseId(): string
    {
        return $this->courseId;
    }

    public function getClassGroupId(): string
    {
        return $this->classGroupId;
    }

    public function getSubjectsIds(): array
    {
        return $this->subjectsIds;
    }

    public function getEnrollmentDate(): \DateTime
    {
        return $this->enrollmentDate;
    }

    // Você pode adicionar métodos de negócio aqui
    public function isValid(): bool
    {
        return !empty($this->studentId) && !empty($this->subjectsIds);
    }
}
