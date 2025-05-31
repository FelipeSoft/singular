<?php
$name = filter_input(INPUT_POST, "user_name", FILTER_SANITIZE_SPECIAL_CHARS);
if ($name) {
    echo $name;
} 