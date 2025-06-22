<?php
$title = "Singular | Matrículas - Registro de Matrículas";
$tab = "enrollment";
$subtab = "enrollment-records";
?>
<?php require __DIR__ . "/../../partials/header.php" ?>
<section>
    <h1 class="font-semibold text-black text-xl mb-4">Registro de Matrículas</h1>
    <div>
        <h2 class="text-black flex items-center gap-2 mt-8">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M8.857 12.506C6.37 10.646 4.596 8.6 3.627 7.45c-.3-.356-.398-.617-.457-1.076c-.202-1.572-.303-2.358.158-2.866S4.604 3 6.234 3h11.532c1.63 0 2.445 0 2.906.507c.461.508.36 1.294.158 2.866c-.06.459-.158.72-.457 1.076c-.97 1.152-2.747 3.202-5.24 5.065a1.05 1.05 0 0 0-.402.747c-.247 2.731-.475 4.227-.617 4.983c-.229 1.222-1.96 1.957-2.888 2.612c-.552.39-1.222-.074-1.293-.678a196 196 0 0 1-.674-6.917a1.05 1.05 0 0 0-.402-.755"
                    color="#000" />
            </svg>
            <span class="text-gray-500">Filtros</span>
        </h2>
        <form class="flex flex-wrap gap-4">
            <script>
                window.addEventListener('load', function() {
                    flatpickr('#date', {
                        monthSelectorType: 'static'
                    })
                })
            </script>
           
            <div class="flex items-center gap-4 w-full">
                <div class="flex items-center gap-4 w-full">
                    <div class="w-1/3 text-gray-500">
                        <label class="label-text text-gray-500" for="discipline">Nome</label>
                    <input type="text" placeholder="Fulano de tal"
                        class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
                        id="name" />
                    </div>
                    <div class="w-1/3 text-gray-500">
                        <label class="label-text text-gray-500" for="period">Matrícula</label>
                        <select class="bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39] select" id="discipline">
                            <option>Ativa</option>
                            <option>Trancada</option>
                            <option>Cancelada</option>
                            <option>Inativa</option>
                            <option>Concluída</option>
                        </select>
                    </div>
                </div>
                <div class="flex items-center self-end gap-4">
                    <button class="btn btn-error w-16">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13.758 19.414L9 21v-8.5L4.52 7.572A2 2 0 0 1 4 6.227V4h16v2.172a2 2 0 0 1-.586 1.414L15 12v1.5m7 8.5l-5-5m0 5l5-5" />
                        </svg>
                        <span class="sr-only">Remover filtro</span>
                    </button>
                    <button class="btn bg-black text-white w-24">Filtrar</button>
                </div>
            </div>
            <script>
                window.addEventListener('load', function() {
                    flatpickr('#date', {
                        monthSelectorType: 'static'
                    })
                })
            </script>
            </div>
        </form>
        <div class="w-full overflow-x-auto mt-8">
            <table class="text-black table border border-gray-300">
                <thead class="border-gray-300">
                    <tr class="border-b border-gray-300">

                        <th class="text-black">ID</th>
                        <th class="text-black">Nome</th>
                        <th class="w-110"></th>
                        <th class="text-black">Situação</th>
                        <th class="text-black">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-300">
                        <td>1</td>
                        <td>João da Silva</td>
                        <td class="w-110"></td>
                        <td class="text-black">
                            Ativa
                        </td>

                        <td>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--pencil] size-5"></span></button>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--trash] size-5"></span></button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td>2</td>
                        <td>Maria Aparecida</td>
                        <td class="w-110"></td>
                        <td class="text-black">
                            Ativa
                        </td>

                        <td>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--pencil] size-5"></span></button>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--trash] size-5"></span></button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td>3</td>
                        <td>Rodrigo Martins</td>
                        <td class="w-110"></td>
                        <td class="text-black">
                            Inativa
                        </td>

                        <td>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--pencil] size-5"></span></button>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--trash] size-5"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Ana Luisa</td>
                        <td class="w-110"></td>
                        <td class="text-black">
                            Cancelada
                        </td>

                        <td>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--pencil] size-5"></span></button>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--trash] size-5"></span></button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="h-25"></div>
        </div>
    </div>
</section>
<?php require __DIR__ . "/../../partials/footer.php" ?>