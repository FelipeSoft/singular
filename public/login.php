<!DOCTYPE html>
<html lang="pt-br" class="w-full">
<!-- Hello A-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?? "Singular" ?>
    </title>

    <!-- important links/scripts -->
    <link rel="stylesheet" href="./assets/css/output.css" ?>
    <link rel="stylesheet" href="./assets/css/flatpickr.css" />
    <link rel="stylesheet" href="./assets/css/animations.css" />
</head>

                                                <body class="font-inter overflow-hidden">
    <section class="flex justify-center relative">
      <img class="animate-[pulse_5s_ease-in_infinite_alternate] w-full" src="./images/backgroundLogin.png" alt="gradient background image" class="w-full h-full object-cover fixed">
      <div class="mx-auto max-w-lg px-6 lg:px-8 absolute py-20">
        <img src="./images/Sanquim.png" alt="pagedone logo" width="400" class=" mx-auto lg:mb-11 mb-8 object-cover">
        <div class="rounded-2xl bg-white/30 shadow-xl">
          <form action="" class="lg:p-11 p-7 mx-auto">
            <div class="mb-11">
              <h1 class="text-gray-900 text-center font-manrope text-3xl font-bold leading-10 mb-2">Login</h1>
              
            </div>
            <input type="text" class="w-full h-12 text-gray-900 placeholder:text-gray-400 text-lg font-normal leading-7 rounded-full border-gray-300 border shadow-sm focus:outline-none px-4 mb-6 hover:border-[#E0A400] focus:border-[#E0A400]" placeholder="Digite seu email">
            <input type="text" class="w-full h-12 text-gray-900 placeholder:text-gray-400 text-lg font-normal leading-7 rounded-full border-gray-300 hover:border-[#E0A400] focus:border-[#E0A400] border shadow-sm focus:outline-none px-4 mb-1" placeholder="********">
            <a href="javascript:;" class="flex justify-end mb-6">
              <span  class="text-[#36918f] hover:text-[#E0A400] transition-all duration-500 text-right text-base font-normal leading-6">Esqueceu sua senha?</span>
            </a>
            <button class="w-full h-12 cursor-pointer text-white text-center text-base font-semibold leading-6 rounded-full hover:bg-[#E0A400] transition-all duration-500 bg-[#36918f] shadow-sm mb-11">Entrar</button>
            <a href="javascript:;" class="flex justify-center text-gray-900 text-base font-medium leading-6"> Não possui uma conta? <span class="text-[#36918f] hover:text-[#E0A400] transition-all duration-500 font-semibold pl-3"> Registrar</span>
            </a>
          </form>
        </div>
      </div>
    </section>
                                            
  
<script src="./assets/js/flyonui.js"></script>
<script src="./assets/js/flatpickr.js"></script>
</body>

</html>