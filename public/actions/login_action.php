<?php
session_start();
require_once __DIR__ . '../../../bootstrap/connection.php';

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if ($email && $password) {
    $statement = $connection->prepare("SELECT u.id, u.name, u.email, u.level, u.password FROM users AS u WHERE email = :email;");
    $statement->bindValue(":email", $email, PDO::PARAM_STR);
    $statement->execute();

    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    $correctPassword = $data[0]["password"];
    $isCorrectPassword = password_verify($password, $correctPassword);

    if ($isCorrectPassword) {
        $_SESSION["logged_user"] = [
            "id" => $data[0]["id"],
            "name" => $data[0]["name"],
            "email" => $data[0]["email"],
            "level" => $data[0]["level"]
        ];
        switch ($data[0]["level"]) {
            case 1:
                header("Location: ./../student/index.php");
                die;
            case 2:
                header("Location: ./../teacher/index.php");
                die;
            case 3:
                header("Location: ./../coordinator/index.php");
                die;
            default:
                $_SESSION["flash"] = "Acesso negado. Tente novamente.";
                header("Location: ./../../login.php");
                die;
        }
    }

    $_SESSION["flash"] = "E-mail e/ou senha incorretos";
    header("Location: ../login.php");
    die;
}

$_SESSION["flash"] = "Preencha os campos corretamente";
header("Location: ../login.php");
