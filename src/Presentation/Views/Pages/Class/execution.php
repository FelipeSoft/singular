<?php
$title = "Singular | Aulas - Execução de Aulas";
$tab = "class";
$subtab = "class-execution";
?>
<?php require __DIR__ . "/../../Partials/header.php" ?>
<section>
    <div class="flex flex-col">
        <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M8.857 12.506C6.37 10.646 4.596 8.6 3.627 7.45c-.3-.356-.398-.617-.457-1.076c-.202-1.572-.303-2.358.158-2.866S4.604 3 6.234 3h11.532c1.63 0 2.445 0 2.906.507c.461.508.36 1.294.158 2.866c-.06.459-.158.72-.457 1.076c-.97 1.152-2.747 3.202-5.24 5.065a1.05 1.05 0 0 0-.402.747c-.247 2.731-.475 4.227-.617 4.983c-.229 1.222-1.96 1.957-2.888 2.612c-.552.39-1.222-.074-1.293-.678a196 196 0 0 1-.674-6.917a1.05 1.05 0 0 0-.402-.755"
                    color="#000" />
            </svg>
            <h1 class="text-gray-500 font-semibold">Filtros</h1>
        </div>
        <form class="grid grid-cols-3 gap-4 mt-4">
            <div class="w-full text-gray-500">
                <label class="label-text text-gray-500" for="defaultInput">Data</label>
                <input type="text" placeholder="dd/mm/aaaa"
                    class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300  focus:outline-[#F73C39]"
                    id="defaultInput" />
            </div>
            <div class="w-full text-gray-500">
                <label class="label-text text-gray-500" for="defaultInput">Curso</label>
                <input type="text" placeholder="John Doe"
                    class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300  focus:outline-[#F73C39]"
                    id="defaultInput" />
            </div>
            <div class="w-full text-gray-500">
                <label class="label-text text-gray-500" for="defaultInput">Disciplina</label>
                <input type="text" placeholder="John Doe"
                    class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300  focus:outline-[#F73C39]"
                    id="defaultInput" />
            </div>
            <div class="w-full text-gray-500">
                <label class="label-text text-gray-500" for="defaultInput">Status</label>
                <input type="text" placeholder="John Doe"
                    class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300  focus:outline-[#F73C39]"
                    id="defaultInput" />
            </div>
            <div class="col-end-4 flex items-end justify-end gap-4">
                <button class="btn btn-error w-16">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.758 19.414L9 21v-8.5L4.52 7.572A2 2 0 0 1 4 6.227V4h16v2.172a2 2 0 0 1-.586 1.414L15 12v1.5m7 8.5l-5-5m0 5l5-5" />
                    </svg>
                    <span class="sr-only">Remover filtro</span>
                </button>
                <button class="btn bg-black text-white w-24">Filtrar</button>
            </div>
        </form>
    </div>
    <div class="flex items-center justify-between mt-8">
        <h1 class="font-semibold text-black text-xl">Execução de Aulas</h1>
        <article class="flex items-center gap-4">
            <p class="text-gray-500">Definições de Aulas Pendentes: <strong class="text-[#F73C39]">36</strong></p>
            <p class="text-gray-500">Definições de Aulas Pendentes: <strong class="text-[#F73C39]">1</strong></p>
        </article>
    </div>
    <div class="flex flex-col gap-4">
        <article class="mt-4 grid grid-cols-2 gap-4">
            <div class="flex items-center justify-between p-4 border border-gray-300 rounded-md">
                <div class="flex items-center gap-4">
                    <div
                        class="border flex flex-col items-center justify-center rounded-full h-16 w-16 text-black border-gray-300 text-xl font-semibold">
                        12
                        <span class="text-gray-400 text-sm">Seg</span>
                        <span class="sr-only">Segunda</span>
                    </div>
                    <div>
                        <h2 class="text-[#F73C39] font-semibold text-xl">Engenharia de Software VIII</h2>
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
        <div class="flex justify-between">
            <h3 class="text-gray-500">Total de Registros: 40</h3>
            <nav class="flex items-center gap-x-1">
                <button type="button" class="btn btn-text">Anterior</button>
                <div class="flex items-center gap-x-1">
                    <button type="button"
                        class="btn btn-text btn-square aria-[current='page']:text-bg-primary">1</button>
                    <button type="button"
                        class="btn btn-text btn-square aria-[current='page']:bg-[#F73C39] aria-[current='page']:text-white"
                        aria-current="page"> 2 </button>
                    <button type="button"
                        class="btn btn-text btn-square aria-[current='page']:text-bg-primary">3</button>
                </div>
                <button type="button" class="btn btn-text">Próximo</button>
            </nav>
        </div>
    </div>
</section>
<?php require __DIR__ . "/../../Partials/footer.php" ?>