<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title','TecShare')</title>
</head>
<body>
    <nav class="h-[78px] lg:h-[128px] bg-white text-black flex items-center px-10 lg:px-20   shadow-md  justify-between">
      <button
  aria-label="Voltar"
  id="back-button"
  class="fixed top-4 left-2 z-50 p-2 rounded-full bg-white shadow-sm hover:bg-gray-100 active:scale-95 transition lg:hidden"
>
  <svg xmlns="http://www.w3.org/2000/svg"
       class="h-6 w-6 text-gray-800"
       fill="none"
       viewBox="0 0 24 24"
       stroke="currentColor"
       stroke-width="2">
    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
  </svg>
</button>
   
   
   
      <!-- Logo à esquerda -->
    <div  class="flex items-center">
        <img src="{{ asset('/logo.png') }}" alt="logo" class=" h-12 md:15 lg:h-20" id="logo-navbar">
    </div>
    

    <!-- Conteúdo (links + botão final) -->
    <div class="hidden lg:flex items-center flex-1 ml-12 justify-end">
        <!-- Links -->
        <ul class="flex gap-8 text-sm font-semibold">
            <li class="hover:text-orange-600 cursor-pointer"><a href="{{ route('home') }}"> INÍCIO</a></li>
            <li class="hover:text-orange-600 cursor-pointer"><a href="{{ route('quemsomos') }}">QUEM SOMOS</a></li>
            <li class="hover:text-orange-600 cursor-pointer whitespace-nowrap">SYSTEM DATA ANALITICS</li>
            <li class="hover:text-orange-600 cursor-pointer">SEGURANÇA</li>
            <li class="hover:text-orange-600 cursor-pointer">ONDE OPERAMOS</li>
            <li class="hover:text-orange-600 cursor-pointer">CONTATO</li>
        </ul>

        <!-- Ícone lupa e botão laranja -->
        <div class="flex items-center gap-2 pr-1">
            <!-- Ícone lupa -->
            <button class="p-2 rounded hover:bg-gray-100 m-3px">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 21l-4.35-4.35M10.5 18a7.5 7.5 0 100-15 7.5 7.5 0 000 15z"/>
                </svg>
            </button>

            <!-- Botão laranja com cadeado -->
            <button class="bg-orange-600 text-white px-5 py-3 rounded hover:bg-orange-800 flex items-center gap-2 whitespace-nowrap text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 11c1.656 0 3 1.343 3 3v3H9v-3c0-1.657 1.343-3 3-3zm0-7a5 5 0 00-5 5v3h10V9a5 5 0 00-5-5z"/>
                </svg>

                ACESSO SAFE DATA ANALITICS
            </button>
        </div>
    </div>

    
   

  <!-- Botão hamburguer/ lupa hamburguer (visível só em telas pequenas) -->
<div class="flex items-center justify-between gap-3 lg:hidden px-3 py-2">
 

 
    <!-- Botão lupa -->
  <button class="p-2 rounded hover:bg-gray-100 focus:outline-none" id="lupa-mobile">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700 ml-4 " fill="none"
         viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M21 21l-4.35-4.35M10.5 18a7.5 7.5 0 100-15 7.5 7.5 0 000 15z"/>
    </svg>
  </button>

  <!-- Botão menu -->
  <button onclick="OpenMobileMenu()" id="menu-btn" class="focus:outline-none">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-700" fill="none" 
         viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16"/>
    </svg>
  </button>
<!--Menu Mobile -->

  <div id="mobile-menu"
       class=" absolute top-12 right-0 bg-white text-gray-700 shadow-lg flex flex-col gap-5 p-4 mt-7 inset-0 bg-[#f5f5f5]
       transition-all
       "
       >
    <div class="relative w-full max-w-md"> <!-- container relativo -->
  <input
    type="text"
    placeholder="pesquisar"
    class="w-full rounded-md border border-gray-300 py-2 pl-4 pr-10 text-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500"
  />
  <button
    type="button"
    class="absolute right-2 top-1/2 -translate-y-1/2 text-gray-500 hover:text-orange-600"
  >
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
         stroke-width="2" stroke="currentColor" class="w-5 h-5">
      <path stroke-linecap="round" stroke-linejoin="round"
            d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1010.5 18a7.5 7.5 0 006.15-3.35z" />
    </svg>
  </button>
</div>

     
    <a href="#" class="py-2 px-3 hover:bg-gray-100 rounded">INÍCIO</a>
    <a href="#" class="py-2 px-3 hover:bg-gray-100 rounded">QUEM SOMOS</a>
    <a href="#" class="py-2 px-3 hover:bg-gray-100 rounded">SYSTEM DATA ANALYTICS</a>
    <a href="#" class="py-2 px-3 hover:bg-gray-100 rounded">COMPLIANCE</a>
    <a href="#" class="py-2 px-3 hover:bg-gray-100 rounded">SEGURANÇA</a>
    <a href="#" class="py-2 px-3 hover:bg-gray-100 rounded">ONDE OPERAMOS</a>
    <a href="#" class="py-2 px-3 hover:bg-gray-100 rounded">CONTATOS</a>
      <button class="bg-orange-600 text-white px-5 py-3 rounded hover:bg-orange-800 flex items-center gap-2 whitespace-nowrap text-sm w-[300px]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 11c1.656 0 3 1.343 3 3v3H9v-3c0-1.657 1.343-3 3-3zm0-7a5 5 0 00-5 5v3h10V9a5 5 0 00-5-5z"/>
                </svg>

                ACESSO SAFE DATA ANALITICS
            </button>
  </div>
</div>


</div>



