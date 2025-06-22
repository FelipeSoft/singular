<?php
$title = "Singular | Coordenadores - Gestão de Coordenadores";
$tab = "profiles";
$subtab = "coordinators-management";
?>
<?php require __DIR__ . "/../../partials/header.php" ?>
<section>

    <h1 class="font-semibold text-black text-xl mb-4 flex items-center space-x-1">
        <a href="/coordinator/lesson_academic_structure.php" class="hover:underline">Estrutura Acadêmica</a>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="mt-1">
            <path d="M9 18L15 12L9 6" stroke="#747171" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <p class="text-gray-500 font-normal text-base mt-1">
            Registro de Disciplinas
        </p>


    </h1>

    <div class="flex-col w-full items-start rounded-md py-4 px-4 mb-5 shadow-lg border-gray-200 border-2">
        <div class="flex gap-2">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12 16V12" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12 8H12.01" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <h2 class="text-black">Informativo</h2>
        </div>
        <p class="text-gray-400">
            Na sessão abaixo, para editar ou adicionar uma nova disciplina, basta utilizar o formulário multifunções logo abaixo.
        </p>
    </div>

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
                <label hidden class="label-text text-gray-500" for="date">ID</label>
                <input disabled hidden type="text"
                    class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
                    id="date" />
            </div>
            <div class="flex items-center gap-4 w-full">
                <div class="flex items-center gap-4 w-full">
                    <div class="w-1/6 text-gray-500">
                        <label class="label-text text-gray-500" for="discipline">ID</label>
                        <div>
                            <div class="input flex align-middle items-center bg-gray-200 text-gray-400 placeholder:text-gray-500 border-gray-300 focus:outline-[#F73C39]">
                                <h1 class="w-1/10">
                                    X
                                </h1>
                                <div class="w-8/10">
                                </div>
                                <svg class="1/10" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 11H5C3.89543 11 3 11.8954 3 13V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V13C21 11.8954 20.1046 11 19 11Z" stroke="#747171" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7 11V7C7 5.67392 7.52678 4.40215 8.46447 3.46447C9.40215 2.52678 10.6739 2 12 2C13.3261 2 14.5979 2.52678 15.5355 3.46447C16.4732 4.40215 17 5.67392 17 7V11" stroke="#747171" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="w-3/6 text-gray-500">
                        <label class="label-text text-gray-500" for="discipline">Curso</label>
                        <select class="bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39] select" id="discipline">
                            <option>Ensino Médio | Pré-Vestibulinho</option>
                            <option>Pré-vestibular</option>
                            <option>Empreendedorismo</option>
                        </select>
                    </div>
                    <div class="w-2/6 text-gray-500">
                        <div class="flex gap-2 items-center">
                            <label class="label-text text-gray-500" for="discipline">Multidocência</label>
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_14_971)">
                                    <path d="M9.50016 17.4166C13.8724 17.4166 17.4168 13.8722 17.4168 9.49992C17.4168 5.12766 13.8724 1.58325 9.50016 1.58325C5.12791 1.58325 1.5835 5.12766 1.5835 9.49992C1.5835 13.8722 5.12791 17.4166 9.50016 17.4166Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.19629 7.12496C7.38241 6.59587 7.74978 6.14971 8.23334 5.86553C8.71689 5.58134 9.28541 5.47746 9.83822 5.57228C10.391 5.6671 10.8924 5.9545 11.2536 6.38359C11.6148 6.81268 11.8125 7.35575 11.8117 7.91663C11.8117 9.49996 9.43671 10.2916 9.43671 10.2916" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.5 13.4583H9.50875" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_14_971">
                                        <rect width="19" height="19" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>

                        <select class="bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39] select" id="discipline">
                            <option>SIM</option>
                            <option>NÃO</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="flex items-end gap-4 w-full">
                <div class="w-full text-gray-500">
                    <label class="label-text text-gray-500" for="discipline">Nome da disciplina</label>
                    <input type="password"
                        class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
                        id="name" />
                </div>
                <div class="flex items-center gap-4">
                    <button class="btn bg-[#E3E3E3] text-black w-24">Cancelar</button>
                    <button class="btn bg-black text-white w-24">Salvar</button>
                </div>
            </div>
        </form>
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

        </form>
        <div class="w-full overflow-x-auto mt-4">
            <table class="text-black table border border-gray-300">
                <thead class="border-gray-300">
                    <tr class="border-b border-gray-300">
                        <td class="text-black">ID</td>
                        <td class="text-black">NOME DA DISCIPLINA</td>
                        <td class="text-black">PERTENCE AO CURSO</td>
                        <td class="text-right"><td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-300">
                        <td>1</td>
                        <td>Matemática</td>
                        <td class="text-gray-500">Ensino Médio | Pré-Vestibulinho</td>
                        <td class="text-right flex justify-end w-full">
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--pencil] size-5"></span></button>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--trash] size-5"></span></button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td>2</td>
                        <td>Português</td>
                        <td class="text-gray-500">Ensino Médio | Pré-Vestibulinho</td>
                        <td class="text-right flex justify-end w-full">
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--pencil] size-5"></span></button>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--trash] size-5"></span></button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td>3</td>
                        <td>História</td>
                        <td class="text-gray-500">Ensino Médio | Pré-Vestibulinho</td>
                        <td class="text-right flex justify-end w-full">
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--pencil] size-5"></span></button>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--trash] size-5"></span></button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td>4</td>
                        <td>Geografia</td>
                        <td class="text-gray-500">Ensino Médio | Pré-Vestibulinho</td>
                        <td class="text-right flex justify-end w-full">
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--pencil] size-5"></span></button>
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--trash] size-5"></span></button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td>5</td>
                        <td>Ciências</td>
                        <td class="text-gray-500">Ensino Médio | Pré-Vestibulinho</td>
                        <td class="text-right flex justify-end w-full">
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