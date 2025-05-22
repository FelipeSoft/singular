<?php

// use Src\Domain\Entities\Student;
use Src\Domain\Repositories\StudentRepository;
use Src\Domain\ValueObjects\Email;

class NewStudentUseCase
{
    public function __construct(
        private readonly StudentRepository $studentRepository
    ) {}

    public function execute(Input $input): void
    {
        $this->studentRepository->findByEmail(new Email("felipe@gmail.com"));
        // $this->studentRepository->save(new Student(
        //     $input->planExpiresAt,
        //     $input->name,
        //     $input->cpf,
        //     $input->classRoomGroupId,
        //     $input->email,
        //     null
        // ));
    }
}

class Input
{
    public function __construct(
        public readonly DateTimeImmutable $planExpiresAt,
        public readonly string $name,
        public readonly string $cpf,
        public readonly string $classRoomGroupId,
        public readonly Email $email,
    ) {}
}
