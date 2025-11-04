<div class="">
  <header id="main-header" class="w-full container-x fixed top-0 left-0 bg-white shadow z-50 h-[128px] flex items-center transition-all duration-300">
    <div class="flex justify-between items-center w-full h-full mx-auto">

      <!-- LOGO -->
      <div class="flex items-center w-[167px] h-[29px]">
        <img src="/logo.png" alt="Logo TecShare" class="w-full h-full object-contain">
      </div>

      <!-- MENU DESKTOP -->
      <nav class="hidden lg:flex items-center gap-4 uppercase text-md h-full">
        <ul class="flex items-center gap-6 font-medium text-[12px] h-full">

          <li class="flex items-center h-full">
            <a href="{{ route('home') }}" 
               class="nav-link {{ Route::is('home') ? 'text-[#F15A29] font-bold' : 'text-textSecondary hover:text-textPrimary hover:font-bold' }}">
              Início
            </a>
          </li>

          <li class="flex items-center h-full">
            <a href="{{ route('quem-somos') }}" 
               class="nav-link {{ Route::is('quem-somos') ? 'text-[#F15A29] font-bold' : 'text-textSecondary hover:text-textPrimary hover:font-bold' }}">
              Quem somos
            </a>
          </li>

          <li class="relative group flex items-center h-full">
            <a href="{{ route('safe-register-car') }}" 
               class="nav-link flex items-center gap-1 transition-colors {{ Route::is('safe-register-car') ? 'text-[#F15A29] font-bold' : 'text-textSecondary hover:text-textPrimary hover:font-bold' }}">
              Safe Register Car
            </a>
            <div class="absolute left-0 top-[60%] w-48 bg-white border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-50">
              <a href="#" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">O que é?</a>
              <a href="#" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold" id="scrollToOndeOperamos">Onde operamos</a>
              <a href="#" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Pré-cadastro</a>
            </div>
          </li>

          <li class="relative group flex items-center h-full">
            <a href="{{ route('compliance') }}" 
               class="nav-link flex items-center gap-1 {{ Route::is('compliance') ? 'text-[#F15A29] font-bold' : 'text-textSecondary hover:text-textPrimary hover:font-bold' }}">
              Compliance
            </a>
            <div class="absolute left-0 top-[60%] w-48 bg-white border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-50">
              <a href="{{ route('compliance') }}" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Compliance</a>
              <a href="#" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Canal de denúncia</a>
              <a href="#" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Solicitação do titular</a>
            </div>
          </li>

          <li class="relative group flex items-center h-full">
            <a href="{{ route('seguranca') }}" 
               class="nav-link flex items-center gap-1 {{ Route::is('seguranca') ? 'text-[#F15A29] font-bold' : 'text-textSecondary hover:text-textPrimary hover:font-bold' }}">
              Segurança
            </a>
            <div class="absolute left-0 top-[60%] w-48 bg-white border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-50">
              <a href="#" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Gestão de segurança</a>
              <a href="#" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Privacidade</a>
              <a href="#" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Qualidade</a>
            </div>
          </li>

          <li class="flex items-center h-full">
            <a href="/#faleConosco" id="scrollToFaleConosco"
               class="nav-link text-textSecondary hover:text-textPrimary hover:font-bold">
              Contato
            </a>
          </li>
        </ul>

        <!-- BOTÃO LUPA -->
        <button type="button" class="nav-link focus:outline-none" id="search">
          <img src="/search.png" class="h-[20px] w-[20px]" alt="Buscar">
        </button>

        <x-font-control/>

        <button type="button" class="py-3 px-4 flex items-center gap-2 rounded-md bg-bgButtonPrimary text-white uppercase hover:bg-orange-500 transition-colors duration-300">
          <img src="/locked.png" class="h-[20px] w-[20px]" alt="Cadeado">
          <p class="text-[12px]">Safe Register Car</p>
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
    <div id="mobile-menu" class="hidden lg:hidden bg-white w-full fixed top-0 left-0 shadow-lg z-50">
      <div class="pt-4 flex justify-start">
        <button id="back" type="button" class="flex items-center gap-2 px-4 py-3 rounded-md">
          <img src="/voltar.png" alt="Voltar" class="w-5 h-5"/>
        </button>
      </div>
      <div class="relative p-2">
        <input type="text" name="search" id="searchInput" placeholder="Pesquisar" class="w-full border border-black/15 p-3 pr-12 rounded-md"/>
        <button type="button" class="absolute right-3 top-1/2 transform -translate-y-1/2 w-8 h-8 flex items-center justify-center">
          <img src="/search.png" alt="Pesquisar" class="w-5 h-5"/>
        </button>
        <div id="searchResults" class="absolute top-full left-0 w-full bg-white border border-gray-200 rounded-md mt-1 hidden z-50 shadow-md"></div>
      </div>

      <div class="bg-[#F8F8FF]">
        <ul class="flex flex-col gap-5 p-4 uppercase">
          <li><a href="" class="block hover:text-orange-600">Início</a></li>
          <li><a href="" class="block hover:text-orange-600">Quem somos</a></li>
          <li class="relative">
            <button class="w-full flex justify-between items-center hover:text-orange-600 uppercase toggle-submenu">
              Safe Register Car
              <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <ul class="pl-4 mt-2 hidden submenu flex-col gap-3">
              <li><a href="#" class="block hover:text-orange-600">O que é?</a></li>
              <li><a href="#" class="block hover:text-orange-600">Pré-cadastro</a></li>
            </ul>
          </li>
          <li><a href="" class="block hover:text-orange-600">Compliance</a></li>
          <li><a href="" class="block hover:text-orange-600">Segurança</a></li>
          <li><a href="" class="block hover:text-orange-600">Onde operamos</a></li>
          <li><a href="" class="block hover:text-orange-600">Contato</a></li>
          <li>
            <button type="button" class="py-3 w-[70%] flex items-center justify-center gap-2 rounded-md bg-orange-600 text-white uppercase hover:bg-orange-500 transition-colors duration-300">
              <img src="/locked.png" class="h-[20px] w-[20px]" alt="imagem de um cadeado">
              Acesso Safe Register Car
            </button>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <div class="relative p-4 w-[40%]">
    <input type="text" placeholder="Pesquisar" class="">
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('menu-btn');
    const backBtn = document.getElementById('back');
    const menu = document.getElementById('mobile-menu');
    const header = document.getElementById('main-header');

    // Atualiza aparência do header conforme rolagem
    function updateHeaderState() {
      if (!header) return;
      if (window.scrollY > 300) {
        header.classList.add('header-fixed');
      } else {
        header.classList.remove('header-fixed');
      }
    }

    // Abre o menu mobile
    menuBtn.addEventListener('click', () => {
      menu.classList.remove('hidden');
      header.classList.add('invisible'); // esconde visualmente mas mantém o espaço
    });

    // Fecha o menu mobile (botão "voltar")
    backBtn.addEventListener('click', () => {
      menu.classList.add('hidden');
      header.classList.remove('invisible');
      updateHeaderState();
    });

    // Submenus (mobile)
    const toggles = document.querySelectorAll('.toggle-submenu');
    toggles.forEach(toggle => {
      toggle.addEventListener('click', () => {
        const submenu = toggle.nextElementSibling;
        submenu.classList.toggle('hidden');
        const icon = toggle.querySelector('svg');
        if (icon) icon.classList.toggle('rotate-180');
      });
    });

    // Fechar menu ao clicar em "Contato" (mobile)
    const linkContatoMobile = document.getElementById('scrollToFaleConoscoMobile');
    const targetContato = document.getElementById('faleConosco');
    if (linkContatoMobile && targetContato) {
      linkContatoMobile.addEventListener('click', e => {
        e.preventDefault();
        targetContato.scrollIntoView({ behavior: 'smooth' });
        menu.classList.add('hidden');
        header.classList.remove('invisible');
      });
    }

    // Listener de rolagem
    window.addEventListener('scroll', updateHeaderState, { passive: true });
    updateHeaderState();
  });

  // ======== Lógica da barra de pesquisa (modal) ========
  const search = document.getElementById("search");
  const searchModal = document.getElementById("searchModal");
  const closeSearch = document.getElementById("closeSearch");

  search.addEventListener("click", () => {
    searchModal.classList.remove("hidden");
  });

  closeSearch.addEventListener("click", () => {
    searchModal.classList.add("hidden");
  });


  searchModal.addEventListener("click", (e) => {
    if (e.target === searchModal) {
      searchModal.classList.add("hidden");
    }
  });
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

  /* ======== Foco nos links ======== */
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
