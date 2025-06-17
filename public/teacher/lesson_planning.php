<?php
$title = "Singular | Aulas - Planejamento de Aulas";
$tab = "lesson";
$subtab = "lesson_planning";

$students = [
    [
        "id" => "1",
        "name" => "Student 1"
    ],
    [
        "id" => "2",
        "name" => "Student 2"
    ],
    [
        "id" => "3",
        "name" => "Student 3"
    ],
    [
        "id" => "4",
        "name" => "Student 4"
    ],
    [
        "id" => "5",
        "name" => "Student 5"
    ],
];
?>
<?php require __DIR__ . "/../../partials/header.php" ?>
<section class="p-4">
    <div class="flex flex-col">
        <div class="flex flex-row items-center justify-between mb-5">
            <h1 class="font-semibold text-black text-xl">Planejamento de Aulas</h1>
            <div class="gap-2 flex">
                <p class="mr-10"><span class="mr-3">Definições de Aulas Pendentes:</span><span
                        class="text-[#F73C39]">36</span></p>
                <p><span class="mr-3">Prazo limite:</span><span class="text-[#F73C39]">25/08/2023</span></p>
            </div>

        </div>

        <div class="flex flex-row items-center gap-2 justify-between">
            <div class="flex flex-row items-center">
                <svg class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 2V6C14 6.53043 14.2107 7.03914 14.5858 7.41421C14.9609 7.78929 15.4696 8 16 8H20"
                        stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M2.30499 15.5299L3.22799 15.1479" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M3.22799 12.852L2.30399 12.469" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M4.677 21.5C5.0398 21.82 5.50627 21.9976 5.99 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V7L15 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V6.5"
                        stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M4.85199 11.2281L4.46899 10.3051" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M4.85199 16.772L4.46899 17.696" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M7.14801 11.2281L7.53101 10.3051" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M7.53001 17.696L7.14801 16.772" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M8.772 12.852L9.695 12.469" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M8.772 15.1479L9.695 15.5309" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M6 17C7.65685 17 9 15.6569 9 14C9 12.3431 7.65685 11 6 11C4.34315 11 3 12.3431 3 14C3 15.6569 4.34315 17 6 17Z"
                        stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <h1 class="text-gray-500 font-semibold">Manutenção</h1>
            </div>

            <div class="flex flex-row">
                <svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9.93694 15.5C9.84766 15.1539 9.66728 14.8381 9.41456 14.5854C9.16184 14.3327 8.84601 14.1523 8.49994 14.063L2.36494 12.481C2.26027 12.4513 2.16815 12.3883 2.10255 12.3014C2.03696 12.2146 2.00146 12.1088 2.00146 12C2.00146 11.8912 2.03696 11.7854 2.10255 11.6986C2.16815 11.6118 2.26027 11.5487 2.36494 11.519L8.49994 9.93601C8.84589 9.84681 9.16163 9.66658 9.41434 9.41404C9.66705 9.16151 9.84751 8.84589 9.93694 8.50001L11.5189 2.36501C11.5483 2.25992 11.6113 2.16735 11.6983 2.1014C11.7852 2.03545 11.8913 1.99976 12.0004 1.99976C12.1096 1.99976 12.2157 2.03545 12.3026 2.1014C12.3896 2.16735 12.4525 2.25992 12.4819 2.36501L14.0629 8.50001C14.1522 8.84608 14.3326 9.1619 14.5853 9.41462C14.838 9.66734 15.1539 9.84773 15.4999 9.93701L21.6349 11.518C21.7404 11.5471 21.8335 11.61 21.8998 11.6971C21.9661 11.7841 22.002 11.8906 22.002 12C22.002 12.1094 21.9661 12.2159 21.8998 12.3029C21.8335 12.39 21.7404 12.4529 21.6349 12.482L15.4999 14.063C15.1539 14.1523 14.838 14.3327 14.5853 14.5854C14.3326 14.8381 14.1522 15.1539 14.0629 15.5L12.4809 21.635C12.4515 21.7401 12.3886 21.8327 12.3016 21.8986C12.2147 21.9646 12.1086 22.0003 11.9994 22.0003C11.8903 22.0003 11.7842 21.9646 11.6973 21.8986C11.6103 21.8327 11.5473 21.7401 11.5179 21.635L9.93694 15.5Z"
                        stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M20 3V7" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M22 5H18" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M4 17V19" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M5 18H3" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <h2 class="font-semibold text-black text-xl">Modo ativo: Edição</h2>
            </div>


        </div>
        <form class="grid grid-cols-4 gap-8 mt-4">
            <script>
                window.addEventListener('load', function () {
                    flatpickr('#date', {
                        monthSelectorType: 'static'
                    })
                })
            </script>
            <div class="w-full text-gray-500 relative">
                <label class="label-text text-gray-500" for="status">Id</label>
                <input type="text" value="1" class="input absolute border-gray-300 focus:outline-[#F73C39]" id="status"
                    disabled />
                <div class="absolute right-3 mt-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 11H5C3.89543 11 3 11.8954 3 13V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V13C21 11.8954 20.1046 11 19 11Z"
                            stroke="#747171" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M7 11V7C7 5.67392 7.52678 4.40215 8.46447 3.46447C9.40215 2.52678 10.6739 2 12 2C13.3261 2 14.5979 2.52678 15.5355 3.46447C16.4732 4.40215 17 5.67392 17 7V11"
                            stroke="#747171" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>


            </div>
            <div class="w-full text-gray-500">
                <label class="label-text text-gray-500" for="date">Data</label>
                <input name="date" type="text" placeholder="dd/mm/aaaa"
                    class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
                    id="date" />
            </div>

            <div class="w-full text-gray-500">
                <label class="label-text text-gray-500" for="course">Curso</label>
                <select name="course"
                    class="bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39] select"
                    id="course">
                    <option>Ensino Médio | Pré-vestibulinho</option>
                    <option>Pré-vestibular</option>
                    <option>Empreendedorismo</option>
                </select>
            </div>
            <div class="w-full text-gray-500">
                <label class="label-text text-gray-500" for="classroomgroup">Turma</label>
                <select name="classroomgroup"
                    class="bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39] select"
                    id="classroomgroup">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
            </div>

            <div class="w-full text-gray-500">
                <label class="label-text text-gray-500" for="discipline">Disciplina</label>
                <select name="discipline"
                    class="bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39] select"
                    id="discipline">
                    <option>Matemática Discreta </option>
                    <option>Engenharia de Software I</option>
                </select>
            </div>
            <div class="w-full text-gray-500">
                <label class="label-text text-gray-500" for="discipline">Descrição</label>
                <input type="text" name="discipline"
                    class="input bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39]"
                    id="discipline">
            </div>
            <div class="w-full text-gray-500">
                <label class="label-text text-gray-500" for="discipline">Anexos</label>
                <input type="file" name="discipline"
                    class="input file:bg-[#388F8E] file:text-white file:rounded-md file:px-4 file:py-2 file:border-0 file:cursor-pointer bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39]"
                    id="discipline">
            </div>
         
            <div class="flex flex-row justify-end gap-5">
                <div class="col-end-4 flex items-end justify-end gap-4 mt-4">
                    <button class="btn bg-[#e3e3e3] border-none text-black w-24">Cancelar</button>
                </div>
                <div class="col-end-4 flex items-end justify-end gap-4 mt-4">
                    <button class="btn bg-black text-white w-24">Enviar</button>
                </div>
            </div>

        </form>
    </div>
