<?php
$title = "Singular | Frequência - Controle de Frequência";
$tab = "attendance";
$subtab = "attendance-tracking";

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
<section>
  <div class="flex flex-col">
    <h1 class="font-semibold text-black text-xl mb-4">Controle de Frequência</h1>
    <div class="flex items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path fill="#000000"
          d="M10.825 22q-.675 0-1.162-.45t-.588-1.1L8.85 18.8q-.325-.125-.612-.3t-.563-.375l-1.55.65q-.625.275-1.25.05t-.975-.8l-1.175-2.05q-.35-.575-.2-1.225t.675-1.075l1.325-1Q4.5 12.5 4.5 12.337v-.675q0-.162.025-.337l-1.325-1Q2.675 9.9 2.525 9.25t.2-1.225L3.9 5.975q.35-.575.975-.8t1.25.05l1.55.65q.275-.2.575-.375t.6-.3l.225-1.65q.1-.65.588-1.1T10.825 2h2.35q.675 0 1.163.45t.587 1.1l.225 1.65q.325.125.613.3t.562.375l1.55-.65q.625-.275 1.25-.05t.975.8l1.175 2.05q.35.575.2 1.225t-.675 1.075l-1.325 1q.025.175.025.338v.674q0 .163-.05.338l1.325 1q.525.425.675 1.075t-.2 1.225l-1.2 2.05q-.35.575-.975.8t-1.25-.05l-1.5-.65q-.275.2-.575.375t-.6.3l-.225 1.65q-.1.65-.587 1.1t-1.163.45zM11 20h1.975l.35-2.65q.775-.2 1.438-.587t1.212-.938l2.475 1.025l.975-1.7l-2.15-1.625q.125-.35.175-.737T17.5 12t-.05-.787t-.175-.738l2.15-1.625l-.975-1.7l-2.475 1.05q-.55-.575-1.212-.962t-1.438-.588L13 4h-1.975l-.35 2.65q-.775.2-1.437.588t-1.213.937L5.55 7.15l-.975 1.7l2.15 1.6q-.125.375-.175.75t-.05.8q0 .4.05.775t.175.75l-2.15 1.625l.975 1.7l2.475-1.05q.55.575 1.213.963t1.437.587zm1.05-4.5q1.45 0 2.475-1.025T15.55 12t-1.025-2.475T12.05 8.5q-1.475 0-2.487 1.025T8.55 12t1.013 2.475T12.05 15.5M12 12" />
      </svg>
      <h1 class="text-gray-500 font-semibold">Configurar</h1>
    </div>

    <form class="grid grid-cols-3 gap-8 mt-4">
      <script>
        window.addEventListener('load', function() {
          flatpickr('#date', {
            monthSelectorType: 'static'
          })
        })
      </script>
      <div class="w-full text-gray-500">
        <label class="label-text text-gray-500" for="date">Data</label>
        <input name="date" type="text" placeholder="dd/mm/aaaa"
          class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
          id="date" />
      </div>
      <div class="w-full text-gray-500">
        <label class="label-text text-gray-500" for="classroomgroup">Turma</label>
        <select name="classroomgroup"
          class="bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39] select"
          id="classroomgroup">
          <option>Engenharia de Software VIII</option>
          <option>Cybersegurança</option>
        </select>
      </div>
      <div class="w-full text-gray-500">
        <label class="label-text text-gray-500" for="course">Curso</label>
        <select name="course"
          class="bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39] select"
          id="course">
          <option>Análise e Desenvolvimento de Sistemas</option>
          <option>Mecatrônica</option>
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
        <label class="label-text text-gray-500" for="teather">Professor</label>
        <select name="teatcher"
          class="bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39] select"
          id="teatcher">
          <option>José</option>
          <option>Maria</option>
        </select>
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
</section>
<section>
  <div class="w-full overflow-x-auto mt-4">
    <table class="text-black table border border-gray-300">
      <thead class="border-gray-300">
        <tr class="border-b border-gray-300">
          <th class="text-[#747171] w-[30px]">ID</th>
          <th class="text-[#747171]">Aluno</th>
          <th class="text-[#747171] w-[30px]">P</th>
          <th class="text-[#747171] w-[30px]">F</th>
          <th class="text-[#747171] w-[30px]">FJ</th>
          <th class="text-[#747171] w-[30px]">A</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($students as $student): ?>
          <tr class="border-b border-gray-300">
            <td><?= $student['id']; ?></td>
            <td><?= $student['name']; ?></td>
            <td>
              <div class="flex items-center gap-1">
                <input type="checkbox" class="checkbox checkbox-success" id="checkboxSuccess" checked />
              </div>
            </td>
            <td>
              <div class="flex items-center gap-1">
                <input type="checkbox" class="checkbox checkbox-success" id="checkboxSuccess" checked />
              </div>
            </td>
            <td>
              <div class="flex items-center gap-1">
                <input type="checkbox" class="checkbox checkbox-success" id="checkboxSuccess" checked />
              </div>
            </td>
            <td>
              <div class="flex items-center gap-1">
                <input type="checkbox" class="checkbox checkbox-success" id="checkboxSuccess" checked />
              </div>
            </td>

          </tr>


        <?php endforeach; ?>


      </tbody>
    </table>
  </div>
  <div class="col-end-4 flex items-end justify-end gap-4 mt-4">
    <button class="btn bg-black text-white w-24">Salvar</button>
  </div>
</section>
<?php require __DIR__ . "/../../partials/footer.php" ?>