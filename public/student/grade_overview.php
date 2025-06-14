<?php
$title = "Singular | Notas - Visão Geral";
$tab = "grade";
$subtab = "grade-overview";
?>
<?php require __DIR__ . "/../../partials/header.php" ?>
<form class="flex flex-wrap gap-4">
    <script>
        window.addEventListener('load', function () {
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
        <div class="w-1/2 text-gray-500 mb-5">
            <label class="label-text text-gray-500" for="discipline">Disciplina</label>
            <select
                class="bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39] select"
                id="discipline">
                <option>Engenharia de Software 1</option>
                <option>Algoritimos e Lógica de Programação</option>
                <option>Matemática Discreta</option>
            </select>
        </div>

        <div class="flex items-center gap-4 mb-5">
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
<div class="w-full  overflow-x-auto mt-4">
    <table class="text-black table border border-gray-300">
        <thead class="border-gray-300">
            <tr class="border-b border-gray-300">
                <th class="text-black">Provas</th>
                <th class="text-black w-[500px]">Nota</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-300">
                <td>Nota 1</td>
                <td>8.9</td>

            </tr>
            <tr class="border-b border-gray-300">
                <td>Nota 2</td>
                <td>7.2</td>

            </tr>
            <tr class="border-b border-gray-300">
                <td>Nota 3</td>
                <td>4.0</td>

            </tr>

        </tbody>
    </table class="text-black table border border-gray-300">
    <table class="text-black table border border-none">
        <thead class="border-gray-300">
            <tr class="border-b border-gray-300">
                <th class="text-black"></th>
                <th class="text-black w-[500px]"></th>
            </tr>
        </thead>
    </table class="text-black table border border-none">

    <table class="text-black table border border-gray-300">
        <thead class="border-gray-300">
            <tr class="border-b border-gray-300">
                <th class="text-black"></th>
                <th class="text-black w-[500px]">Média</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-300">
                <td></td>
                <td>6.7</td>

            </tr>

        </tbody>
    </table class="text-black table border border-gray-300">

</div>
</div>
<?php require __DIR__ . "/../../partials/footer.php" ?>