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
                <div class="font-semibold text-black text-xl mb-4 grow-0 mr-2">Cronograma de aulas</div>
                <div class="h-0.5 bg-black grow-1 mb-3"></div>
            </div>

            <div class="flex gap-3 flex-wrap">

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 w-90 flex">
                    <div class="stat w-90 flex-col flex gap-5 justify-between ">
                        <div>
                            <div class=" text-2xl">Matemática - 020</div>
                            <p class="">Os alunos assumem o papel de assistentes de um detetive que precisa resolver um caso misterioso usando conceitos matemáticos. Eles devem identificar padrões e completar sequências numéricas para solucionar o mistério. </p>
                        </div>

                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 07:00</p>
                            <p class="text-gray-400 text-md ">Prof: Thales</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 w-90 flex">
                    <div class="stat w-90 flex-col flex gap-5 justify-between ">
                        <div>
                            <div class=" text-2xl">Português - 019</div>
                            <p>Analisando poemas e músicas, os alunos identificam e discutem o uso de figuras de linguagem, como metáforas e hipérboles, em diferentes contextos literários. </p>
                        </div>

                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 07:45</p>
                            <p class="text-gray-400 text-md ">Prof: Junior</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white text-gray-500 border rounded-md border-gray-300 w-90 flex">
                    <div class="stat w-90 flex-col flex gap-5 justify-between">
                        <div>
                            <div class="text-2xl">Química - 030</div>
                            <p>Os alunos irão explorar reações químicas do cotidiano, analisando como diferentes substâncias reagem entre si, além de entender as leis que regem essas reações.</p>
                        </div>

                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 08:00</p>
                            <p class="text-gray-400 text-md">Prof: Amanda</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 w-90 flex">
                    <div class="stat w-90 flex-col flex gap-5 justify-between">
                        <div>
                            <div class="text-2xl">História - 015</div>
                            <p>Explorando eventos históricos e suas causas, os alunos irão analisar as consequências de conflitos importantes e como eles moldaram o mundo moderno.</p>
                        </div>

                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 08:45</p>
                            <p class="text-gray-400 text-md">Prof: Carlos</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 w-90 flex">
                    <div class="stat w-90 flex-col flex gap-5 justify-between">
                        <div>
                            <div class="text-2xl">Geografia - 025</div>
                            <p>Os alunos irão estudar os diferentes biomas do planeta e suas características, entendendo a relação entre os ecossistemas e as ações humanas.</p>
                        </div>

                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 09:00</p>
                            <p class="text-gray-400 text-md">Prof: Roberta</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 w-90 flex">
                    <div class="stat w-90 flex-col flex gap-5 justify-between">
                        <div>
                            <div class="text-2xl">Física - 035</div>
                            <p>Em uma aula interativa, os alunos irão realizar experimentos simples para entender as leis do movimento e a física por trás de objetos em movimento.</p>
                        </div>

                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 09:45</p>
                            <p class="text-gray-400 text-md">Prof: Lucas</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 w-90 flex">
                    <div class="stat w-90 flex-col flex gap-5 justify-between">
                        <div>
                            <div class="text-2xl">Inglês - 045</div>
                            <p>Os alunos irão praticar diálogos em inglês, focando na comunicação em situações cotidianas, como fazer compras, pedir direções e fazer reservas.</p>
                        </div>

                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 10:00</p>
                            <p class="text-gray-400 text-md">Prof: Elizabeth</p>
                        </div>
                    </div>
                </div>


            </div>

        </div>

        <div class="mb-5">
            <div class="flex items-center">
                <div class="font-semibold text-black text-xl mb-4 grow-0 mr-2">Aulas de amanhã</div>
                <div class="h-0.5 bg-black grow-1 mb-3"></div>
            </div>
            <div class="flex gap-3 flex-wrap">

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 w-90 flex">
                    <div class="stat w-90 flex-col flex gap-5 justify-between">
                        <div>
                            <div class="text-2xl">Arte - 050</div>
                            <p>Os alunos irão explorar diferentes técnicas artísticas, como pintura e escultura, e analisarão como a arte pode expressar emoções e transformar a realidade.</p>
                        </div>

                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 10:30</p>
                            <p class="text-gray-400 text-md">Prof: Sofia</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 w-90 flex">
                    <div class="stat w-90 flex-col flex gap-5 justify-between">
                        <div>
                            <div class="text-2xl">Biologia - 055</div>
                            <p>Os alunos estudarão o ciclo da água, explorando como ele afeta a vida na Terra e o impacto das ações humanas sobre o meio ambiente.</p>
                        </div>

                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 11:00</p>
                            <p class="text-gray-400 text-md">Prof: Mariana</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 w-90 flex">
                    <div class="stat w-90 flex-col flex gap-5 justify-between">
                        <div>
                            <div class="text-2xl">Educação Física - 060</div>
                            <p>Os alunos aprenderão sobre a importância de manter uma vida ativa e saudável, participando de atividades físicas que estimulam o trabalho em equipe e a resistência física.</p>
                        </div>

                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 11:30</p>
                            <p class="text-gray-400 text-md">Prof: João</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 w-90 flex">
                    <div class="stat w-90 flex-col flex gap-5 justify-between">
                        <div>
                            <div class="text-2xl">Filosofia - 065</div>
                            <p>Os alunos irão analisar conceitos fundamentais da filosofia, como ética, lógica e pensamento crítico, e como eles influenciam a sociedade atual.</p>
                        </div>

                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 12:00</p>
                            <p class="text-gray-400 text-md">Prof: Roberto</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 w-90 flex">
                    <div class="stat w-90 flex-col flex gap-5 justify-between">
                        <div>
                            <div class="text-2xl">Sociologia - 070</div>
                            <p>Explorando o comportamento social, os alunos irão discutir como as normas e os valores influenciam a dinâmica das sociedades, além de refletir sobre desigualdades sociais.</p>
                        </div>

                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 12:30</p>
                            <p class="text-gray-400 text-md">Prof: Júlia</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 w-90 flex">
                    <div class="stat w-90 flex-col flex gap-5 justify-between">
                        <div>
                            <div class="text-2xl">Lógica de Programação - 075</div>
                            <p>Os alunos irão aprender os fundamentos da lógica computacional e como criar algoritmos básicos para resolver problemas de programação.</p>
                        </div>

                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 13:00</p>
                            <p class="text-gray-400 text-md">Prof: Felipe</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-gray-500 border rounded-md border-gray-300 w-90 flex">
                    <div class="stat w-90 flex-col flex gap-5 justify-between">
                        <div>
                            <div class="text-2xl">Literatura - 080</div>
                            <p>Durante a aula, os alunos irão estudar obras clássicas da literatura brasileira e internacional, discutindo suas influências culturais e históricas.</p>
                        </div>

                        <div class="flex justify-between">
                            <p class="text-gray-400 text-md">Horário: 13:30</p>
                            <p class="text-gray-400 text-md">Prof: Eduardo</p>
                        </div>
                    </div>
                </div>


            </div>

        </div>

        <div class="mb-5">
            <div class="flex items-center">
                <div class="font-semibold text-black text-xl mb-4 grow-0 mr-2">Aulas passadas</div>
                <div class="h-0.5 bg-black grow-1 mb-3"></div>
            </div>
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