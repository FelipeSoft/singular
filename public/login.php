<!DOCTYPE html>
<html lang="pt-br" class="w-full">

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

<body>
    <div id="background" class="animate-gradient flex h-auto min-h-screen items-center justify-center overflow-x-hidden py-10">
    <div class="relative flex items-center justify-center px-4 sm:px-6 lg:px-8">
      
      <div class="bg-gray-300/10 shadow-base-300/20 z-1 w-full space-y-6 rounded-xl p-6 shadow-md sm:min-w-md lg:p-8">
        <div class="flex items-center justify-center gap-3">
            <a href="/home" class=" h-[70px] flex items-center">
                <img class=" ml-3 object-contain w-[200px]" src="./images/Sanquim.png" alt="Singular">
            </a>
        </div>
        <div>
          <h3 class="text-gray-700 mb-1.5 text-2xl font-semibold text-center">Logar no Singular</h3>
        </div>
        <div class="space-y-4">
          <form class="mb-4 space-y-4" onsubmit="return false;">
            <div>
              <label class="label-text text-gray-700" for="userEmail">Email*</label>
              <input  type="email" placeholder="Enter your email address" class="placeholder:text-gray-500 border px-3 py-1.5 w-full rounded-md bg-gray-300/10 inset-shadow-sm inset-shadow-gray-700/10 border-gray-600" id="userEmail" required />
            </div>
            <div>
              <label class="label-text text-gray-700" for="userPassword">Senha*</label>
              <div class="border px-3 py-1.5 w-full rounded-md bg-gray-300/10 inset-shadow-sm inset-shadow-gray-700/10 border-gray-600">
                <input id="userPassword" type="password" placeholder="············" required />
                <button
                  type="button"
                  data-toggle-password='{ "target": "#userPassword" }'
                  class="flex cursor-pointer"
                  aria-label="userPassword"
                >
                </button>
                
              </div>
              
            </div>
            <div class="flex items-center justify-between gap-y-2">
              <div class="flex items-center gap-2">
                <input type="checkbox" class="checkbox checkbox-primary" id="rememberMe" />
                <label class="label-text text-base-content/80 p-0 text-base" for="rememberMe">Remember Me</label>
              </div>
              <a href="#" class="link link-animated link-primary font-normal">Forgot Password?</a>
            </div>
            <button class="bg-[#36918F] btn btn-lg btn-primary btn-block">Sign in to FlyonUI</button>
          </form>
          <p class="text-base-content/80 mb-4 text-center">
            New on our platform?
            <a href="#" class="link link-animated link-primary font-normal">Create an account</a>
          </p>
          <div class="divider">or</div>
        </div>
      </div>
    </div>
  </div>
  
<script src="./assets/js/flyonui.js"></script>
<script src="./assets/js/flatpickr.js"></script>
</body>

</html>