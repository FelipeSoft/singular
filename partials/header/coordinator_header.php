<?php
require_once __DIR__ . "/../../bootstrap/load_env.php";
loadEnv(__DIR__ . "/../../.env");
$BASE_URL = getenv(name: "BASE_URL");
?>
<!DOCTYPE html>
<html lang="pt-br" class="w-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?? "Singular" ?>
    </title>

    <!-- important links/scripts -->
    <link rel="stylesheet" href="<?=$BASE_URL?>/assets/css/output.css" />
    <link rel="stylesheet" href="<?=$BASE_URL?>/assets/css/flatpickr.css" />
</head>

<body class="w-screen h-full overflow-x-hidden">
    <div class="flex h-full relative">
        <nav class="fixed top-0 left-0 h-screen w-[300px] border-r border-gray-300 bg-gray-50 z-50">
            <a href="<?=$BASE_URL?>/index.php" class="border-b border-gray-300 h-[70px] flex items-center">
                <img class=" ml-3 object-contain w-[150px]" src="<?=$BASE_URL?>/images/sanquim.png" alt="Singular">
            </a>
            <ul class="p-4 relative flex flex-col max-h-screen overflow-x-auto w-full">
                <li class="text-[#747171] font-semibold">
                    <a href="<?=$BASE_URL?>/index.php"
                        class="flex items-center gap-2 text-sm <?= $tab === "home" ? "border border-gray-300 bg-white rounded-sm p-2 pointer-events-none" : "" ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <g fill="none" stroke="#747171" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <path d="m3 9l9-7l9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Z" />
                                <path d="M9 22V12h6v10" />
                            </g>
                        </svg>
                        Página Inicial
                    </a>
                </li>
                <h2 class="mt-6 font-medium text-sm mb-3 text-[#747171]">Menu</h2>
                <li class="text-[#747171] font-semibold flex items-center gap-2 w-full mb-5">
                    <div class="accordion divide-neutral/20 divide-y w-full">
                        <div class="accordion-item <?= $tab === "class" ? "active" : "" ?> w-full" id="class-basic">
                            <button class="p-0 w-full accordion-toggle flex flex-col justify-between gap-x-2 text-start"
                                aria-controls="class-basic-collapse" aria-expanded="true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2 text-gray-500 text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24">
                                            <path fill="none" stroke="#747171" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M12 7v14m4-9h2m-2-4h2M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4a4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3a3 3 0 0 0-3-3zm3-6h2M6 8h2" />
                                        </svg>
                                        Aulas
                                    </div>
                                    <span>
                                        <svg class="accordion-item-active:hidden block"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 32 32">
                                            <path fill="none" stroke="#747171" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="3" d="M30 12L16 24L2 12" />
                                        </svg>
                                        <svg class="accordion-item-active:block hidden"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 32 32">
                                            <path fill="none" stroke="#747171" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="3" d="M30 20L16 8L2 20" />
                                        </svg>
                                    </span>
                                </div>
                                <div id="class-basic-collapse"
                                    class="accordion-content <?= $tab !== "class" ? "hidden" : "" ?> w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="class-basic" role="region">
                                    <div class="pb-1 mt-1 w-full">
                                        <p class="text-base-content/80 font-normal">
                                        <ul class="flex flex-col gap-3 mt-3 w-full">
                                            <li><a href="<?=$BASE_URL?>/coordinator/lesson_academic_structure.php"
                                                    class="text-sm text-[#747171] w-full flex hover:text-[#37908e] transition-all <?= $tab === "class" && $subtab === "academic-structure" ? "border border-gray-300 bg-white rounded-sm p-2 pointer-events-none" : "" ?>">Estrutura
                                                    Acadêmica</a></li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </li>
                <li class="text-[#747171] font-semibold flex items-center gap-2 w-full mb-5">
                    <div class="accordion divide-neutral/20 divide-y w-full">
                        <div class="accordion-item <?= $tab === "attendance" ? "active" : "" ?> w-full"
                            id="attendance-basic">
                            <button class="p-0 w-full accordion-toggle flex flex-col justify-between gap-x-2 text-start"
                                aria-controls="attendance-basic-collapse" aria-expanded="true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2 text-gray-500 text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24">
                                            <path fill="none" stroke="#747171" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2zm6 10.037l6-6m-6 .031v.014m6 6v.016" />
                                        </svg>
                                        Frequência
                                    </div>
                                    <span>
                                        <svg class="accordion-item-active:hidden block"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 32 32">
                                            <path fill="none" stroke="#747171" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="3" d="M30 12L16 24L2 12" />
                                        </svg>
                                        <svg class="accordion-item-active:block hidden"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 32 32">
                                            <path fill="none" stroke="#747171" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="3" d="M30 20L16 8L2 20" />
                                        </svg>
                                    </span>
                                </div>
                                <div id="attendance-basic-collapse"
                                    class="accordion-content <?= $tab !== "attendance" ? "hidden" : "" ?> w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="attendance-basic" role="region">
                                    <div class="pb-1 mt-1 w-full">
                                        <p class="text-base-content/80 font-normal">
                                        <ul class="flex flex-col gap-3 mt-3 w-full">
                                            <li><a href="/coordinator/attendance_justify_abscense.php"
                                                    class="text-sm text-[#747171] w-full flex hover:text-[#37908e] transition-all <?= $tab === "attendance" && $subtab === "attendance-justify-abscense" ? "border border-gray-300 bg-white rounded-sm p-2 pointer-events-none" : "" ?>">Justificativa de Falta</a>
                                            </li>
                                            
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </li>
                <li class="text-[#747171] font-semibold flex items-center gap-2 w-full mb-5">
                    <div class="accordion divide-neutral/20 divide-y w-full">
                        <div class="accordion-item <?= $tab === "enrollment" ? "active" : "" ?> w-full"
                            id="enrollment-basic">
                            <button class="p-0 w-full accordion-toggle flex flex-col justify-between gap-x-2 text-start"
                                aria-controls="enrollment-basic-collapse" aria-expanded="true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2 text-gray-500 text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                            viewBox="0 0 256 256">
                                            <path fill="#747171"
                                                d="m229.66 58.34l-32-32a8 8 0 0 0-11.32 0l-96 96A8 8 0 0 0 88 128v32a8 8 0 0 0 8 8h32a8 8 0 0 0 5.66-2.34l96-96a8 8 0 0 0 0-11.32M124.69 152H104v-20.69l64-64L188.69 88ZM200 76.69L179.31 56L192 43.31L212.69 64ZM224 128v80a16 16 0 0 1-16 16H48a16 16 0 0 1-16-16V48a16 16 0 0 1 16-16h80a8 8 0 0 1 0 16H48v160h160v-80a8 8 0 0 1 16 0" />
                                        </svg>
                                        Matrículas
                                    </div>
                                    <span>
                                        <svg class="accordion-item-active:hidden block"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 32 32">
                                            <path fill="none" stroke="#747171" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="3" d="M30 12L16 24L2 12" />
                                        </svg>
                                        <svg class="accordion-item-active:block hidden"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 32 32">
                                            <path fill="none" stroke="#747171" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="3" d="M30 20L16 8L2 20" />
                                        </svg>
                                    </span>
                                </div>
                                <div id="enrollment-basic-collapse"
                                    class="accordion-content <?= $tab !== "enrollment" ? "hidden" : "" ?> w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="enrollment-basic" role="region">
                                    <div class="pb-1 mt-1 w-full">
                                        <p class="text-base-content/80 font-normal">
                                        <ul class="flex flex-col gap-3 mt-3 w-full">
                                            <li><a href="<?=$BASE_URL?>/coordinator/enrollment_records.php"
                                                    class="text-sm text-[#747171] w-full flex hover:text-[#37908e] transition-all <?= $tab === "enrollment" && $subtab === "enrollment-records" ? "border border-gray-300 bg-white rounded-sm p-2 pointer-events-none" : "" ?>">Registro
                                                    de Matrículas</a>
                                            </li>
                                            <li><a href="<?=$BASE_URL?>/coordinator/enrollment_enroll_student.php"
                                                    class="text-sm text-[#747171] w-full flex hover:text-[#37908e] transition-all <?= $tab === "enrollment" && $subtab === "enroll-student" ? "border border-gray-300 bg-white rounded-sm p-2 pointer-events-none" : "" ?>">Matricular
                                                    Aluno</a></li>
                                            <li><a href="<?=$BASE_URL?>/coordinator/enrollment_lock_enrollment.php"
                                                    class="text-sm text-[#747171] w-full flex hover:text-[#37908e] transition-all <?= $tab === "enrollment" && $subtab === "lock-enrollment" ? "border border-gray-300 bg-white rounded-sm p-2 pointer-events-none" : "" ?>">Trancar
                                                    Matrícula</a></li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </li>
                <li class="text-[#747171] font-semibold flex items-center gap-2 w-full mb-5">
                    <div class="accordion divide-neutral/20 divide-y w-full">
                        <div class="accordion-item <?= $tab === "profiles" ? "active" : "" ?> w-full" id="users-basic">
                            <button class="p-0 w-full accordion-toggle flex flex-col justify-between gap-x-2 text-start"
                                aria-controls="users-basic-collapse" aria-expanded="true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2 text-gray-500 text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24">
                                            <g fill="none" stroke="#747171" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2">
                                                <rect width="18" height="18" x="3" y="3" rx="2" />
                                                <circle cx="12" cy="10" r="3" />
                                                <path d="M7 21v-2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2" />
                                            </g>
                                        </svg>
                                        Perfis
                                    </div>
                                    <span>
                                        <svg class="accordion-item-active:hidden block"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 32 32">
                                            <path fill="none" stroke="#747171" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="3" d="M30 12L16 24L2 12" />
                                        </svg>
                                        <svg class="accordion-item-active:block hidden"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 32 32">
                                            <path fill="none" stroke="#747171" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="3" d="M30 20L16 8L2 20" />
                                        </svg>
                                    </span>
                                </div>
                                <div id="users-basic-collapse"
                                    class="accordion-content w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="users-basic" role="region">
                                    <div class="pb-1 mt-1 w-full">
                                        <p class="text-base-content/80 font-normal">
                                        <ul class="flex flex-col gap-3 mt-3 w-full">
                                            <li><a href="<?=$BASE_URL?>/coordinator/users_management.php"
                                                    class="text-sm text-[#747171] w-full flex hover:text-[#37908e] transition-all <?= $tab === "users" && $subtab === "users-management" ? "border border-gray-300 bg-white rounded-sm p-2 pointer-events-none" : "" ?>">Gestão
                                                    de Usuários</a>
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </li>
                <div class="mt-auto">
                    <li class="text-[#747171] font-semibold mb-5">
                        <a href="<?=$BASE_URL?>/home" class="flex items-center gap-2 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="#747171"
                                    d="m12 1l9.5 5.5v11L12 23l-9.5-5.5v-11zm0 2.311L4.5 7.653v8.694l7.5 4.342l7.5-4.342V7.653zM12 16a4 4 0 1 1 0-8a4 4 0 0 1 0 8m0-2a2 2 0 1 0 0-4a2 2 0 0 0 0 4" />
                            </svg>
                            Configurações
                        </a>
                    </li>
                    <li class="text-[#F73C39] font-semibold">
                        <a href="<?=$BASE_URL?>/actions/logout_action.php" class="flex items-center gap-2 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 24">
                                <g fill="none" stroke="#F73C39" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path
                                        d="M14 8V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-2" />
                                    <path d="M9 12h12l-3-3m0 6l3-3" />
                                </g>
                            </svg>
                            Sair
                        </a>
                    </li>
                </div>
            </ul>
        </nav>
        <div class="w-full ml-[300px]">
            <header class="border-b flex justify-end items-center px-4 border-gray-300 h-[70px] bg-gray-50">
                <div class="flex items-center gap-2 mr-7">
                    <div class="flex flex-col items-end text-gray-500">
                        <h2 class="font-semibold">Coordenador SANQUIM</h2>
                        <p class="text-sm -mt-1">Coordenador</p>
                    </div>
                    <svg width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M31.5 35.8333C31.5 32.9823 30.3938 30.248 28.4246 28.2319C26.4555 26.2159 23.7848 25.0833 21 25.0833C18.2152 25.0833 15.5445 26.2159 13.5754 28.2319C11.6062 30.248 10.5 32.9823 10.5 35.8333"
                            stroke="#37908E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M21 25.0833C24.866 25.0833 28 21.8747 28 17.9167C28 13.9586 24.866 10.75 21 10.75C17.134 10.75 14 13.9586 14 17.9167C14 21.8747 17.134 25.0833 21 25.0833Z"
                            stroke="#37908E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M21 39.4167C30.665 39.4167 38.5 31.3951 38.5 21.5C38.5 11.6049 30.665 3.58333 21 3.58333C11.335 3.58333 3.5 11.6049 3.5 21.5C3.5 31.3951 11.335 39.4167 21 39.4167Z"
                            stroke="#37908E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </header>
            <main class="bg-white p-10 w-full h-full">