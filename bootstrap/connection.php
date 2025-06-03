<?php

$connection = new PDO("mysql:dbname=". getenv("MYSQL_DATABASE")  .";host=" . getenv("MYSQL_HOST"), getenv("MYSQL_USER"), getenv("MYSQL_PASSWORD"));
