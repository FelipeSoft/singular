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
    "name" => $name,
    "email" => $email,
    "level" => $level
];

if ($name && $email && $level && $password && $confirm_password) {
    $sql = "SELECT COUNT(*) AS count FROM users WHERE email = :email;";
    $statement = $connection->prepare(query: $sql);
    $statement->bindValue(":email", $email, PDO::PARAM_STR);
    $statement->execute();

    $rowsCount = $statement->fetchAll(PDO::FETCH_ASSOC)[0]["count"];

    if ($rowsCount > 0) {
        $_SESSION["flash"] = [
            "message" => "O e-mail informado já está em uso.",
            "variant" => "error"
        ];
        header("Location: ../../coordinator/users_management.php");
        die;
    }

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

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `users` (`name`, `email`, `password`, `level`, `status`) VALUES (:name, :email, :password, :level, TRUE);";
    $statement = $connection->prepare($sql);
    $statement->bindValue(":name", $name, PDO::PARAM_STR);
    $statement->bindValue(":email", $email, PDO::PARAM_STR);
    $statement->bindValue(":password", $passwordHash, PDO::PARAM_STR);
    $statement->bindValue(":level", $level, PDO::PARAM_STR);
    $statement->execute();

    $_SESSION["flash"] = [
        "message" => "O usuário foi salvo com sucesso!",
        "variant" => "success"
    ];
    header("Location: ../../coordinator/users_management.php");
    die;
}

$_SESSION["flash"] = [
    "message" => "Preencha todos os campos corretamente!",
    "variant" => "error"
];
header("Location: ../../coordinator/users_management.php");
die;