<?php
session_start();
unset($_SESSION["form_data"]);
unset($_SESSION["flash"]);
header("Location: ./../../coordinator/users_management.php");
exit;