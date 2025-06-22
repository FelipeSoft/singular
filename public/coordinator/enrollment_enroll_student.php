<?php
$title = "Singular | Matrículas - Matricular Aluno";
$tab = "enrollment";
$subtab = "enroll-student";
?>
<?php require __DIR__ . "/../../partials/header.php" ?>
<section>
    <h1 class="font-semibold text-black text-xl mb-4">Matricular Aluno</h1>
    <div class="w-full">
        <div class="flex flex-wrap gap-4">
            <div class="w-1/2 text-gray-500">
                <label class="label-text text-gray-500" for="discipline">Nome</label>
                <input type="text" placeholder="Fulano de tal"
                    class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
                    id="name" />
            </div>
            <div class="w-1/2 text-gray-500">
                <label class="label-text text-gray-500" for="discipline">CPF</label>
                <input type="text" placeholder="444.444.444-22"
                    class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
                    id="name" />
            </div>
            <div class="w-1/2 text-gray-500">
                <label class="label-text text-gray-500" for="discipline">RM</label>
                <input type="text" placeholder="123.344.32.2"
                    class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
                    id="name" />
            </div>
            <div class="w-1/2 text-gray-500">
                <label class="label-text text-gray-500" for="course">Curso</label>
                <select name="course"
                    class="bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39] select"
                    id="course">
                    <option>Ensino Médio | Pré-vestibulinho</option>
                    <option>Pré-vestibular</option>
                    <option>Empreendedorismo</option>
                </select>
            </div>
            <div class="w-1/2 text-gray-500">
                <label class="label-text text-gray-500" for="classroomgroup">Turma</label>
                <select name="classroomgroup"
                    class="bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39] select"
                    id="classroomgroup">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
            </div>
        </div>

        <button class="btn mt-4 flex flex-end bg-black text-white w-24">Registrar</button>
</section>
<?php require __DIR__ . "/../../partials/footer.php" ?>