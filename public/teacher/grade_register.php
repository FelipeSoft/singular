<?php
$title = "Singular | Professores - Gestão de Notas";
$tab = "grades";
$subtab = "grade-register";
?>
<?php require __DIR__ . "/../../partials/header.php" ?>
<section>
    <h1 class="font-semibold text-black text-xl mb-4">Gestão de Notas</h1>
    <div>
        <h2 class="text-black flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="M10.825 22q-.675 0-1.162-.45t-.588-1.1L8.85 18.8q-.325-.125-.612-.3t-.563-.375l-1.55.65q-.625.275-1.25.05t-.975-.8l-1.175-2.05q-.35-.575-.2-1.225t.675-1.075l1.325-1Q4.5 12.5 4.5 12.337v-.675q0-.162.025-.337l-1.325-1Q2.675 9.9 2.525 9.25t.2-1.225L3.9 5.975q.35-.575.975-.8t1.25.05l1.55.65q.275-.2.575-.375t.6-.3l.225-1.65q.1-.65.588-1.1T10.825 2h2.35q.675 0 1.163.45t.587 1.1l.225 1.65q.325.125.613.3t.562.375l1.55-.65q.625-.275 1.25-.05t.975.8l1.175 2.05q.35.575.2 1.225t-.675 1.075l-1.325 1q.025.175.025.338v.674q0 .163-.05.338l1.325 1q.525.425.675 1.075t-.2 1.225l-1.2 2.05q-.35.575-.975.8t-1.25-.05l-1.5-.65q-.275.2-.575.375t-.6.3l-.225 1.65q-.1.65-.587 1.1t-1.163.45zM11 20h1.975l.35-2.65q.775-.2 1.438-.587t1.212-.938l2.475 1.025l.975-1.7l-2.15-1.625q.125-.35.175-.737T17.5 12t-.05-.787t-.175-.738l2.15-1.625l-.975-1.7l-2.475 1.05q-.55-.575-1.212-.962t-1.438-.588L13 4h-1.975l-.35 2.65q-.775.2-1.437.588t-1.213.937L5.55 7.15l-.975 1.7l2.15 1.6q-.125.375-.175.75t-.05.8q0 .4.05.775t.175.75l-2.15 1.625l.975 1.7l2.475-1.05q.55.575 1.213.963t1.437.587zm1.05-4.5q1.45 0 2.475-1.025T15.55 12t-1.025-2.475T12.05 8.5q-1.475 0-2.487 1.025T8.55 12t1.013 2.475T12.05 15.5M12 12" />
            </svg>
            <span class="text-gray-500">Manutenção</span>
        </h2>
        <form class="flex flex-wrap gap-4">
            <script>
                window.addEventListener('load', function() {
                    flatpickr('#date', {
                        monthSelectorType: 'static'
                    })
                })
            </script>
            <div class="w-[200px] text-gray-500">
                <label hidden class="label-text text-gray-500" for="date">Disciplina</label>
                <input disabled hidden type="text"
                    class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
                    id="date" />
            </div>
            <div class="flex items-center gap-4 w-full">
                <div class="flex items-center gap-4 w-full">
                    <div class="w-1/3 text-gray-500">
                        <label class="label-text text-gray-500" for="discipline">Disciplina</label>
                        <select class="bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39] select" id="discipline">
                            <option>Matemática</option>
                            <option>História</option>
                        </select>
                    </div>
                    <div class="w-1/3 text-gray-500">
                        <label class="label-text text-gray-500" for="period">Periodo</label>
                        <select class="bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39] select" id="discipline">
                            <option>Manhã</option>
                            <option>Tarde</option>
                            <option>Noite</option>
                        </select>
                    </div>
                    <div class="w-1/3">
                    </div>
                    <div class="w-1/3 text-gray-500">
                        <label class="label-text text-white" for="btn">.</label>
                        <button class="btn bg-black text-white w-full">Busca</button>
                    </div>

                </div>
            </div>

        </form>
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
            <div class="w-[200px] text-gray-500">
                <label hidden class="label-text text-gray-500" for="date">ID</label>
                <input disabled hidden type="text"
                    class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
                    id="date" />
            </div>
            <div class="flex items-end gap-4 w-full">
                <div class="w-1/2 text-gray-500">
                    <label class="label-text text-gray-500" for="discipline">Nome</label>
                    <input type="text" placeholder="Fulano de tal"
                        class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
                        id="name" />
                </div>

                <div class="w-1/3 text-gray-500">
                    <label class="label-text text-gray-500" for="discipline">Condição</label>
                    <select class="bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39] select" id="discipline">
                        <option>Maior que</option>
                        <option>Menor que</option>
                        <option>Igual à</option>
                    </select>
                </div>
                <div class="w-1/2 text-gray-500">
                    <label class="label-text text-gray-500" for="discipline">Nota</label>
                    <input type="text" placeholder="5"
                        class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
                        id="name" />
                </div>
                <div class="flex items-center gap-4">
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
        </form>
        <div class="w-full overflow-x-auto mt-4">
            <table class="text-black table border border-gray-300">
                <thead class="border-gray-300">
                    <tr class="border-b border-gray-300">

                        <th class="text-black">ID</th>
                        <th class="text-black">Nome</th>
                        <th class="w-110"></th>
                        <th class="text-black">Nota</th>
                        <th class="text-black">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-300">
                        <td>1</td>
                        <td>João da Silva</td>
                        <td class="w-110"></td>
                        <td class="text-black">
                            10.0
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
                            7.0
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
                            5.0
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
                            2.0
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