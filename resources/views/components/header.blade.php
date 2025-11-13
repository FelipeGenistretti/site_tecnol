<div class="">
  <header id="main-header" class="w-full container-x fixed top-0 left-0 bg-contrast bg-white shadow z-50 h-[128px] flex items-center transition-all duration-300">
    <div class="flex justify-between items-center w-full h-full mx-auto">

      <div class="flex items-center w-[167px] h-[29px] ">
        <a href="{{ route('home') }}"><img src="/logo.png" alt="Logo TecShare" class="w-full h-full object-contain" id="logoHeader"></a>
        <a href="{{ route('home') }}"><img src="/logoContrast.png" alt="Logo Contrast TecShare" class="w-full h-full object-contain hidden" id="logoContrastHeader"></a>
      </div>



      <!-- MENU DESKTOP -->
      <nav class="hidden lg:flex items-center gap-4 uppercase text-md h-full relative">
        <ul class="flex items-center gap-4 font-medium text-[12px] h-full">

          <li class="flex items-center h-full">
            <a href="{{ route('home') }}" 
               class="text-contrast nav-link {{ Route::is('home') ? 'text-[#411F56] font-bold' : 'text-textSecondary hover:text-textPrimary hover:font-bold' }}">
              Início
            </a>
          </li>

            <li class="relative group flex items-center h-full">
            <a href="{{ route('quem-somos') }}" 
               class="text-contrast nav-link flex items-center gap-1 transition-colors {{ Route::is('quem-somos') ? 'text-[#411F56] font-bold' : 'text-textSecondary hover:text-textPrimary hover:font-bold' }}">
              quem somos
            </a>
            <div class="absolute left-0 top-[60%] w-48 bg-white bg-contrast border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-50">
              <a href="{{ route('trabalhe-conosco') }}" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold text-contrast">Trabalhe conosco</a>
            </div>
          </li>

          <li class="relative group flex items-center h-full">
            <a href="{{ route('safe-register-car') }}" 
               class="text-contrast nav-link flex items-center gap-1 transition-colors {{ Route::is('safe-register-car') ? 'text-[#411F56] font-bold' : 'text-textSecondary hover:text-textPrimary hover:font-bold' }}">
              Safe Data Analytics
            </a>
           
          </li>

          <li class="relative group flex items-center h-full">
            <a href="{{ route('compliance') }}" 
               class="text-contrast nav-link flex items-center gap-1 {{ Route::is('compliance') ? 'text-[#411F56] font-bold' : 'text-textSecondary hover:text-textPrimary hover:font-bold' }}">
              Compliance
            </a>
            <div class="absolute left-0 top-[60%] w-48 bg-white border bg-contrast rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-50">
              <a href="{{ route('compliance') }}" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold text-contrast">Compliance</a>
              <a href="{{ route('canal-denuncia') }}" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold text-contrast">Canal de denúncia</a>
            </div>
          </li>

          <li class="relative group flex items-center h-full">
            <a href="{{ route('privacidade') }}" 
               class="text-contrast nav-link flex items-center gap-1 {{ Route::is('privacidade') ? 'text-[#411F56] font-bold' : 'text-textSecondary hover:text-textPrimary hover:font-bold' }}">
              Privacidade 
            </a>
            <div class="absolute left-0 top-[60%] w-48 bg-white border bg-contrast rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-50">
              <a href="{{ route('privacidade') }}" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold text-contrast">Privacidade</a>
              <a href="{{ route('solicitacao-titular') }}" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold text-contrast">SOLICITAÇÃO DO TITULAR</a>
            </div>
          </li>

          <li class="relative group flex items-center h-full">
            <a href="{{ route('seguranca') }}" 
               class="text-contrast nav-link flex items-center gap-1 {{ Route::is('seguranca') ? 'text-[#411F56] font-bold' : 'text-textSecondary hover:text-textPrimary hover:font-bold' }}">
              Segurança
            </a>
            <div class="absolute left-0 top-[60%] w-48 bg-white bg-contrast border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-50">
              <a href="{{ route('seguranca') }}" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold text-contrast">Gestão de segurança</a>
              <a href="{{ route('privacidade') }}" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold text-contrast">Privacidade</a>
            </div>
          </li>

          <li class="flex items-center h-full">
            <a href="{{ route('fale-conosco') }}" id="scrollToFaleConosco"
               class="nav-link text-textSecondary hover:text-textPrimary hover:font-bold text-contrast">
              Contato
            </a>
          </li>
        </ul>

        <div class="relative">
          <button type="button" class="nav-link focus:outline-none" id="searchButtonDesktop">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast">
            <path d="M5.40964 5.59036C8.39737 2.60263 13.2418 2.60214 16.2296 5.58967C18.9777 8.33775 19.1962 12.6554 16.8891 15.6556L20.2603 19.0268L18.8461 20.441L15.4749 17.0698C12.4747 19.3765 8.15763 19.1576 5.40964 16.4096C2.42221 13.4219 2.42221 8.57811 5.40964 5.59036ZM6.82386 7.00457C4.61747 9.21127 4.61747 12.7887 6.82386 14.9954C9.03054 17.2021 12.6086 17.2026 14.8154 14.9961C17.0222 12.7893 17.0222 9.21066 14.8154 7.00388C12.6086 4.7974 9.03054 4.79789 6.82386 7.00457Z" fill="currentColor"/>
          </svg>

          </button>

          <div
            id="searchBarDesktop"
            class="hidden absolute top-full right-0 mt-2 w-[320px] bg-white border border-gray-200 rounded-lg shadow-lg p-3 z-[9999]">
            <div class="relative w-full">
              <input 
                type="text"
                placeholder="Pesquisar..."
                class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-[#411F56]"
              />
            </div>
          </div>

        </div>

        <x-font-control/>

        <x-contraste-control/>

        <button type="button" class="button-contrast py-3 px-4 flex items-center gap-2 rounded-md bg-bgButtonPrimary text-white uppercase hover:bg-purple-800 transition-colors duration-300">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast">
            <path d="M11.499 3C14.3255 3 16.999 4.8836 16.999 7.63086V10.5293H18.999V19.8994C18.999 20.5068 18.5067 20.9998 17.8994 21H5.09863C4.4913 20.9998 3.99902 20.5068 3.99902 19.8994V10.5293H5.99902V7.63086C5.99902 4.8836 8.67259 3 11.499 3ZM5.99902 19H16.999V12.5293H5.99902V19ZM11.499 5C9.3549 5 7.99902 6.3677 7.99902 7.63086V10.4434H14.999V7.63086C14.999 6.3677 13.6432 5 11.499 5Z" fill="currentColor"/>
          </svg>

          <p class="text-[12px]">Safe Data Analytics</p>
        </button>
      </nav>

      <!-- BOTÃO HAMBURGUER MOBILE -->
      <div class="lg:hidden flex items-center">
        <button id="menu-btn" class="nav-link text-black focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>
  </header>

  <!-- MENU MOBILE -->
<div id="mobile-menu" class="hidden lg:hidden bg-white w-full fixed top-0 left-0 shadow-lg z-50 text-contrast bg-contrast">
  <div class="pt-4 flex justify-start">
    <button id="back" type="button" class="flex items-center gap-2 px-4 py-3 rounded-md">
       <svg class="text-contrast" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.49483 11.9992L17.6689 3.74245L16.331 2.25586L5.50513 11.9992L16.331 21.7424L17.6689 20.2559L8.49483 11.9992Z" fill="currentColor"/>
</svg>
 

    </button>
  </div>
  <div class="relative p-2">
    <input type="text" name="search" id="searchInput" placeholder="Pesquisar" class="text-contrast bg-contrast input-contrast w-full border border-black/15 p-3 pr-12 rounded-md"/>
    <button type="button" class="absolute right-3 top-1/2 transform -translate-y-1/2 w-8 h-8 flex items-center justify-center">
       <svg class="text-contrast" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.40964 5.59033C8.39737 2.6026 13.2418 2.6021 16.2296 5.58964C18.9777 8.33772 19.1962 12.6553 16.8891 15.6555L20.2603 19.0267L18.8461 20.4409L15.4749 17.0698C12.4747 19.3765 8.15763 19.1576 5.40964 16.4096C2.42221 13.4219 2.42221 8.57808 5.40964 5.59033ZM6.82386 7.00454C4.61747 9.21124 4.61747 12.7887 6.82386 14.9954C9.03054 17.2021 12.6086 17.2026 14.8154 14.9961C17.0222 12.7893 17.0222 9.21063 14.8154 7.00385C12.6086 4.79737 9.03054 4.79786 6.82386 7.00454Z" fill="currentColor"/>
</svg>
 
    </button>
    <div id="searchResults" class="absolute top-full left-0 w-full bg-white border border-gray-200 rounded-md mt-1 hidden z-50 shadow-md"></div>
  </div>

  <div class="bg-[#F8F8FF] text-contrast bg-contrast input-contrast">
    <ul class="flex flex-col gap-5 p-4 uppercase">
      <li class="relative">
        <button class="w-full flex justify-between items-center hover:text-purple-800 uppercase toggle-submenu">
          Quem somos
          <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <ul class="pl-4 mt-2 hidden submenu flex-col gap-3">
          <li><a href="{{ route('quem-somos') }}" class="block hover:text-purple-800">Sobre a TecShare</a></li>
          <li><a href="{{ route('trabalhe-conosco') }}" class="block hover:text-purple-800">Trabalhe conosco</a></li>
        </ul>
      </li>

      <li class="relative">
        <button class="w-full flex justify-between items-center hover:text-purple-800 uppercase toggle-submenu">
          <a href="{{ route('safe-register-car') }}"> Safe Data Analitics - SDA</a>
        </button>
   
      </li>

      <li class="relative">
        <button class="w-full flex justify-between items-center hover:text-purple-800 uppercase toggle-submenu">
          Compliance
          <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <ul class="pl-4 mt-2 hidden submenu flex-col gap-3">
          <li><a href="{{ route('compliance') }}" class="block hover:text-purple-800">Compliance</a></li>
          <li><a href="{{ route('canal-denuncia') }}" class="block hover:text-purple-800">Canal de denúncia</a></li>
        </ul>
      </li>

          <li class="relative">
        <button class="w-full flex justify-between items-center hover:text-purple-800 uppercase toggle-submenu">
          Privacidade
          <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <ul class="pl-4 mt-2 hidden submenu flex-col gap-3">
          <li><a href="{{ route('privacidade') }}" class="block hover:text-purple-800">Privacidade</a></li>
          <li><a href="{{ route('solicitacao-titular') }}" class="block hover:text-purple-800">Solicitação do titular</a></li>
        </ul>
      </li>

      <li class="relative">
        <button class="w-full flex justify-between items-center hover:text-purple-800 uppercase toggle-submenu">
          Segurança
          <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <ul class="pl-4 mt-2 hidden submenu flex-col gap-3">
          <li><a href="{{ route('seguranca') }}" class="block hover:text-purple-800">Gestão de segurança</a></li>
          <li><a href="{{ route('privacidade') }}" class="block hover:text-purple-800">Privacidade</a></li>
        </ul>
      </li>

      <li><a href="/#faleConosco" class="block hover:text-purple-800">Contato</a></li>

      <li>
        <div class="relative max-md:hidden flex justify-between items-center">
        
          <button class="text-constrast" onclick="AtivarContraste()">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="max-sm:flex">
              <path d="M17.1211 28.2422C17.121 28.7944 16.6733 29.2422 16.1211 29.2422C15.5688 29.2422 15.1212 28.7944 15.1211 28.2422V24.5488C15.4394 24.5851 15.7628 24.6055 16.0908 24.6055C16.4397 24.6055 16.7833 24.5819 17.1211 24.541V28.2422ZM9.44043 21.3867C9.856 21.9109 10.3322 22.3838 10.8584 22.7969L8.1709 25.4854C7.78035 25.8756 7.14727 25.8758 6.75684 25.4854C6.3664 25.0949 6.36657 24.4618 6.75684 24.0713L9.44043 21.3867ZM25.4854 24.0713C25.8756 24.4618 25.8758 25.0949 25.4854 25.4854C25.0949 25.8758 24.4618 25.8756 24.0713 25.4854L21.3564 22.7705C21.8806 22.3549 22.3536 21.8789 22.7666 21.3525L25.4854 24.0713ZM16.4961 8.8584C16.6198 8.86468 16.7432 8.87433 16.8652 8.88672C17.1097 8.91155 17.3512 8.94765 17.5879 8.99609C20.9016 9.67444 23.3953 12.607 23.3955 16.1211L23.3857 16.4961C23.3671 16.8628 23.32 17.2228 23.249 17.5732C23.2415 17.6105 23.2317 17.6475 23.2236 17.6846C23.1808 17.8802 23.1315 18.0733 23.0732 18.2627C23.0616 18.3006 23.0484 18.3383 23.0361 18.376C23.0113 18.4522 22.9862 18.5284 22.959 18.6035C22.9553 18.6138 22.952 18.6245 22.9482 18.6348C22.9126 18.7314 22.8745 18.8272 22.835 18.9219C22.8165 18.9661 22.7967 19.0099 22.7773 19.0537C22.7503 19.1149 22.723 19.176 22.6943 19.2363C22.6696 19.2885 22.6432 19.3401 22.6172 19.3916C22.5916 19.4423 22.5658 19.493 22.5391 19.543C22.5169 19.5844 22.4946 19.626 22.4717 19.667C22.4373 19.7284 22.4023 19.7894 22.3662 19.8496C22.3415 19.891 22.3156 19.9318 22.29 19.9727C22.2533 20.0314 22.2161 20.0899 22.1777 20.1475C22.1506 20.1882 22.1226 20.2284 22.0947 20.2686C22.059 20.3199 22.0223 20.3705 21.9854 20.4209C21.9555 20.4616 21.9252 20.502 21.8945 20.542C21.8522 20.5972 21.8095 20.6521 21.7656 20.7061C21.7403 20.7373 21.7144 20.7681 21.6885 20.7988C21.6396 20.8569 21.5897 20.9142 21.5391 20.9707C21.5109 21.0021 21.4828 21.0335 21.4541 21.0645C21.4098 21.1122 21.3649 21.1595 21.3193 21.2061C21.282 21.2442 21.2442 21.282 21.2061 21.3193C21.1563 21.368 21.1058 21.4157 21.0547 21.4629C21.0271 21.4884 20.9997 21.514 20.9717 21.5391C20.9144 21.5903 20.8557 21.64 20.7969 21.6895C20.7635 21.7176 20.7302 21.7459 20.6963 21.7734C20.6502 21.8108 20.6036 21.8476 20.5566 21.8838C20.5075 21.9216 20.4583 21.9595 20.4082 21.9961C20.3596 22.0316 20.3102 22.0662 20.2607 22.1006C20.2242 22.1259 20.1874 22.1511 20.1504 22.1758C20.0883 22.2172 20.0253 22.2574 19.9619 22.2969C19.9218 22.3219 19.8815 22.3468 19.8408 22.3711C19.7938 22.3991 19.746 22.4261 19.6982 22.4531C19.6424 22.4847 19.586 22.5157 19.5293 22.5459C19.4891 22.5673 19.4488 22.5888 19.4082 22.6094C19.3452 22.6413 19.2818 22.673 19.2178 22.7031C19.1724 22.7245 19.126 22.7442 19.0801 22.7646C19.025 22.7892 18.9699 22.8146 18.9141 22.8379C18.8512 22.8641 18.7874 22.8886 18.7236 22.9131C18.6786 22.9303 18.6333 22.9475 18.5879 22.9639C18.507 22.993 18.425 23.0205 18.3428 23.0469C18.3196 23.0543 18.2967 23.0631 18.2734 23.0703C18.1957 23.0944 18.1169 23.1162 18.0381 23.1377C17.9953 23.1494 17.9523 23.1619 17.9092 23.1729C17.8553 23.1865 17.8004 23.1976 17.7461 23.21C17.6846 23.224 17.6227 23.2385 17.5605 23.251C17.4614 23.2709 17.3613 23.2889 17.2607 23.3047C17.2494 23.3065 17.2379 23.3088 17.2266 23.3105C17.1452 23.323 17.0627 23.3321 16.9805 23.3418C16.9367 23.3469 16.8927 23.354 16.8486 23.3584C16.6098 23.3821 16.3671 23.3945 16.1221 23.3945L15.748 23.3848C11.9055 23.19 8.84984 20.012 8.84961 16.1211C8.84988 12.1048 12.1057 8.84878 16.1221 8.84863C16.2474 8.84864 16.3724 8.85213 16.4961 8.8584ZM16.1221 10.8486C13.2103 10.8488 10.8499 13.2094 10.8496 16.1211C10.8498 18.9418 13.0649 21.2463 15.8506 21.3877L16.1221 21.3945V10.8486ZM7.66699 15.1211C7.62846 15.4492 7.60645 15.7827 7.60645 16.1211C7.60645 16.4595 7.62846 16.793 7.66699 17.1211H4C3.44772 17.1211 3 16.6734 3 16.1211C3 15.5688 3.44772 15.1211 4 15.1211H7.66699ZM28.2422 15.1211C28.7944 15.1212 29.2422 15.5688 29.2422 16.1211C29.2422 16.6733 28.7944 17.121 28.2422 17.1211H24.5146C24.5532 16.793 24.5752 16.4595 24.5752 16.1211C24.5752 15.7827 24.5532 15.4492 24.5146 15.1211H28.2422ZM23.8984 6.92871C24.289 6.5382 24.923 6.53819 25.3135 6.92871C25.704 7.31923 25.704 7.95322 25.3135 8.34375L22.7676 10.8887C22.3543 10.362 21.88 9.88651 21.3555 9.4707L23.8984 6.92871ZM6.92871 6.92871C7.31923 6.53819 7.95322 6.5382 8.34375 6.92871L10.8584 9.44336C10.3318 9.85657 9.85625 10.331 9.44043 10.8555L6.92871 8.34375C6.5382 7.95322 6.53819 7.31923 6.92871 6.92871ZM16.1211 3C16.6734 3 17.1211 3.44772 17.1211 4V7.7002C16.7833 7.6593 16.4396 7.63672 16.0908 7.63672C15.7628 7.63672 15.4394 7.65616 15.1211 7.69238V4C15.1211 3.44772 15.5688 3 16.1211 3Z" fill="currentColor"/>
              </svg>
          </button>

           



          <div id="searchBarMobile" class="hidden absolute top-full right-0 mt-2 w-[300px] bg-white border border-gray-200 rounded-lg shadow-lg p-4 z-[9999]">
            <div class="flex items-center gap-2 border border-gray-300 rounded-md px-3 py-2">
              <input type="text" placeholder="Pesquisar..." class="w-full focus:outline-none text-sm text-gray-700" />
              <img src="/search.png" alt="Buscar" class="w-4 h-4 opacity-70">
            </div>
          </div>
        </div>
      </li>
        <button type="button" class="w-[40%] container-x button-contrast py-3 px-4 flex items-center gap-2 rounded-md bg-bgButtonPrimary text-white uppercase hover:bg-purple-800 transition-colors duration-300">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast">
              <path d="M11.499 3C14.3255 3 16.999 4.8836 16.999 7.63086V10.5293H18.999V19.8994C18.999 20.5068 18.5067 20.9998 17.8994 21H5.09863C4.4913 20.9998 3.99902 20.5068 3.99902 19.8994V10.5293H5.99902V7.63086C5.99902 4.8836 8.67259 3 11.499 3ZM5.99902 19H16.999V12.5293H5.99902V19ZM11.499 5C9.3549 5 7.99902 6.3677 7.99902 7.63086V10.4434H14.999V7.63086C14.999 6.3677 13.6432 5 11.499 5Z" fill="currentColor"/>
            </svg>

            <p class="text-[12px]">Safe Data Analytics</p>
          </button>

    </ul>
    
      </nav>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const rotas = {
    'Início': '/',
    'Quem somos': '/quem-somos',
    'Safe Data Analytics - SDA': '/safe-register-car',
    'Tecnohub': '/tecnohub',
    'Serviços': '/veiculos',
    'Compliance': '/compliance',
    'Canal de denúncia': '/canal-denuncia',
    'Solicitação do titular': '/solicitacao-titular',
    'Segurança': '/seguranca',
    'Contato': '/fale-conosco',
    'Privacidade':"/privacidade",
    'Trabalhe conosco': '/trabalhe-conosco'
  };

  const itens = Object.keys(rotas);

  const searchBarDesktop = document.querySelector("#searchBarDesktop input");
  const containerDesktop = document.getElementById("searchBarDesktop");

  if (searchBarDesktop) {
    const resultadosDesktop = document.createElement("div");
    resultadosDesktop.className =
      "absolute top-full left-0 w-full bg-white border border-gray-200 rounded-md mt-1 hidden z-[9999] shadow-md";
    containerDesktop.appendChild(resultadosDesktop);

    searchBarDesktop.addEventListener("input", (e) => {
      const valor = e.target.value.toLowerCase().trim();
      resultadosDesktop.innerHTML = "";

      if (!valor) {
        resultadosDesktop.classList.add("hidden");
        return;
      }

      const filtrados = itens.filter((item) =>
        item.toLowerCase().includes(valor)
      );

      if (filtrados.length > 0) {
        filtrados.forEach((item) => {
          const link = document.createElement("a");
          link.href = rotas[item];
          link.textContent = item;
          link.className =
            "block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer";
          resultadosDesktop.appendChild(link);
        });
        resultadosDesktop.classList.remove("hidden");
      } else {
        resultadosDesktop.classList.add("hidden");
      }
    });

    document.addEventListener("click", (e) => {
      if (!containerDesktop.contains(e.target)) {
        resultadosDesktop.classList.add("hidden");
      }
    });
  }

  const inputMobile = document.getElementById("searchInput");
  const resultadosMobile = document.getElementById("searchResults");
  const containerMobile = inputMobile.closest(".relative");

  if (inputMobile) {
    inputMobile.addEventListener("input", (e) => {
      const valor = e.target.value.toLowerCase().trim();
      resultadosMobile.innerHTML = "";

      if (!valor) {
        resultadosMobile.classList.add("hidden");
        return;
      }

      const filtrados = itens.filter((item) =>
        item.toLowerCase().includes(valor)
      );

      if (filtrados.length > 0) {
        filtrados.forEach((item) => {
          const link = document.createElement("a");
          link.href = rotas[item];
          link.textContent = item;
          link.className =
            "block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer";
          resultadosMobile.appendChild(link);
        });
        resultadosMobile.classList.remove("hidden");
      } else {
        const semResultado = document.createElement("div");
        semResultado.textContent = "Nenhum resultado encontrado";
        semResultado.className = "px-3 py-2 text-sm text-gray-500";
        resultadosMobile.appendChild(semResultado);
        resultadosMobile.classList.remove("hidden");
      }
    });

    document.addEventListener("click", (e) => {
      if (!containerMobile.contains(e.target)) {
        resultadosMobile.classList.add("hidden");
      }
    });
  }
});
</script>



  <script>
      document.addEventListener('DOMContentLoaded', () => {
          const logo = document.getElementById("logoHeader");
          const logoContrast = document.getElementById("logoContrastHeader");
          function atualizarLogos() {
              if (document.body.classList.contains('contrast')) {
                  logo.classList.add("hidden");
                  logoContrast.classList.remove("hidden");
              } else {
                  logo.classList.remove("hidden");
                  logoContrast.classList.add("hidden");
              }
          }
          atualizarLogos();
          const observer = new MutationObserver(atualizarLogos);
          observer.observe(document.body, {
              attributes: true,
              attributeFilter: ['class']
          });
      });
    </script>

