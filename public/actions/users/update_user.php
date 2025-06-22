<?php
require_once __DIR__ . "/../../../bootstrap/connection.php";
session_start();

$userId = filter_input(INPUT_POST, "user_id", FILTER_SANITIZE_SPECIAL_CHARS);
$name = filter_input(INPUT_POST, "user_name", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "user_email", FILTER_VALIDATE_EMAIL);
$level = filter_input(INPUT_POST, "user_level", FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, "user_password", FILTER_SANITIZE_SPECIAL_CHARS);
$confirm_password = filter_input(INPUT_POST, "user_confirm_password", FILTER_SANITIZE_SPECIAL_CHARS);

$_SESSION["form_data"] = [
    "id" => $userId,
    "name" => $name,
    "email" => $email,
    "level" => $level
];

if ($name || $email || $level || ($password && $confirm_password)) {
    if ($password !== $confirm_password) {
        $_SESSION["flash"] = [
            "message" => "As senhas não concidem.",
            "variant" => "error"
        ];
        header("Location: ../../coordinator/users_management.php");
        die;
    }

    if ($level > 3 || $level < 1) {
        $_SESSION["flash"] = [
            "message" => "Selecione um nível de acesso entre Aluno, Professor ou Coordenador.",
            "variant" => "error"
        ];
        header("Location: ../../coordinator/users_management.php");
        die;
    }

    $sql = "SELECT id, name, email, password, level FROM users WHERE id = :id;";
    $statement = $connection->prepare(query: $sql);
    $statement->bindValue(":id", $userId, PDO::PARAM_STR);
    $statement->execute();
    $foundUserToUpdate = $statement->fetchAll(PDO::FETCH_ASSOC)[0];

    if ($email && $foundUserToUpdate["email"] !== $email) {
        $sql = "SELECT COUNT(*) as count FROM users WHERE email = :email;";
        $statement = $connection->prepare(query: $sql);
        $statement->bindValue(":email", $email, PDO::PARAM_STR);
        $statement->execute();

        $foundUserByEmail = $statement->fetchAll(PDO::FETCH_ASSOC)[0]["count"];

        if ($foundUserByEmail > 0) {
            $_SESSION["flash"] = [
                "message" => "O e-mail informado já está em uso.",
                "variant" => "error"
            ];
            header("Location: ../../coordinator/users_management.php");
            die;
        }
    }

    $sql = "UPDATE `users` SET `name` = :name, `email` = :email, `password` = :password, `level` = :level WHERE id = :id;";
    $statement = $connection->prepare($sql);
    $statement->bindValue(":name", $name ?? $foundUserToUpdate["name"], PDO::PARAM_STR);
    $statement->bindValue(":email", $email ?? $foundUserToUpdate["email"], PDO::PARAM_STR);

    // $passwordHash = $password ? password_hash($password, PASSWORD_DEFAULT) : $foundUserToUpdate["password"];
    $passwordHash = $password !== "" ? $password : $foundUserToUpdate["password"];
    $statement->bindValue(":password", $passwordHash, PDO::PARAM_STR);

    $statement->bindValue(":level", $level ?? $foundUserToUpdate["level"], PDO::PARAM_STR);
    $statement->bindValue(":id", $userId, PDO::PARAM_STR);
    $statement->execute();

    $_SESSION["flash"] = [
        "message" => "O usuário foi salvo com sucesso!",
        "variant" => "success"
    ];
    $_SESSION["form_data"] = "";
    header("Location: ../../coordinator/users_management.php");
    die;
}

$_SESSION["flash"] = [
    "message" => "Preencha todos os campos corretamente!",
    "variant" => "error"
];
header("Location: ../../coordinator/users_management.php");
