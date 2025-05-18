<?php

$routes = [
    'GET' => [
        '/' => function () {
            require __DIR__ . '/../src/Presentation/Views/Pages/home.php';
        },

        // '/users/management' => function () {
        //     require __DIR__ . '/src/Views/Users/management.php';
        // },

        // '/users/{id}/edit' => function ($params) {
        //     $id = $params['id'];
        //     require __DIR__ . '/src/Views/Users/edit.php';
        // },
    ],
];