<script>

  function AtivarContraste() {
    document.body.classList.toggle('contrast');
  }

  document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('menu-btn');
    const backBtn = document.getElementById('back');
    const menu = document.getElementById('mobile-menu');
    const header = document.getElementById('main-header');

    function updateHeaderState() {
      if (!header) return;
      if (window.scrollY > 300) {
        header.classList.add('header-fixed');
      } else {
        header.classList.remove('header-fixed');
      }
    }

    menuBtn.addEventListener('click', () => {
      menu.classList.remove('hidden');
      header.classList.add('invisible');
    });

    backBtn.addEventListener('click', () => {
      menu.classList.add('hidden');
      header.classList.remove('invisible');
      updateHeaderState();
    });

    const toggles = document.querySelectorAll('.toggle-submenu');
    toggles.forEach(toggle => {
      toggle.addEventListener('click', () => {
        const submenu = toggle.nextElementSibling;
        submenu.classList.toggle('hidden');
        const icon = toggle.querySelector('svg');
        if (icon) icon.classList.toggle('rotate-180');
      });
    });

    window.addEventListener('scroll', updateHeaderState, { passive: true });
    updateHeaderState();
  });

  function setupSearch(buttonId, barId) {
    const button = document.getElementById(buttonId);
    const bar = document.getElementById(barId);

    if (!button || !bar) return;

    button.addEventListener('click', (e) => {
      e.stopPropagation();
      bar.classList.toggle('hidden');
    });

    document.addEventListener('click', (e) => {
      if (!bar.contains(e.target) && !button.contains(e.target)) {
        bar.classList.add('hidden');
      }
    });
  }

  setupSearch('searchButtonDesktop', 'searchBarDesktop');
  setupSearch('searchButtonMobile', 'searchBarMobile');
</script>

<style>
  .rotate-180 { transform: rotate(180deg); transition: transform 0.2s ease; }

  .header-fixed {
    height: 80px !important;           
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    box-shadow: 0 6px 18px rgba(15, 23, 42, 0.08);
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
  }

  #main-header.header-fixed > div {
    align-items: center; 
    height: 80px;
  }

  #main-header.header-fixed img[alt="Logo TecShare"] {
    max-height: 24px;
    width: auto;
  }

  .nav-link:focus {
    outline: none !important;
    border: 1px solid #999 !important;
    border-radius: 4px;
    color: #999 !important;
    background: transparent !important;
    padding: 0.75rem !important;
    transition: all 0.2s ease;
  }

</style>
