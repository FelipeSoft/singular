<?php
$title = "Singular | Matrículas - Cronograma de Aulas";
$tab = "class";
$subtab = "class-timeline";
?>
<?php require __DIR__ . "/../../partials/header.php" ?>
<section>
    <h1 class="text-black text-3xl font-semibold mb-5"> Aulas de hoje </H1>

    <div>
        <form class="flex flex-wrap gap-4">
            <script>
                window.addEventListener('load', function() {
                    flatpickr('#date', {
                        monthSelectorType: 'static'
                    })
                })
            </script>

    </div>

    </form>

    <section>
        <div class="mb-5">
            <div class="flex items-center">
                <div class="font-semibold text-black text-xl mb-4 w-3/20">Cronograma de aulas</div>
                <div class="w-full border-b border-black"> </div>
            </div>

            <div class="flex gap-3 flex-wrap">

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="stat w-90 flex-col flex gap-5 ">
                        <div class=" text-2xl">Matemática - 020</div>
                        <p>Os alunos assumem o papel de assistentes de um detetive que precisa resolver um caso misterioso usando conceitos matemáticos. Eles devem identificar padrões e completar sequências numéricas para solucionar o mistério. </p>
                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 07:00</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="flex-col gap-5">

                        <div class="stat w-90 flex-col flex gap-5 h-1/3 ">
                            <div class=" text-2xl">Português - 019</div>
                            <p>Analisando poemas e músicas, os alunos identificam e discutem o uso de figuras de linguagem, como metáforas e hipérboles, em diferentes contextos literários. </p>
                        </div>

                        <div class="h-2/3"> . </div>

                        <div class="flex justify-between stat w-90 gap-5 h-1/3">
                            <p class="text-gray-400 text-md">Horário: 07:45</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>

                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="flex-col justify-between">
                        <div class="stat w-90 flex-col flex gap-5 ">
                            <div class=" text-2xl">Filosofia - 005</div>
                            <p>Através de experimentos simples, como a queda simultânea de uma pena e uma pedra, os alunos observam e discutem as leis do movimento e a independência da massa na aceleração gravitacional.</p>
                            <div class="flex justify-between">
                                <p class="text-gray-400 text-md">Horário: 08:30</p>
                                <p class="text-gray-400 text-md ">Prof: Thales</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="stat w-90 flex-col flex gap-5 ">
                        <div class=" text-2xl">Filosofia - 005</div>
                        <p>conteúdo bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 08:30</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="stat w-90 flex-col flex gap-5 ">
                        <div class=" text-2xl">Filosofia - 005</div>
                        <p>conteúdo bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 08:30</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="stat w-90 flex-col flex gap-5 ">
                        <div class=" text-2xl">Filosofia - 005</div>
                        <p>conteúdo bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 08:30</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="stat w-90 flex-col flex gap-5 ">
                        <div class=" text-2xl">Filosofia - 005</div>
                        <p>conteúdo bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 08:30</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="mb-5">
            <h1 class="font-semibold text-black text-xl mb-4">Aulas de amanhã</h1>

            <div class="flex gap-3 flex-wrap">

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="stat w-90 flex-col flex gap-5 ">
                        <div class=" text-2xl">Matemática - 020</div>
                        <p>conteúdo bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 07:00</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="stat w-90 flex-col flex gap-5 ">
                        <div class=" text-2xl">Português - 019</div>
                        <p>conteúdo bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 07:45</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="stat w-90 flex-col flex gap-5 ">
                        <div class=" text-2xl">Filosofia - 005</div>
                        <p>conteúdo bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 08:30</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="stat w-90 flex-col flex gap-5 ">
                        <div class=" text-2xl">Filosofia - 005</div>
                        <p>conteúdo bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 08:30</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="stat w-90 flex-col flex gap-5 ">
                        <div class=" text-2xl">Filosofia - 005</div>
                        <p>conteúdo bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 08:30</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="stat w-90 flex-col flex gap-5 ">
                        <div class=" text-2xl">Filosofia - 005</div>
                        <p>conteúdo bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 08:30</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="stat w-90 flex-col flex gap-5 ">
                        <div class=" text-2xl">Filosofia - 005</div>
                        <p>conteúdo bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 08:30</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="mb-5">
            <h1 class="font-semibold text-black text-xl mb-4">Aulas passadas</h1>

            <div class="flex gap-3 flex-wrap">

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="stat w-90 flex-col flex gap-5 ">
                        <div class=" text-2xl">Matemática - 020</div>
                        <p>conteúdo bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 07:00</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="stat w-90 flex-col flex gap-5 ">
                        <div class=" text-2xl">Português - 019</div>
                        <p>conteúdo bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 07:45</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="stat w-90 flex-col flex gap-5 ">
                        <div class=" text-2xl">Filosofia - 005</div>
                        <p>conteúdo bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 08:30</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="stat w-90 flex-col flex gap-5 ">
                        <div class=" text-2xl">Filosofia - 005</div>
                        <p>conteúdo bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 08:30</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="stat w-90 flex-col flex gap-5 ">
                        <div class=" text-2xl">Filosofia - 005</div>
                        <p>conteúdo bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 08:30</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="stat w-90 flex-col flex gap-5 ">
                        <div class=" text-2xl">Filosofia - 005</div>
                        <p>conteúdo bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 08:30</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 ">
                    <div class="stat w-90 flex-col flex gap-5 ">
                        <div class=" text-2xl">Filosofia - 005</div>
                        <p>conteúdo bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 08:30</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        </div>
    </section>
    <div class="h-25"></div>
    </div>
    </div>
</section>
<?php require __DIR__ . "/../../partials/footer.php" ?>