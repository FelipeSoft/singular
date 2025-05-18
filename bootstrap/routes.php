<?php

$routes = [
    'GET' => [
        '/home' => function () {
            require __DIR__ . '/../src/Presentation/Views/Pages/home.php';
        },

        '/class/planning' => function () {
            require __DIR__ . '/../src/Presentation/Views/Pages/Class/planning.php';
        },

        '/class/execution' => function () {
            require __DIR__ . '/../src/Presentation/Views/Pages/Class/execution.php';
        },

        '/class/academic-structure' => function () {
            require __DIR__ . '/../src/Presentation/Views/Pages/Class/academic-structure.php';
        },

        '/attendance/take' => function () {
            require __DIR__ . '/../src/Presentation/Views/Pages/Attendance/take.php';
        },

        '/attendance/tracking' => function () {
            require __DIR__ . '/../src/Presentation/Views/Pages/Attendance/tracking.php';
        },

        '/enrollment/records' => function () {
            require __DIR__ . '/../src/Presentation/Views/Pages/Enrollment/records.php';
        },

        '/enrollment/enroll-student' => function () {
            require __DIR__ . '/../src/Presentation/Views/Pages/Enrollment/enroll-student.php';
        },

        '/users/management' => function () {
            require __DIR__ . '/../src/Presentation/Views/Pages/Users/management.php';
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
