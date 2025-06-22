<?php
$title = "Singular | Aulas - Estrutura Acadêmica";
$tab = "class";
$subtab = "academic-structure";
?>
<?php require __DIR__ . "/../../partials/header.php" ?>
<section>
    <h1 class="font-semibold text-black text-xl mb-4">Estrutura Acadêmica</h1>
    <!-- <div class="alert alert-outline" role="alert">
        A quick alert conveying key information or prompting action within a system.
    </div> -->

    <!-- Card inicial -->
    <div class="p-4 border border-gray-300 rounded-md mt-8 shadow-md mb-8">
        <div class="flex items-center gap-4">
            <div>
                <div class="flex gap-4">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                            stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 16V12" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M12 8H12.01" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <h2 class="text-[#000000] font-semibold">O que é a Estrutura Acadêmica?</h2>
                </div>
                <p class="text-gray-400 font-semibold">
                    A definição da Estrutura Acadêmica, que é baseada em Cursos e Disciplinas, afetará diretamente na
                    categorização das aulas. Dentro de um Curso haverá as Disciplinas, e dentro das Disciplinas, é obrigatório informar a hora-aula por dia letivo.
                    </p>
            </div>
        </div>
    </div>
    <div class="p-4 border border-gray-300 rounded-md mt-8 shadow-md mb-8">
        <div class="flex items-center gap-4">
            <div>
                <div class="flex gap-4">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                            stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 16V12" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M12 8H12.01" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                    <h2 class="text-[#000000] font-semibold">Como atribuir Cursos e/ou Disciplinas para um ou mais professores?</h2>
                </div>
                <p class="text-gray-400 font-semibold">
                    Ao selecionar um dos Recursos logo abaixo chamado de “Anexar Disciplina ou Curso”, será possível escolher os professores desejados para lecionarem integralmente um Curso, ou, parcialmente as Disciplinas específicas dentro de um Curso.
                    </p>
            </div>
        </div>
    </div>

    <h2 class="font-semibold text-black text-xl mb-4">Recursos</h2>
    <!-- Card -->
    <article class="mt-4 grid grid-cols-2 gap-4">
        <div class="flex items-center justify-between p-4 border border-gray-300 rounded-md">
            <div class="flex items-center gap-4">
                <div
                    class="border flex flex-col items-center justify-center rounded-full h-16 w-16 text-black border-gray-300 text-xl font-semibold">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 13V21" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M12 3V6" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M4 6C3.73478 6 3.48043 6.10536 3.29289 6.29289C3.10536 6.48043 3 6.73478 3 7V12C3 12.2652 3.10536 12.5196 3.29289 12.7071C3.48043 12.8946 3.73478 13 4 13H17C17.4124 13 17.8148 12.8725 18.152 12.635L21.576 10.318C21.707 10.2257 21.8139 10.1032 21.8877 9.96097C21.9615 9.8187 22.0001 9.66077 22.0001 9.5005C22.0001 9.34022 21.9615 9.1823 21.8877 9.04003C21.8139 8.89775 21.707 8.77531 21.576 8.683L18.152 6.365C17.8148 6.12746 17.4124 5.99997 17 6H4Z"
                            stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-[#000000] font-semibold text-xl">Registro de Cursos</h2>
                    <p class="text-gray-400 font-semibold">Administre os Cursos da sua instituição</h2>
                </div>
            </div>
            <a href="/coordinator/courses_register.php">
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
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 16V4C2 3.46957 2.21071 2.96086 2.58579 2.58579C2.96086 2.21071 3.46957 2 4 2H15"
                            stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M22 18H11C10.4696 18 9.96086 18.2107 9.58579 18.5858C9.21071 18.9609 9 19.4696 9 20M9 20C9 20.5304 9.21071 21.0391 9.58579 21.4142C9.96086 21.7893 10.4696 22 11 22H21.5C21.6326 22 21.7598 21.9473 21.8536 21.8536C21.9473 21.7598 22 21.6326 22 21.5V6.5C22 6.36739 21.9473 6.24021 21.8536 6.14645C21.7598 6.05268 21.6326 6 21.5 6H11C10.4696 6 9.96086 6.21071 9.58579 6.58579C9.21071 6.96086 9 7.46957 9 8V20Z"
                            stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M5 14H4C3.46957 14 2.96086 14.2107 2.58579 14.5858C2.21071 14.9609 2 15.4696 2 16C2 16.5304 2.21071 17.0391 2.58579 17.4142C2.96086 17.7893 3.46957 18 4 18H5"
                            stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-[#000000] font-semibold text-xl">Registro de Disciplinas</h2>
                    <p class="text-gray-400 font-semibold">Administre as Disciplinas da sua instituição</h2>
                </div>
            </div>
            <a href="/coordinator/disciplines_register.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                    <path fill="#747171"
                        d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.6 4.6q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7z" />
                </svg>
                <span class="sr-only">Ver detalhes da aula</span>
            </a>
        </div>
        <!-- <div class="flex items-center justify-between p-4 border border-gray-300 rounded-md">
            <div class="flex items-center gap-4">
                <div
                    class="border flex flex-col items-center justify-center rounded-full h-16 w-16 text-black border-gray-300 text-xl font-semibold">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 2V6" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M16 2V6" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                            stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3 10H21" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M8 14H8.01" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M12 14H12.01" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M16 14H16.01" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M8 18H8.01" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M12 18H12.01" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M16 18H16.01" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-[#000000] font-semibold text-xl">Mapa Acadêmico</h2>
                    <p class="text-gray-400 font-semibold">Mapa de aulas do período letivo selecionado</h2>
                </div>
            </div>
            <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                    <path fill="#747171"
                        d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.6 4.6q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7z" />
                </svg>
                <span class="sr-only">Ver detalhes da aula</span>
            </a>
        </div> -->
        <!-- <div class="flex items-center justify-between p-4 border border-gray-300 rounded-md">
            <div class="flex items-center gap-4">
                <div
                    class="border flex flex-col items-center justify-center rounded-full h-16 w-16 text-black border-gray-300 text-xl font-semibold">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 2V6C14 6.53043 14.2107 7.03914 14.5858 7.41421C14.9609 7.78929 15.4696 8 16 8H20"
                            stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M15 18C15 17.2044 14.6839 16.4413 14.1213 15.8787C13.5587 15.3161 12.7956 15 12 15C11.2044 15 10.4413 15.3161 9.87868 15.8787C9.31607 16.4413 9 17.2044 9 18"
                            stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M15 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V7L15 2Z"
                            stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M12 15C13.1046 15 14 14.1046 14 13C14 11.8954 13.1046 11 12 11C10.8954 11 10 11.8954 10 13C10 14.1046 10.8954 15 12 15Z"
                            stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-[#000000] font-semibold text-xl">Anexar Disciplina ou Curso</h2>
                    <p class="text-gray-400 font-semibold">Anexar Disciplina e/ou Curso aos professores</h2>
                </div>
            </div>
            <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                    <path fill="#747171"
                        d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.6 4.6q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7z" />
                </svg>
                <span class="sr-only">Ver detalhes da aula</span>
            </a>
        </div> -->
    </article>
</section>
<?php require __DIR__ . "/../../partials/footer.php" ?>