<?php
$title = "Singular | Usuários - Gestão de Usuários";
$tab = "users";
$subtab = "users-management";

require_once __DIR__ . "/../../bootstrap/connection.php";
$usersPerPage = 20;
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$offset = ($page - 1) * $usersPerPage;

$sql = "SELECT id, name, email FROM users LIMIT :limit OFFSET :offset";
$statement = $connection->prepare($sql);
$statement->bindValue(':limit', $usersPerPage, PDO::PARAM_INT);
$statement->bindValue(':offset', $offset, PDO::PARAM_INT);
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

$totalUsers = $connection->query("SELECT COUNT(*) FROM users")->fetchColumn();
$totalPages = ceil($totalUsers / $usersPerPage);
?>
<?php require __DIR__ . "/../../partials/header.php" ?>
<section class="h-full">
    <h1 class="font-semibold text-black text-xl mb-4">Gestão de Usuários</h1>
    <div>
        <div class="flex items-center justify-between w-full">
            <h2 class="text-black flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10.825 22q-.675 0-1.162-.45t-.588-1.1L8.85 18.8q-.325-.125-.612-.3t-.563-.375l-1.55.65q-.625.275-1.25.05t-.975-.8l-1.175-2.05q-.35-.575-.2-1.225t.675-1.075l1.325-1Q4.5 12.5 4.5 12.337v-.675q0-.162.025-.337l-1.325-1Q2.675 9.9 2.525 9.25t.2-1.225L3.9 5.975q.35-.575.975-.8t1.25.05l1.55.65q.275-.2.575-.375t.6-.3l.225-1.65q.1-.65.588-1.1T10.825 2h2.35q.675 0 1.163.45t.587 1.1l.225 1.65q.325.125.613.3t.562.375l1.55-.65q.625-.275 1.25-.05t.975.8l1.175 2.05q.35.575.2 1.225t-.675 1.075l-1.325 1q.025.175.025.338v.674q0 .163-.05.338l1.325 1q.525.425.675 1.075t-.2 1.225l-1.2 2.05q-.35.575-.975.8t-1.25-.05l-1.5-.65q-.275.2-.575.375t-.6.3l-.225 1.65q-.1.65-.587 1.1t-1.163.45zM11 20h1.975l.35-2.65q.775-.2 1.438-.587t1.212-.938l2.475 1.025l.975-1.7l-2.15-1.625q.125-.35.175-.737T17.5 12t-.05-.787t-.175-.738l2.15-1.625l-.975-1.7l-2.475 1.05q-.55-.575-1.212-.962t-1.438-.588L13 4h-1.975l-.35 2.65q-.775.2-1.437.588t-1.213.937L5.55 7.15l-.975 1.7l2.15 1.6q-.125.375-.175.75t-.05.8q0 .4.05.775t.175.75l-2.15 1.625l.975 1.7l2.475-1.05q.55.575 1.213.963t1.437.587zm1.05-4.5q1.45 0 2.475-1.025T15.55 12t-1.025-2.475T12.05 8.5q-1.475 0-2.487 1.025T8.55 12t1.013 2.475T12.05 15.5M12 12" />
                </svg>
                <span class="text-gray-500">Manutenção</span>
            </h2>
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

                <h2 class="font-semibold text-black text-xl" id="active_mode">Modo ativo: <?= !empty($_SESSION["form_data"]["id"]) ? "Edição" : "Criação" ?></h2>
            </div>
        </div>
        <?php require_once __DIR__ . "/../../partials/toast.php"; ?>
        <form action="<?= !empty($_SESSION["form_data"]["id"]) ? "/actions/users/update_user.php?userId=" . $_SESSION["form_data"]["id"] : "/actions/users/create_user.php" ?>" method="POST" class="flex flex-wrap gap-4">
            <script>
                window.addEventListener('load', function() {
                    flatpickr('#date', {
                        monthSelectorType: 'static'
                    })
                })
            </script>
            <div class="w-[200px] text-gray-500">
                <label hidden class="label-text text-gray-500" for="user_id">ID</label>
                <input hidden value="<?= $_SESSION["form_data"]["id"] ?? "" ?>" type="text"
                    class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
                    id="user_id" name="user_id" />
            </div>
            <div class="flex items-center gap-4 w-full">
                <div class="flex items-center gap-4 w-full">
                    <div class="w-1/3 text-gray-500">
                        <label class="label-text text-gray-500" for="user_name"><span class="text-rose-700 mr-0.5">*</span>Nome</label>
                        <input value="<?= $_SESSION["form_data"]["name"] ?? "" ?>" type="text" placeholder="ex.: João Silva"
                            class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
                            id="user_name" name="user_name" />
                    </div>
                    <div class="w-1/3 text-gray-500">
                        <label class="label-text text-gray-500" for="user_email"><span class="text-rose-700 mr-0.5">*</span>E-mail</label>
                        <input value="<?= $_SESSION["form_data"]["email"] ?? "" ?>" type="text" placeholder="ex.: joao.silva@teste.com.br"
                            class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
                            id="user_email" name="user_email" />
                    </div>
                    <div class="w-1/3 text-gray-500">
                        <label class="label-text text-gray-500" for="user_level">
                            <span class="text-rose-700 mr-0.5">*</span>Perfil
                        </label>
                        <?php $selectedLevel = $_SESSION["form_data"]["level"] ?? ""; ?>
                        <select id="user_level" name="user_level" class="bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39] select">
                            <option value="1" <?= $selectedLevel == "1" ? "selected" : "" ?>>Aluno</option>
                            <option value="2" <?= $selectedLevel == "2" ? "selected" : "" ?>>Professor</option>
                            <option value="3" <?= $selectedLevel == "3" ? "selected" : "" ?>>Coordenador</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="flex items-end gap-4 w-full">
                <div class="w-1/2 text-gray-500">
                    <label class="label-text text-gray-500" for="user_password"><span class="text-rose-700 mr-0.5">*</span>Senha</label>
                    <input type="password"
                        class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
                        id="user_password" name="user_password" />
                </div>
                <div class="w-1/2 text-gray-500">
                    <label class="label-text text-gray-500" for="discipline"><span class="text-rose-700 mr-0.5">*</span>Confirmar Senha</label>
                    <input type="password"
                        class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
                        id="user_confirm_password" name="user_confirm_password" />
                </div>
                <div class="flex items-center gap-4">
                    <a href="/actions/users/clear_fields.php" class="btn bg-gray-300 text-black w-24">Cancelar</a>
                    <button class="btn bg-black text-white w-24">Salvar</button>
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
        <form class="flex flex-wrap gap-4 mt-4">
            <div class="flex items-end gap-4 w-full">
                <div class="w-1/2 text-gray-500">
                    <label class="label-text text-gray-500" for="user_level_filter"><span class="text-rose-700 mr-0.5">*</span>Perfil</label>
                    <select id="user_level_filter" name="user_level_filter" class="bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39] select">
                        <option value="1">Aluno</option>
                        <option value="2">Professor</option>
                        <option value="3" selected>Coordenador</option>
                    </select>
                </div>
                <div class="w-1/2 text-gray-500">
                    <label class="label-text text-gray-500" for="discipline">E-mail</label>
                    <input type="text" placeholder="ex.: joao.silva@teste.com.br"
                        class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
                        id="user_name_filter" />
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
                        <th class="text-black">E-mail</th>
                        <th class="text-black">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr class="border-b border-gray-300">
                            <td><?= $user["id"] ?></td>
                            <td><?= $user["name"] ?></td>
                            <td><?= $user["email"] ?></td>
                            <td>
                                <a href="/actions/users/set_user_for_update_mode.php?userId=<?= $user["id"] ?>" class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--pencil] size-5"></span></a>
                                <a href="/actions/users/delete_user.php?userId=<?= $user["id"] ?>" class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--trash] size-5"></span></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="flex justify-end mt-4">
                <nav class="flex items-center gap-x-1">
                    <?php if ($page > 1): ?>
                        <a href="?page=<?= $page - 1 ?>" class="btn btn-text">Anterior</a>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <a href="?page=<?= $i ?>"
                            class="btn btn-text btn-square <?= $i === $page ? 'bg-[#37908e] text-white' : '' ?>"
                            aria-current="<?= $i === $page ? 'page' : 'false' ?>">
                            <?= $i ?>
                        </a>
                    <?php endfor; ?>

                    <?php if ($page < $totalPages): ?>
                        <a href="?page=<?= $page + 1 ?>" class="btn btn-text">Próximo</a>
                    <?php endif; ?>
                </nav>
            </div>
        </div>
    </div>
</section>
<?php require __DIR__ . "/../../partials/footer.php" ?>