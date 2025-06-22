<?php
session_start();
require_once __DIR__ . "/../../../bootstrap/connection.php";

$userIdToUpdate = $_GET["userId"] ?? "";
if ($userIdToUpdate) {
    $sql = "SELECT id, name, email, level FROM users WHERE id = :id";
    $statement = $connection->prepare($sql);
    $statement->bindValue(':id', $userIdToUpdate, PDO::PARAM_STR);
    $statement->execute();
    $foundUserToUpdate = $statement->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["form_data"] = [
        "id" => $foundUserToUpdate[0]["id"],
        "name" => $foundUserToUpdate[0]["name"],
        "email" => $foundUserToUpdate[0]["email"],
        "level" => $foundUserToUpdate[0]["level"],
    ];
}

header("Location: ./../../coordinator/users_management.php");
