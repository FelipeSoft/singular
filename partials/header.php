<?php
session_start();

if (!isset($_SESSION["logged_user"])) {
    header("Location: ./login.php");
    exit;
}

$loggedLevel = $_SESSION["logged_user"]["level"];
switch ($loggedLevel) {
    case 1: 
        require_once __DIR__ . "../header/student_header.php";
        break;
    case 2:
        require_once __DIR__ . "../header/teacher_header.php";
        break;
    case 3:
        require_once __DIR__ . "../header/coordinator_header.php";
        break;
}
