<?php
$title = "Singular | Configurações - Configurações de usuário";
$tab = "settings";
$subtab = "settings-user";
?>
<?php require __DIR__ . "/../../partials/header.php" ?>
<div class="flex items-center  gap-4 w-full">
  <h1 class="font-semibold text-black text-xl mb-4">Configurações de usuário</h1>
  <div class="flex items-center gap-4 mb-3">
    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
        class="icon-[tabler--pencil] size-5"></span></button>
  </div>
</div>
<div class="flex items-end gap-4 w-full">


  <div class="flex flex-col w-1/2 text-gray-500">
    <label class="label-text text-gray-500" for="discipline">Nome</label>
    <input type="text" placeholder="Daniel Vieira Gonçalves"
      class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
      id="name" />
    <label class="label-text text-gray-500" for="discipline">Email</label>
    <input type="text" placeholder="coordenador@coordenador.sanquim.com.br"
      class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
      id="name" />
    <label class="label-text text-gray-500" for="discipline">CEP</label>
    <input type="text" placeholder="13762-219"
      class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
      id="name" />
    <label class="label-text text-gray-500" for="discipline">Logradouro</label>
    <input type="text" placeholder="Rua João Cunha, 423"
      class="input bg-white text-gray-500 placeholder:text-gray-400 border-gray-300 focus:outline-[#F73C39]"
      id="name" />
    <label class="label-text text-gray-500" for="state">Estado</label>
    <select name="state"
      class="bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39] select"
      id="state">
      <option value="" selected disabled>UF</option>
      <option value="AC">AC</option>
      <option value="AL">AL</option>
      <option value="AP">AP</option>
      <option value="AM">AM</option>
      <option value="BA">BA</option>
      <option value="CE">CE</option>
      <option value="DF">DF</option>
      <option value="ES">ES</option>
      <option value="GO">GO</option>
      <option value="MA">MA</option>
      <option value="MT">MT</option>
      <option value="MS">MS</option>
      <option value="MG">MG</option>
      <option value="PA">PA</option>
      <option value="PB">PB</option>
      <option value="PR">PR</option>
      <option value="PE">PE</option>
      <option value="PI">PI</option>
      <option value="RJ">RJ</option>
      <option value="RN">RN</option>
      <option value="RS">RS</option>
      <option value="RO">RO</option>
      <option value="RR">RR</option>
      <option value="SC">SC</option>
      <option value="SP">SP</option>
      <option value="SE">SE</option>
      <option value="TO">TO</option>
    </select>
    <label class="label-text text-gray-500" for="city">Cidade</label>
    <select name="city"
      class="bg-white text-gray-500 placeholder:text-gray-400 focus:border-none border-gray-300 focus:outline-[#F73C39] select"
      id="city">
      <option value="" selected disabled>Selecione uma cidade</option>
      <option value="São Paulo">São Paulo</option>
      <option value="Campinas">Campinas</option>
      <option value="São Bernardo do Campo">São Bernardo do Campo</option>
      <option value="Santo André">Santo André</option>
      <option value="Guarulhos">Guarulhos</option>
      <option value="Osasco">Osasco</option>
      <option value="Ribeirão Preto">Ribeirão Preto</option>
      <option value="São José dos Campos">São José dos Campos</option>
      <option value="Sorocaba">Sorocaba</option>
      <option value="Santos">Santos</option>
      <option value="Mogi das Cruzes">Mogi das Cruzes</option>
      <option value="Diadema">Diadema</option>
      <option value="Carapicuíba">Carapicuíba</option>
      <option value="Jundiaí">Jundiaí</option>
      <option value="Bauru">Bauru</option>
      <option value="Piracicaba">Piracicaba</option>
      <option value="Itaquaquecetuba">Itaquaquecetuba</option>
      <option value="Franca">Franca</option>
      <option value="Taubaté">Taubaté</option>
      <option value="Barueri">Barueri</option>
      <option value="Suzano">Suzano</option>
      <option value="Taboão da Serra">Taboão da Serra</option>
      <option value="Sumaré">Sumaré</option>
      <option value="Cotia">Cotia</option>
      <option value="Itapevi">Itapevi</option>
      <option value="Itu">Itu</option>
      <option value="Jacareí">Jacareí</option>
      <option value="Mauá">Mauá</option>
      <option value="Americana">Americana</option>
      <option value="Limeira">Limeira</option>
    </select>

  </div>


</div>
<div class="col-end-4  justify-end gap-4 mt-4">
  <button class="btn bg-black text-white w-24">Salvar</button>
</div>
<?php require __DIR__ . "/../../partials/footer.php" ?>