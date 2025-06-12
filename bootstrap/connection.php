<?php
require_once __DIR__ . "../load_env.php";
loadEnv("../../.env");
$connection = new PDO("mysql:dbname=". getenv("MYSQL_DATABASE")  . ";port=" . getenv("PORT") . ";host=" . getenv("MYSQL_HOST"), getenv("MYSQL_USER"), getenv("MYSQL_PASSWORD"));
