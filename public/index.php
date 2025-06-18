<?php
session_start();
if (empty($_SESSION["logged_user"])) {
    header("Location: ./login.php");
}