</section>
<section class="p-4">
    <div class="w-full overflow-x-auto mt-4">
        <table class="text-black table border border-gray-300">
            <thead class="border-gray-300">
                <tr class="border-b border-gray-300">

                    <th class="text-black">ID</th>
                    <th class="text-black">Arquivo</th>
                    <th class="w-110"></th>
                    <th class="text-black"></th>
                    <th class="text-black">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-gray-300">
                    <td>1</td>
                    <td>slide1.pdf</td>
                    <td class="w-110"></td>
                    <td class="text-black">

                    </td>

                    <td>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                class="icon-[tabler--pencil] size-5"></span></button>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                class="icon-[tabler--trash] size-5"></span></button>

                    </td>
                </tr>
                <tr class="border-b border-gray-300">
                    <td>2</td>
                    <td>slide2.pdf</td>
                    <td class="w-110"></td>
                    <td class="text-black">

                    </td>

                    <td>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                class="icon-[tabler--pencil] size-5"></span></button>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                class="icon-[tabler--trash] size-5"></span></button>

                    </td>
                </tr>
                <tr class="border-b border-gray-300">
                    <td>3</td>
                    <td>slide3.pdf</td>
                    <td class="w-110"></td>
                    <td class="text-black">

                    </td>

                    <td>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                class="icon-[tabler--pencil] size-5"></span></button>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                class="icon-[tabler--trash] size-5"></span></button>

                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>slide4.pdf</td>
                    <td class="w-110"></td>
                    <td class="text-black">

                    </td>

                    <td>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                class="icon-[tabler--pencil] size-5"></span></button>
                        <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                class="icon-[tabler--trash] size-5"></span></button>

                    </td>
                </tr>
            </tbody>
        </table>

    </div>
    <div class="col-end-4 flex items-end justify-end gap-4 mt-4">
        <button class="btn bg-black text-white w-24">Salvar</button>
    </div>
</section>
<?php require __DIR__ . "/../../partials/footer.php" ?>