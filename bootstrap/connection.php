<?php
require_once __DIR__ . "../load_env.php";
loadEnv(__DIR__ . "../../.env");
$connection = new PDO("mysql:dbname=". getenv("MYSQL_DATABASE")  . ";port=" . getenv("MYSQL_PORT") . ";host=" . getenv("MYSQL_HOST"), getenv("MYSQL_USER"), getenv("MYSQL_PASSWORD"));
