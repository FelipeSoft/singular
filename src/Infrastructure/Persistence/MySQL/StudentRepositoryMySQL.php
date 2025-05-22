<?php

namespace Src\Infrastructure\Persistence\MySQL;

use PDO;
use PDOException;
use Src\Domain\Entities\Student;
use Src\Domain\Repositories\StudentRepository;
use Src\Domain\ValueObjects\Email;

class StudentRepositoryMySQL implements StudentRepository
{
    public function __construct(
        private readonly PDO $connection
    ) {}
    public function findByEmail(Email $email): void
    {
        $sql = "SELECT name, email, plan_expires_at, cpf, classroom_group_id, id WHERE email = :email;";
        try {
            $this->connection->beginTransaction();
            $statement = $this->connection->prepare($sql);
            $statement->bindValue(":email", $email, PDO::PARAM_STR);
            $statement->execute();
            print_r($statement->fetchAll(PDO::FETCH_ASSOC));
            $this->connection->commit();
        } catch (PDOException $e) {
            $this->connection->rollBack();
            throw $e;
        }
    }
    public function save(Student $student): void
    {
        $inCreationMode = $student->id === null;
        $inEditMode = $student->id !== null;

        if ($inCreationMode) {
            $sql = "INSERT INTO (name, email, cpf, classroom_group_id, plan_expires_at) VALUES (:name, :email, :cpf, :classroom_group_id, :plan_expires_at);";
            try {
                $this->connection->beginTransaction();

                $statement = $this->connection->prepare($sql);
                $statement->bindValue(":name", $student->name, PDO::PARAM_STR);
                $statement->bindValue(":email", $student->email, PDO::PARAM_STR);
                $statement->bindValue(":cpf", $student->cpf, PDO::PARAM_STR);
                $statement->bindValue(":classroom_group_id", $student->classRoomGroupId, PDO::PARAM_STR);
                $statement->bindValue(":plan_expires_at", $student->planExpiresAt, PDO::PARAM_STR);
                $statement->execute();

                $this->connection->commit();
            } catch (PDOException $e) {
                $this->connection->rollBack();
                throw $e;
            }
        }

        if ($inEditMode) {
            $sql = "UPDATE users SET name = :name, email = :email, cpf = :cpf, classroom_group_id = :classroom_group_id, plan_expires_at = :plan_expires_at WHERE id = :id;";
            try {
                $this->connection->beginTransaction();

                $statement = $this->connection->prepare($sql);
                $statement->bindValue(":name", $student->name, PDO::PARAM_STR);
                $statement->bindValue(":email", $student->email, PDO::PARAM_STR);
                $statement->bindValue(":cpf", $student->cpf, PDO::PARAM_STR);
                $statement->bindValue(":classroom_group_id", $student->classRoomGroupId, PDO::PARAM_STR);
                $statement->bindValue(":plan_expires_at", $student->planExpiresAt, PDO::PARAM_STR);
                $statement->bindValue(":id", $student->id, PDO::PARAM_STR);
                $statement->execute();

                $this->connection->commit();
            } catch (PDOException $e) {
                $this->connection->rollBack();
                throw $e;
            }
        }
    }

    /**
     * @param array $filters Possible filters: ['name' => 'Ana', 'cpf' => '123...', 'email' => 'ana@']
     * @param int $limit Items per page
     * @param int $offset Offset (e.g.: page * limit)
     * @return array
     */
    public function paginate(array $filters, int $limit = 10, int $offset = 0): array
    {
        $sql = "SELECT * FROM users WHERE 1=1";
        $params = [];

        if (!empty($filters['name'])) {
            $sql .= " AND name LIKE :name";
            $params[':name'] = '%' . $filters['name'] . '%';
        }

        if (!empty($filters['cpf'])) {
            $sql .= " AND cpf = :cpf";
            $params[':cpf'] = $filters['cpf'];
        }

        if (!empty($filters['email'])) {
            $sql .= " AND email LIKE :email";
            $params[':email'] = '%' . $filters['email'] . '%';
        }

        $sql .= " ORDER BY name ASC LIMIT :limit OFFSET :offset";

        try {
            $this->connection->beginTransaction();
            $statement = $this->connection->prepare($sql);

            foreach ($params as $key => $value) {
                $statement->bindValue($key, $value);
            }

            $statement->bindValue(':limit', $limit, PDO::PARAM_INT);
            $statement->bindValue(':offset', $offset, PDO::PARAM_INT);

            $statement->execute();
            $this->connection->commit();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $this->connection->rollBack();
            throw $e;
        }
    }
    public function delete(string $studentId): void
    {
        $sql = "DELETE FROM users WHERE id = :id";
        try {
            $this->connection->beginTransaction();

            $statement = $this->connection->prepare(query: $sql);
            $statement->bindValue(":id", $studentId, PDO::PARAM_STR);
            $statement->execute();

            $this->connection->commit();
        } catch (PDOException $e) {
            $this->connection->rollBack();
            throw $e;
        }
    }
}
