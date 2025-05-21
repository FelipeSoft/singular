<?php
$title = "Singular | Aulas - Estrutura Acadêmica";
$tab = "class";
$subtab = "academic-structure";
?>
<?php require __DIR__ . "/../../Partials/header.php" ?>
<section>
    <h1 class="font-semibold text-black text-xl mb-4">Estrutura Acadêmica</h1>
    <div class="alert alert-outline" role="alert">
        A quick alert conveying key information or prompting action within a system.
    </div>
    <h2 class="font-semibold text-black text-xl mb-4">Recursos</h2>
    <div class="flex items-center justify-between p-4 border border-gray-300 rounded-md">
                <div class="flex items-center gap-4">
                    <div
                        class="border flex flex-col items-center justify-center rounded-full h-16 w-16 text-black border-gray-300 text-xl font-semibold">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12 13V21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 3V6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4 6C3.73478 6 3.48043 6.10536 3.29289 6.29289C3.10536 6.48043 3 6.73478 3 7V12C3 12.2652 3.10536 12.5196 3.29289 12.7071C3.48043 12.8946 3.73478 13 4 13H17C17.4124 13 17.8148 12.8725 18.152 12.635L21.576 10.318C21.707 10.2257 21.8139 10.1032 21.8877 9.96097C21.9615 9.8187 22.0001 9.66077 22.0001 9.5005C22.0001 9.34022 21.9615 9.1823 21.8877 9.04003C21.8139 8.89775 21.707 8.77531 21.576 8.683L18.152 6.365C17.8148 6.12746 17.4124 5.99997 17 6H4Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                        
                    </div>
                    <div>
                        <h2 class="text-[#000000] font-semibold text-xl">Registro de Cursos</h2>
                        <p class="text-gray-400 font-semibold">Administre os Cursos da sua instituição</h2>
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
</section>
<?php require __DIR__ . "/../../Partials/footer.php" ?>