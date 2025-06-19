<?php
require_once __DIR__ . "/../../../bootstrap/connection.php";
session_start();

$userId = $_GET["userId"];
if (!$userId) {
    header("Location: ./../../coordinator/users_management.php");
    die;
}

try {
    $sql = "DELETE FROM `users` WHERE id = :id;";
    $statement = $connection->prepare($sql);
    $statement->bindValue(":id", $userId, PDO::PARAM_STR);
    $statement->execute();

    $_SESSION["flash"] = [
        "message" => "O usuário foi deletado com sucesso!",
        "variant" => "success"
    ];
} catch (PDOException $e) {
    if ($e->getCode() == "23000") {
        $_SESSION["flash"] = [
            "message" => "Este usuário está vinculado a outros registros (ex: alunos) e não pode ser excluído.",
            "variant" => "error"
        ];
    } else {
        $_SESSION["flash"] = [
            "message" => "Erro ao excluir usuário: " . $e->getMessage(),
            "variant" => "error"
        ];
    }
}

header("Location: ./../../coordinator/users_management.php");
die;
