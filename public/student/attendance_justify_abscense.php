<?php
$title = "Singular | Matrículas - Matricular Aluno";
$tab = "attendance";
$subtab = "attendance-justify-abscense";
?>
<?php require __DIR__ . "/../../partials/header.php" ?>
<h1 class="font-semibold text-black text-xl mb-4">Justificar Ausência</h1>

<div class="flex items-end gap-6 w-full">
    <div class="w-1/3 text-gray-500">

        <label class="label-text text-gray-500" for="discipline">Data</label>
        <input type="date"
            class="input mb-4 bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
            id="name" />
        <label class="label-text text-gray-500" for="discipline">Justifique sua ausência</label>
        <textarea class="textarea bg-white max-w-sm" aria-label="Textarea"></textarea>
    </div>
</div>

<div class="flex items-end gap-4 w-full">
    <div class="w-1/3 text-gray-500">
        <label label-text text-gray-500" for="discipline">Anexar arquivo</label>
        
        <input type="file"
            class="input bg-white text-gray-500 placeholder:text-gray-400 border border-gray-300 focus:outline-[#F73C39]
         file:bg-[#388F8E] file:text-white file:rounded-md file:px-4 file:py-2 file:border-0 file:cursor-pointer"
            id="name" />
            
    </div>
    <div class="flex items-center gap-4">
        <button class="btn bg-black text-white w-24">Enviar</button>
    </div>
</div>

<?php require __DIR__ . "/../../partials/footer.php" ?>