</nav>




    <!-- Conteudo dinamico -->
    <main>
        @yield('content')
    </main>

    <!-- Footer --->
    <footer class=" bg-[#004A65]">
        
        <div  class="h-100 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 text-white p-12 place-items-center lg:place-items-start ">
                <!--Coluna 1-->

        <div class="mt-3 mb-3 lg:ml-12 text-center">
            <img src="{{ asset('/logo.png') }}" alt="logo" class="h-10">
            <ul>
                <li class="text-lg">Registro</li>
                <li class="text-lg">Rápido</li>
                <li class="text-lg">Fácil &</li>
                <li class="text-lg">Seguro</li>
            </ul>
        </div>

          <!--Coluna 2-->
        <div class="text-center lg:text-left">
           <h1 class="text-2xl mt-3 mb-3">Mapa do site</h1>
            <ul>
                <li class="text-sm mt-1 mb-1" >Pagina inicial</li>
                <li class="text-sm mt-1 mb-1">Quem somos</li>
                <li class="text-sm mt-1 mb-1">System Data Analytics</li>
                <li class="text-sm mt-1 mb-1">Compliance</li>
                <li class="text-sm mt-1 mb-1">Segurança</li>
                <li class="text-sm mt-1 mb-1">Onde operamos</li>
                <li class="text-sm mt-1 mb-1">Privacidade</li>
                <li class="text-sm mt-1 mb-1">Qualidade</li>
                <li class="text-sm mt-1 mb-1">Canal de denúncia</li>
                <li class="text-sm mt-1 mb-1">Contato</li>
            </ul>
        </div>

          <!--Coluna 3-->
        <div class="text-center lg:text-left">
            <h1 class="text-2xl mt-3 mb-3 ">Endereços</h1>
            <h2 class="text-sm mt-1 mb-1">
               <h3>Matriz</h3>
                Rua Senador Milton Campos,35, 7º andar
                <br>
                Vila da Serra, Nova Lima - MG
                <br>
                CEP 34006-050                
            </h2>
            <h2 class="text-sm mt-1 mb-1">
            <h3 class="mt-1 mb-1">Filial</h3>
            Av. Dr Chucri Zaidan, 1240, 16º andar
            <br>
            Chácara Santo Antônio, São Paulo - SP
            <br>
            CEP 04711-130
            </h2>
        </div>

          <!--Coluna 4-->
        <div class="text-center lg:text-left">
            <h1 class="text-2xl  mt-3 mb-3 " >Certificações</h1>
            <div class="grid lg:grid-cols-2 lg:gap-4 grid-cols-4 gap-2 justify-items-between" >
                <img src="{{ asset('/ISO.png') }}" alt="" class="mb-3 p-0">
                <img src="{{ asset('/ISO.png') }}" alt="" class="mb-3 p-0">
            
                <img src="{{ asset('/ISO.png') }}" alt="" class="m-0 p-0">
                <img src="{{ asset('/ISO.png') }}" alt="" class="m-0 p-0">
            </div>

        </div>
</div>

<hr class="border-t border-blue-400 ">  
   


    <div class="grid lg:grid-cols-2 sm:grid-cols-1 text-white pl-12 pr-12">
       
       
        <div class="flex items-center gap-2 justify-center lg:justify-start mt-5 lg:mt-0">
            <p class="text-sm">@ 2025 Tecnol. Todos os direitos reservados</p>
        </div>
        
         <div class="flex items-center justify-center lg:justify-end gap-2 m-10 ">
        <h1>Siga-nos : </h1>
        <a href="#" class="hover:text-blue-400">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6">
        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
        </svg>
        </a>    
            
        <a href="#" class="hover:text-pink-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6">
        <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm0 2h10c1.66 0 3 1.34 3 3v10c0 1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3zm8 1a1 1 0 110 2 1 1 0 010-2zm-5 2a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6z"/>
        </svg>
        </a>

        <a href="#" class="hover:text-blue-600">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6">
        <path d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11 19h-3v-9h3v9zm-1.5-10.29c-.97 0-1.75-.79-1.75-1.76s.78-1.76 1.75-1.76 1.75.79 1.75 1.76-.78 1.76-1.75 1.76zm13.5 10.29h-3v-4.5c0-1.08-.02-2.47-1.5-2.47-1.5 0-1.73 1.17-1.73 2.38v4.59h-3v-9h2.88v1.23h.04c.4-.76 1.37-1.56 2.82-1.56 3.02 0 3.58 1.99 3.58 4.58v5.75z"/>
        </svg>
        </a>

        </div>


    </div>

    
        </div>    



    </footer>


<script>
    // elementos
  const LogoNavBar = document.getElementById('logo-navbar')
  const MenuElement = document.getElementById('mobile-menu')
  const backbutton = document.getElementById('back-button')
  const hamburguer = document.getElementById('menu-btn')
  const lupamobile = document.getElementById('lupa-mobile')

  // estado inicial
  MenuElement.classList.add('hidden')
  backbutton.classList.add('hidden')

  function OpenMobileMenu() {
    // abrir o menu mobile
    MenuElement.classList.remove('hidden')      // mostra o menu
    hamburguer.classList.add('hidden')          // esconde o hamburguer
    backbutton.classList.remove('hidden')       // mostra a seta
    LogoNavBar.classList.add('hidden')          // esconde a logo
    lupamobile.classList.add('hidden')          //esconde a lupa mobile
  }

  // função pra voltar
  backbutton.addEventListener('click', () => {
    MenuElement.classList.add('hidden')         // esconde o menu
    hamburguer.classList.remove('hidden')       // mostra o hamburguer
    backbutton.classList.add('hidden')          // esconde a seta 
    LogoNavBar.classList.remove('hidden')       // mostra a logo
    lupamobile.classList.remove('hidden')       //Mostra a lupa mobile

  })

</script>







</body>
</html>