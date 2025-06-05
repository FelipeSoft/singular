<?php
session_start();
require_once '../bootstrap/connection.php';

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if ($email && $password) {
    $statement = $connection->prepare("SELECT u.name, u.password FROM users AS p WHERE email = :email;");
    $statement->bindValue(":email", $email, PDO::PARAM_STR);
    $statement->execute();

    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    $correctPassword = $data[0]["password"];

    if ($correctPassword === $password) {
        header("Location: ../index.php");
        exit;
    }

    $_SESSION["flash"] = "E-mail e/ou senha incorretos";
    header("Location: ../login.php");
    exit;
}

$_SESSION["flash"] = "Preencha os campos corretamente";
header("Location: ../login.php");
