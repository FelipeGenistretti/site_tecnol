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
    
    <x-header/>

    <main class="pt-[106px] font-ibm text-contrast bg-contrast">
        @yield('content')
    </main>

 <footer class=" bg-contrast">
    <div class="container-x">
        
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-4 gap-5 text-[#333333] py-12 place-items-center lg:place-items-start">
            <!-- Coluna 1 -->
            <div class="text-contrast mt-3 mb-3 text-center  md:place-self-start md:justify-self-center lg:justify-self-start">
                <svg class="text-contrast-svg" width="240" height="41" viewBox="0 0 240 41" fill="none" xmlns="http://www.w3.org/2000/svg">
<path style="fill:#F15A29 !important " d="M104.346 40.0649C102.664 40.0649 100.487 39.5802 98.3594 38.9152C94.7271 37.5217 93.1051 36.2185 91.7003 35.0133L94.8617 30.5191C96.1397 31.6688 97.8213 32.8184 99.1329 33.3062C100.913 33.9682 102.631 34.3514 104.144 34.3514C105.658 34.3514 107.477 34.0617 108.449 33.3062C109.391 32.5746 110.097 31.7384 110.097 30.7978C110.097 29.7173 109.895 29.2997 109.323 28.6726C108.752 28.0455 107.507 27.4184 105.388 26.7216L100.646 25.3281C98.7966 24.701 96.4553 23.71 95.1307 22.2971C93.8527 20.9732 93.0119 19.0086 93.0119 16.8971C93.0119 15.027 93.3602 13.6135 94.3236 12.159C95.327 10.7045 96.4568 9.60327 98.2631 8.77212C100.209 7.8041 101.763 7.52539 104.211 7.52539C106.105 7.52539 109.256 8.25701 110.568 8.84927C112.384 9.72024 113.628 10.2777 114.974 11.3925L111.879 15.9912C110.5 15.0506 109.826 14.6732 108.415 14.1448C106.835 13.5525 105.817 13.2738 104.211 13.2738C101.622 13.2738 100.579 13.7824 99.956 14.2841C99.1772 14.9112 98.5948 15.4144 98.5948 16.8274C98.5948 17.8029 99.1329 18.1861 99.8887 18.7784C100.714 19.3706 101.689 19.8584 102.597 20.0674L108.247 21.8093C111.072 22.7848 112.493 23.8367 113.857 25.1666C114.772 26.3036 115.646 27.8016 115.68 30.5191C115.68 32.4723 115.277 34.0814 114.234 35.5359C113.259 36.8946 111.812 38.114 110.097 38.8456C108.25 39.5936 106.835 40.0649 104.346 40.0649Z"/>
<rect style="fill:#F15A29 !important" y="0.000244141" width="9.4842" height="5.6439"/>
<path style="fill:#411F56 !important" d="M30.5561 0.000488281V5.64404H18.5834V39.0894H13.0678V0.000488281H30.5561Z"/>
<path style="fill:#411F56 !important" d="M42.0438 7.52539C50.8293 7.52556 57.951 14.7786 57.951 23.7256C57.951 24.7126 57.8641 25.6789 57.6981 26.6172H32.119C33.3553 31.002 37.3294 34.2119 42.0438 34.2119C45.7138 34.2118 48.9337 32.2653 50.7645 29.335H56.9715C54.7308 35.5174 48.893 39.9256 42.0438 39.9258C33.2582 39.9258 26.1357 32.6726 26.1356 23.7256C26.1356 14.7785 33.2581 7.52539 42.0438 7.52539ZM42.0438 13.2393C37.3044 13.2393 33.3132 16.483 32.0995 20.9033H51.9872C50.7737 16.4831 46.783 13.2394 42.0438 13.2393Z"/>
<path style="fill:#411F56 !important" d="M77.2249 7.52539C81.894 7.52539 86.0935 9.56582 89.0091 12.8164L85.0657 16.9014C83.1663 14.6598 80.3593 13.2393 77.2249 13.2393C71.504 13.2393 66.8665 17.965 66.8665 23.7949C66.8665 29.6249 71.504 34.3515 77.2249 34.3516C80.372 34.3516 83.1884 32.9187 85.0882 30.6611L88.9671 34.6797C86.0533 37.9037 81.872 39.9258 77.2249 39.9258C68.4207 39.9257 61.2835 32.6726 61.2835 23.7256C61.2835 14.7786 68.4207 7.52545 77.2249 7.52539Z"/>
<path style="fill:#F15A29 !important" d="M124.478 9.40674H145.262V39.229H139.814V15.1899H124.478V39.229H118.962V0.000488281H124.478V9.40674Z"/>
<path style="fill:#F15A29 !important" d="M182.072 39.2285H176.489V34.208C173.738 37.7055 169.637 39.9257 165.055 39.9258C156.771 39.9258 150.055 32.6726 150.055 23.7256C150.055 14.7786 156.771 7.52539 165.055 7.52539C169.637 7.52545 173.738 9.74512 176.489 13.2422V7.52539H182.072V39.2285ZM166.029 13.3086C160.29 13.3088 155.638 18.0195 155.638 23.8301C155.638 29.6407 160.29 34.3513 166.029 34.3516C171.769 34.3516 176.422 29.6408 176.422 23.8301C176.422 18.0193 171.769 13.3086 166.029 13.3086Z"/>
<path style="fill:#F15A29 !important" d="M207.755 7.52539V13.3086H194.707V39.2285H189.258V7.52539H207.755Z"/>
<path style="fill:#F15A29 !important" d="M224.092 7.52539C232.878 7.52556 240 14.7786 240 23.7256C240 24.7126 239.913 25.6789 239.747 26.6172H214.168C215.404 31.0019 219.377 34.2117 224.091 34.2119C227.762 34.2119 230.982 32.2654 232.813 29.335H239.02C236.779 35.5174 230.941 39.9256 224.092 39.9258C215.307 39.9258 208.184 32.6726 208.184 23.7256C208.184 14.7785 215.307 7.52539 224.092 7.52539ZM224.091 13.2393C219.352 13.2395 215.362 16.4831 214.148 20.9033H234.036C232.822 16.483 228.831 13.2393 224.091 13.2393Z"/>
</svg>

     <svg width="240" height="41" viewBox="0 0 240 41" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M104.346 40.0649C102.664 40.0649 100.487 39.5802 98.3594 38.9152C94.7271 37.5217 93.1051 36.2185 91.7003 35.0133L94.8617 30.5191C96.1397 31.6688 97.8213 32.8184 99.1329 33.3062C100.913 33.9682 102.631 34.3514 104.144 34.3514C105.658 34.3514 107.477 34.0617 108.449 33.3062C109.391 32.5746 110.097 31.7384 110.097 30.7978C110.097 29.7173 109.895 29.2997 109.323 28.6726C108.752 28.0455 107.507 27.4184 105.388 26.7216L100.646 25.3281C98.7966 24.701 96.4553 23.71 95.1307 22.2971C93.8527 20.9732 93.0119 19.0086 93.0119 16.8971C93.0119 15.027 93.3602 13.6135 94.3236 12.159C95.327 10.7045 96.4568 9.60327 98.2631 8.77212C100.209 7.8041 101.763 7.52539 104.211 7.52539C106.105 7.52539 109.256 8.25701 110.568 8.84927C112.384 9.72024 113.628 10.2777 114.974 11.3925L111.879 15.9912C110.5 15.0506 109.826 14.6732 108.415 14.1448C106.835 13.5525 105.817 13.2738 104.211 13.2738C101.622 13.2738 100.579 13.7824 99.956 14.2841C99.1772 14.9112 98.5948 15.4144 98.5948 16.8274C98.5948 17.8029 99.1329 18.1861 99.8887 18.7784C100.714 19.3706 101.689 19.8584 102.597 20.0674L108.247 21.8093C111.072 22.7848 112.493 23.8367 113.857 25.1666C114.772 26.3036 115.646 27.8016 115.68 30.5191C115.68 32.4723 115.277 34.0814 114.234 35.5359C113.259 36.8946 111.812 38.114 110.097 38.8456C108.25 39.5936 106.835 40.0649 104.346 40.0649Z" fill="currentColor"/>
<rect y="0.000244141" width="9.4842" height="5.6439" fill="currentColor"/>
<path d="M30.5561 0.000488281V5.64404H18.5834V39.0894H13.0678V0.000488281H30.5561Z" fill="currentColor"/>
<path d="M42.0438 7.52539C50.8293 7.52556 57.951 14.7786 57.951 23.7256C57.951 24.7126 57.8641 25.6789 57.6981 26.6172H32.119C33.3553 31.002 37.3294 34.2119 42.0438 34.2119C45.7138 34.2118 48.9337 32.2653 50.7645 29.335H56.9715C54.7308 35.5174 48.893 39.9256 42.0438 39.9258C33.2582 39.9258 26.1357 32.6726 26.1356 23.7256C26.1356 14.7785 33.2581 7.52539 42.0438 7.52539ZM42.0438 13.2393C37.3044 13.2393 33.3132 16.483 32.0995 20.9033H51.9872C50.7737 16.4831 46.783 13.2394 42.0438 13.2393Z" fill="currentColor"/>
<path d="M77.2249 7.52539C81.894 7.52539 86.0935 9.56582 89.0091 12.8164L85.0657 16.9014C83.1663 14.6598 80.3593 13.2393 77.2249 13.2393C71.504 13.2393 66.8665 17.965 66.8665 23.7949C66.8665 29.6249 71.504 34.3515 77.2249 34.3516C80.372 34.3516 83.1884 32.9187 85.0882 30.6611L88.9671 34.6797C86.0533 37.9037 81.872 39.9258 77.2249 39.9258C68.4207 39.9257 61.2835 32.6726 61.2835 23.7256C61.2835 14.7786 68.4207 7.52545 77.2249 7.52539Z" fill="currentColor"/>
<path d="M124.478 9.40674H145.262V39.229H139.814V15.1899H124.478V39.229H118.962V0.000488281H124.478V9.40674Z" fill="currentColor"/>
<path d="M182.072 39.2285H176.489V34.208C173.738 37.7055 169.637 39.9257 165.055 39.9258C156.771 39.9258 150.055 32.6726 150.055 23.7256C150.055 14.7786 156.771 7.52539 165.055 7.52539C169.637 7.52545 173.738 9.74512 176.489 13.2422V7.52539H182.072V39.2285ZM166.029 13.3086C160.29 13.3088 155.638 18.0195 155.638 23.8301C155.638 29.6407 160.29 34.3513 166.029 34.3516C171.769 34.3516 176.422 29.6408 176.422 23.8301C176.422 18.0193 171.769 13.3086 166.029 13.3086Z" fill="currentColor"/>
<path d="M207.755 7.52539V13.3086H194.707V39.2285H189.258V7.52539H207.755Z" fill="currentColor"/>
<path d="M224.092 7.52539C232.878 7.52556 240 14.7786 240 23.7256C240 24.7126 239.913 25.6789 239.747 26.6172H214.168C215.404 31.0019 219.377 34.2117 224.091 34.2119C227.762 34.2119 230.982 32.2654 232.813 29.335H239.02C236.779 35.5174 230.941 39.9256 224.092 39.9258C215.307 39.9258 208.184 32.6726 208.184 23.7256C208.184 14.7785 215.307 7.52539 224.092 7.52539ZM224.091 13.2393C219.352 13.2395 215.362 16.4831 214.148 20.9033H234.036C232.822 16.483 228.831 13.2393 224.091 13.2393Z" fill="currentColor"/>
</svg>
   




                <ul>
                
                </ul>
            </div>

            <!-- Coluna 2 -->
            <div class=" lg:text-left">
                <h1 class="text-2xl mt-3 mb-3 text-contrast">Mapa do site</h1>
                <ul>
                    <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start">
                    <svg class="text-contrasts" width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 6.70708L0 12L1.41421 13.4142L8.12132 6.70708L1.41421 -2.86102e-05L0 1.41418L5.29289 6.70708Z" fill="currentColor"/>
                    </svg>
                        <a class="ml-2" href="{{ route('home') }}">Inicio</a>                    
                    </li>
                         <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start">
                    <svg class="text-contrasts" width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 6.70708L0 12L1.41421 13.4142L8.12132 6.70708L1.41421 -2.86102e-05L0 1.41418L5.29289 6.70708Z" fill="currentColor"/>
                    </svg>
                        <a class="ml-2" href="{{ route('quem-somos') }}">Quem somos</a>                    
                    </li>
                       <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start">
                    <svg class="text-contrasts" width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 6.70708L0 12L1.41421 13.4142L8.12132 6.70708L1.41421 -2.86102e-05L0 1.41418L5.29289 6.70708Z" fill="currentColor"/>
                    </svg>
                        <a class="ml-2" href="{{ route('trabalhe-conosco') }}">Trabalhe conosco</a>                    
                    </li>
                       <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start">
                    <svg class="text-contrasts" width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 6.70708L0 12L1.41421 13.4142L8.12132 6.70708L1.41421 -2.86102e-05L0 1.41418L5.29289 6.70708Z" fill="currentColor"/>
                    </svg>
                        <a class="ml-2" href="{{ route('safe-register-car') }}">Safe Data Analytics - SDA</a>                    
                    </li>
                      <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start">
                    <svg class="text-contrasts" width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 6.70708L0 12L1.41421 13.4142L8.12132 6.70708L1.41421 -2.86102e-05L0 1.41418L5.29289 6.70708Z" fill="currentColor"/>
                    </svg>
                        <a class="ml-2" href="{{ route('compliance') }}">Compliance</a>                    
                    </li>
                          </li>
                      <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start">
                    <svg class="text-contrasts" width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 6.70708L0 12L1.41421 13.4142L8.12132 6.70708L1.41421 -2.86102e-05L0 1.41418L5.29289 6.70708Z" fill="currentColor"/>
                    </svg>
                        <a class="ml-2" href="{{ route('canal-denuncia') }}">Canal de Denúncia</a>                    
                    </li>
                      <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start">
                    <svg class="text-contrasts" width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 6.70708L0 12L1.41421 13.4142L8.12132 6.70708L1.41421 -2.86102e-05L0 1.41418L5.29289 6.70708Z" fill="currentColor"/>
                    </svg>
                        <a class="ml-2" href="{{ route('privacidade') }}">Privacidade</a>                    
                    </li>
                          </li>
                      <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start">
                    <svg class="text-contrasts" width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 6.70708L0 12L1.41421 13.4142L8.12132 6.70708L1.41421 -2.86102e-05L0 1.41418L5.29289 6.70708Z" fill="currentColor"/>
                    </svg>
                        <a class="ml-2" href="{{ route('solicitacao-titular') }}">Solicitação do titular</a>                    
                    </li>
                     <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start">
                    <svg class="text-contrasts" width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 6.70708L0 12L1.41421 13.4142L8.12132 6.70708L1.41421 -2.86102e-05L0 1.41418L5.29289 6.70708Z" fill="currentColor"/>
                    </svg>
                        <a class="ml-2" href="{{ route('seguranca') }}">Segurança</a>                    
                    </li>
                          <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start">
                    <svg class="text-contrasts" width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 6.70708L0 12L1.41421 13.4142L8.12132 6.70708L1.41421 -2.86102e-05L0 1.41418L5.29289 6.70708Z" fill="currentColor"/>
                    </svg>
                        <a class="ml-2" href="{{ route('seguranca') }}">Contato</a>                    
                    </li>
                          <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start">
                    <svg class="text-contrasts" width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 6.70708L0 12L1.41421 13.4142L8.12132 6.70708L1.41421 -2.86102e-05L0 1.41418L5.29289 6.70708Z" fill="currentColor"/>
                    </svg>
                        <a class="ml-2" href="{{ route('seguranca') }}">Erro 404 layout</a>                    
                    </li>






                   
                    



                </ul>
            </div>

            <!-- Coluna 3 -->
            <div class="text-center lg:text-left">
                <h1 class="text-2xl mt-3 mb-3 text-contrast">Endereços</h1>

                <h3 class="font-semibold text-contrast">Matriz</h3>
                <p class="text-contrast">
                    Rua Senador Milton Campos, 35, 7º andar<br>
                    Vila da Serra, Nova Lima - MG<br>
                    CEP 34006-050
                </p>

                <h3 class="text-lg mt-4 mb-1 font-bold text-contrast">Filial</h3>
                <p class="text-contrast">
                    Av. Dr Chucri Zaidan, 1240, 16º andar<br>
                    Chácara Santo Antônio, São Paulo - SP<br>
                    CEP 04711-130
                </p>

                <h3 class="text-lg mt-4 mb-1 font-bold text-contrast">Contatos</h3>
                <p class="text-contrast">(31) 3324-6460</p>
                <p class="text-contrast">0800 590 4004</p>
            </div>

            <!-- Coluna 4 -->
    <div class="lg:text-left text-left lg:place-self-start lg:justify-self-end ">


    <div class="grid grid-cols-2 lg:grid-cols-2 gap-2 lg:gap-4 justify-items-start">
      
    </div>
</div>
        

        </div>


        <hr class="border-t w-screen relative left-1/2 right-1/2 -ml-[50vw]">


       


        <!-- Linha final -->
        <div class="grid lg:grid-cols-2 sm:grid-cols-1 text-[#333333]">
            

            <div class="flex items-center gap-2 justify-center lg:justify-start mt-5 lg:mt-0">
                <p class="text-sm text-contrast">© 2025 Tecshare. Todos os direitos reservados.</p>
            </div>
            
            <div class="flex items-center justify-center lg:justify-end gap-2 m-10">
                <h1 class="text-contrast">Siga-nos :</h1>

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

<style>
.text-contrast .text-contrast-svg path,
.text-contrast .text-contrast-svg rect {
    fill: currentColor !important;
}
</style>



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
            MenuElement.classList.remove('hidden')
            hamburguer.classList.add('hidden')
            backbutton.classList.remove('hidden')
            LogoNavBar.classList.add('hidden')
            lupamobile.classList.add('hidden')
        }

        // função pra voltar
        backbutton.addEventListener('click', () => {
            MenuElement.classList.add('hidden')
            hamburguer.classList.remove('hidden')
            backbutton.classList.add('hidden')
            LogoNavBar.classList.remove('hidden')
            lupamobile.classList.remove('hidden')
        })
    </script>

    <x-vlibras/>
    @stack('scripts')
</body>
</html>
