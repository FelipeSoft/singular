<?php
$title = "Singular | Página Inicial";
$tab = "home";
?>
<?php require __DIR__ . "/../partials/header.php" ?>

<section class="bg-white">
    <h1 class="font-semibold text-black text-xl">Página Inicial</h1>
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-4 mt-2">
        <article class="flex items-center rounded-md border p-4">
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

            <div class="ml-2">
                <h1 class="font-semibold text-black text-xl">789</h1>
                <span class="text-gray-500">Total de Alunos Ativos</span>
            </div>
        </article>
        <article class="flex items-center rounded-md border p-4">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.8333 3.63667C18.925 3.23187 21.0749 3.23187 23.1666 3.63667" stroke="#37908E"
                    stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M23.1666 36.3633C21.0749 36.7681 18.925 36.7681 16.8333 36.3633" stroke="#37908E"
                    stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M29.3483 6.20166C31.1174 7.40037 32.6395 8.92811 33.8317 10.7017" stroke="#37908E"
                    stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M3.63667 23.1667C3.23187 21.075 3.23187 18.925 3.63667 16.8333" stroke="#37908E"
                    stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M33.7983 29.3483C32.5996 31.1174 31.0719 32.6395 29.2983 33.8317" stroke="#37908E"
                    stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M36.3633 16.8333C36.7681 18.925 36.7681 21.075 36.3633 23.1667" stroke="#37908E"
                    stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6.20166 10.6517C7.40037 8.88255 8.92811 7.36047 10.7017 6.16833" stroke="#37908E"
                    stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M10.6517 33.7983C8.88255 32.5996 7.36047 31.0719 6.16833 29.2983" stroke="#37908E"
                    stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <div class="ml-2">
                <h1 class="font-semibold text-black text-xl">12</h1>
                <span class="text-gray-500">Justificativas Pendentes</span>
            </div>
        </article>
        <article class="flex items-center rounded-md border p-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                <g fill="none" stroke="#37908E" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path stroke-dasharray="64" stroke-dashoffset="64"
                        d="M5.64 5.64c3.51 -3.51 9.21 -3.51 12.73 0c3.51 3.51 3.51 9.21 0 12.73c-3.51 3.51 -9.21 3.51 -12.73 0c-3.51 -3.51 -3.51 -9.21 -0 -12.73Z">
                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0" />
                    </path>
                    <path stroke-dasharray="20" stroke-dashoffset="20" d="M6 6l12 12">
                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.6s" dur="0.2s"
                            values="20;0" />
                    </path>
                </g>
            </svg>
            <div class="ml-2">
                <h1 class="font-semibold text-black text-xl">1</h1>
                <span class="text-gray-500">Aulas Canceladas</span>
            </div>
        </article>
    </div>
    <div class="grid grid-cols-1 xl:grid-cols-2 mt-2 gap-4">
        <div class="flex flex-col gap-4">
            <h1 class="font-semibold text-black text-xl mt-6">Comunicados</h1>
            <div class="overflow-y-auto max-h-[600px] flex flex-col gap-4">
                <div class="p-4 border rounded-md">
                    <div class="flex justify-between w-full">
                        <h2 class="text-black font-semibold">Título do Comunicado</h2>
                        <span class="text-gray-500 font-semibold text-sm">Hoje</span>
                    </div>
                    <article class="text-gray-500 text-sm my-2">
                        <p>Este é o corpo do comunicado de exemplo para que um grupo de usuários estejam cientes
                            (alunos,
                            professores, funcionários ou coordenadores)...</p>
                    </article>
                    <div class="flex items-center justify-between">
                        <article class="text-gray-500 text-sm flex flex-col">
                            <strong class="font-medium">Coordenador FATEC</strong>
                            <strong class="font-medium">coordenador@fatec.sp.gov.br</strong>
                        </article>
                        <a class="flex items-center gap-2 text-gray-500" href="/">
                            Ver detalhes
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                                <path fill="#747171"
                                    d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.6 4.6q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-4 border rounded-md">
                    <div class="flex justify-between w-full">
                        <h2 class="text-black font-semibold">Título do Comunicado</h2>
                        <span class="text-gray-500 font-semibold text-sm">Hoje</span>
                    </div>
                    <article class="text-gray-500 text-sm my-2">
                        <p>Este é o corpo do comunicado de exemplo para que um grupo de usuários estejam cientes
                            (alunos,
                            professores, funcionários ou coordenadores)...</p>
                    </article>
                    <div class="flex items-center justify-between">
                        <article class="text-gray-500 text-sm flex flex-col">
                            <strong class="font-medium">Coordenador FATEC</strong>
                            <strong class="font-medium">coordenador@fatec.sp.gov.br</strong>
                        </article>
                        <a class="flex items-center gap-2 text-gray-500" href="/">
                            Ver detalhes
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                                <path fill="#747171"
                                    d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.6 4.6q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-4 border rounded-md">
                    <div class="flex justify-between w-full">
                        <h2 class="text-black font-semibold">Título do Comunicado</h2>
                        <span class="text-gray-500 font-semibold text-sm">Hoje</span>
                    </div>
                    <article class="text-gray-500 text-sm my-2">
                        <p>Este é o corpo do comunicado de exemplo para que um grupo de usuários estejam cientes
                            (alunos,
                            professores, funcionários ou coordenadores)...</p>
                    </article>
                    <div class="flex items-center justify-between">
                        <article class="text-gray-500 text-sm flex flex-col">
                            <strong class="font-medium">Coordenador FATEC</strong>
                            <strong class="font-medium">coordenador@fatec.sp.gov.br</strong>
                        </article>
                        <a class="flex items-center gap-2 text-gray-500" href="/">
                            Ver detalhes
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                                <path fill="#747171"
                                    d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.6 4.6q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-4 border rounded-md">
                    <div class="flex justify-between w-full">
                        <h2 class="text-black font-semibold">Título do Comunicado</h2>
                        <span class="text-gray-500 font-semibold text-sm">Hoje</span>
                    </div>
                    <article class="text-gray-500 text-sm my-2">
                        <p>Este é o corpo do comunicado de exemplo para que um grupo de usuários estejam cientes
                            (alunos,
                            professores, funcionários ou coordenadores)...</p>
                    </article>
                    <div class="flex items-center justify-between">
                        <article class="text-gray-500 text-sm flex flex-col">
                            <strong class="font-medium">Coordenador FATEC</strong>
                            <strong class="font-medium">coordenador@fatec.sp.gov.br</strong>
                        </article>
                        <a class="flex items-center gap-2 text-gray-500" href="/">
                            Ver detalhes
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                                <path fill="#747171"
                                    d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.6 4.6q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <h1 class="font-semibold text-black text-xl mt-6">Próximas Aulas</h1>
            <article class="overflow-y-auto max-h-[600px] flex flex-col gap-4">
                <div class="flex items-center justify-between p-4 border border-gray-300 rounded-md">
                    <div class="flex items-center gap-4">
                        <div
                            class="border flex flex-col items-center justify-center rounded-full h-16 w-16 text-black border-gray-300 text-xl font-semibold">
                            12
                            <span class="text-gray-400 text-sm">Seg</span>
                            <span class="sr-only">Segunda</span>
                        </div>
                        <div>
                            <h2 class="text-black font-semibold text-xl">Engenharia de Software VIII</h2>
                            <p class="text-gray-400 font-semibold">19h00 - 22h30 | Turma A | Laboratório 12</h2>
                        </div>
                    </div>
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                            <path fill="#747171"
                                d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.6 4.6q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7z" />
                        </svg>
                        <span class="sr-only">Ver detalhes da aula</span>
                    </a>
                </div>
                <div class="flex items-center justify-between p-4 border border-gray-300 rounded-md">
                    <div class="flex items-center gap-4">
                        <div
                            class="border flex flex-col items-center justify-center rounded-full h-16 w-16 text-black border-gray-300 text-xl font-semibold">
                            13
                            <span class="text-gray-400 text-sm">Ter</span>
                            <span class="sr-only">Terça</span>
                        </div>
                        <div>
                            <h2 class="text-black font-semibold text-xl">Engenharia de Software VIII</h2>
                            <p class="text-gray-400 font-semibold">19h00 - 22h30 | Turma A | Laboratório 12</h2>
                        </div>
                    </div>
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                            <path fill="#747171"
                                d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.6 4.6q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7z" />
                        </svg>
                        <span class="sr-only">Ver detalhes da aula</span>
                    </a>
                </div>
                <div class="flex items-center justify-between p-4 border border-gray-300 rounded-md">
                    <div class="flex items-center gap-4">
                        <div
                            class="border flex flex-col items-center justify-center rounded-full h-16 w-16 text-black border-gray-300 text-xl font-semibold">
                            14
                            <span class="text-gray-400 text-sm">Qua</span>
                            <span class="sr-only">Quarta</span>
                        </div>
                        <div>
                            <h2 class="text-black font-semibold text-xl">Engenharia de Software VIII</h2>
                            <p class="text-gray-400 font-semibold">19h00 - 22h30 | Turma A | Laboratório 12</h2>
                        </div>
                    </div>
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                            <path fill="#747171"
                                d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.6 4.6q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7z" />
                        </svg>
                        <span class="sr-only">Ver detalhes da aula</span>
                    </a>
                </div>
                <div class="flex items-center justify-between p-4 border border-gray-300 rounded-md">
                    <div class="flex items-center gap-4">
                        <div
                            class="border flex flex-col items-center justify-center rounded-full h-16 w-16 text-black border-gray-300 text-xl font-semibold">
                            15
                            <span class="text-gray-400 text-sm">Qui</span>
                            <span class="sr-only">Quinta</span>
                        </div>
                        <div>
                            <h2 class="text-black font-semibold text-xl">Engenharia de Software VIII</h2>
                            <p class="text-gray-400 font-semibold">19h00 - 22h30 | Turma A | Laboratório 12</h2>
                        </div>
                    </div>
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                            <path fill="#747171"
                                d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.6 4.6q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7z" />
                        </svg>
                        <span class="sr-only">Ver detalhes da aula</span>
                    </a>
                </div>
                <div class="flex items-center justify-between p-4 border border-gray-300 rounded-md">
                    <div class="flex items-center gap-4">
                        <div
                            class="border flex flex-col items-center justify-center rounded-full h-16 w-16 text-black border-gray-300 text-xl font-semibold">
                            16
                            <span class="text-gray-400 text-sm">Sex</span>
                            <span class="sr-only">Sexta</span>
                        </div>
                        <div>
                            <h2 class="text-black font-semibold text-xl">Engenharia de Software VIII</h2>
                            <p class="text-gray-400 font-semibold">19h00 - 22h30 | Turma A | Laboratório 12</h2>
                        </div>
                    </div>
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                            <path fill="#747171"
                                d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.6 4.6q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7z" />
                        </svg>
                        <span class="sr-only">Ver detalhes da aula</span>
                    </a>
                </div>
                <div class="flex items-center justify-between p-4 border border-gray-300 rounded-md">
                    <div class="flex items-center gap-4">
                        <div
                            class="border flex flex-col items-center justify-center rounded-full h-16 w-16 text-black border-gray-300 text-xl font-semibold">
                            17
                            <span class="text-gray-400 text-sm">Sáb</span>
                            <span class="sr-only">Sábado</span>
                        </div>
                        <div>
                            <h2 class="text-black font-semibold text-xl">Engenharia de Software VIII</h2>
                            <p class="text-gray-400 font-semibold">19h00 - 22h30 | Turma A | Laboratório 12</h2>
                        </div>
                    </div>
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                            <path fill="#747171"
                                d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.6 4.6q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7z" />
                        </svg>
                        <span class="sr-only">Ver detalhes da aula</span>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>
<?php require __DIR__ . "/../partials/footer.php" ?>