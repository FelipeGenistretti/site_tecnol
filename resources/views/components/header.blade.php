<div class="">
  <header id="main-header" class="w-full container-x fixed top-0 left-0 bg-white shadow z-50 h-[128px] flex items-center transition-all duration-300">
    <div class="flex justify-between items-center w-full h-full mx-auto">

      <!-- LOGO -->
      <div class="flex items-center w-[167px] h-[29px]">
        <img src="/logo.png" alt="Logo TecShare" class="w-full h-full object-contain">
      </div>

      <!-- MENU DESKTOP -->
      <nav class="hidden lg:flex items-center gap-4 uppercase text-md h-full">
        <ul class="flex items-center gap-6 text-textSecondary font-medium text-[12px] h-full">
          <li class="hover:text-textPrimary hover:font-bold flex items-center h-full">
            <a href="{{ route('home') }}">Início</a>
          </li>
          <li class="hover:text-textPrimary hover:font-bold flex items-center h-full">
            <a href="{{ route('quem-somos') }}">Quem somos</a>
          </li>

          <li class="relative group flex items-center h-full">
            <a class="flex items-center gap-1 hover:text-textPrimary hover:font-bold transition-colors" href="{{ route('safe-register-car') }}">Safe Register Car</a>
            <div class="absolute left-0 top-[60%]  w-48 bg-white border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-50">
              <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">O que é?</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold" id="scrollToOndeOperamos">Onde operamos</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Pré-cadastro</a>
            </div>
          </li>

          <li class="relative group flex items-center h-full">
            <a class="flex items-center gap-1 hover:text-textPrimary hover:font-bold" href="{{ route('compliance') }}">Compliance</a>
            <div class="absolute left-0 top-[60%] w-48 bg-white border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-50">
              <a href="{{ route('compliance') }}" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Compliance</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Canal de denúncia</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Solicitação do titular</a>
            </div>
          </li>

          <li class="relative group flex items-center h-full">
            <a class="flex items-center gap-1 hover:text-textPrimary hover:font-bold" href="{{ route('seguranca') }}">Segurança</a>
            <div class="absolute left-0 top-[60%] w-48 bg-white border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-50">
              <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Gestão de segurança</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Privacidade</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Qualidade</a>
            </div>
          </li>

          <li class="hover:text-textPrimary hover:font-bold flex items-center h-full">
            <a href="/#faleConosco" id="scrollToFaleConosco">Contato</a>
          </li>
        </ul>

        <button type="button">
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
        <button id="menu-btn" class="text-black focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>
  </header>

  <!-- MENU MOBILE -->
  <div id="mobile-menu" class="hidden lg:hidden bg-[#F8F8FF] shadow-md fixed top-0 left-0 w-full z-50 overflow-y-auto">
    <div class="flex items-center justify-between px-4 py-4 border-b">
      <button id="close-menu" class="text-gray-800">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </button>

      <div class="flex items-center bg-white w-full ml-2">
        <div class="relative w-full">
          <input type="text" placeholder="Pesquisar" class="w-full border rounded-md py-2 pl-3 pr-10 text-sm focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute right-3 top-2.5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </div>
      </div>
    </div>

    <ul class="flex flex-col gap-1 p-6 text-textSecondary font-medium uppercase text-[13px]">
      <li><a href="{{ route('home') }}" class="block py-2 hover:text-textPrimary">Início</a></li>
      <li><a href="{{ route('quem-somos') }}" class="block py-2 hover:text-textPrimary">Quem somos</a></li>

      <li>
        <button class="w-full uppercase flex justify-between items-center py-2 hover:text-textPrimary submenu-toggle">
          Safe Register Car
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <ul class="hidden flex flex-col pl-4 text-gray-600 text-[12px]">
          <li><a href="#" class="py-1 hover:text-textPrimary uppercase">O que é?</a></li>
          <li><a href="#" class="py-1 hover:text-textPrimary uppercase">Onde operamos</a></li>
          <li><a href="#" class="py-1 hover:text-textPrimary uppercase">Pré-cadastro</a></li>
        </ul>
      </li>

      <li>
        <button class="uppercase w-full flex justify-between items-center py-2 hover:text-textPrimary submenu-toggle">
          Compliance
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <ul class="hidden flex flex-col pl-4 text-gray-600 text-[12px]">
          <li><a href="{{ route('compliance') }}" class="py-1 hover:text-textPrimary uppercase">Compliance</a></li>
          <li><a href="#" class="py-1 hover:text-textPrimary uppercase">Canal de denúncia</a></li>
          <li><a href="#" class="py-1 hover:text-textPrimary uppercase">Solicitação do titular</a></li>
        </ul>
      </li>

      <li>
        <button class="w-full flex justify-between items-center py-2 hover:text-textPrimary submenu-toggle uppercase">
          Segurança
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <ul class="hidden flex flex-col pl-4 text-gray-600 text-[12px]">
          <li><a href="#" class="py-1 hover:text-textPrimary">Gestão de segurança</a></li>
          <li><a href="#" class="py-1 hover:text-textPrimary">Privacidade</a></li>
          <li><a href="#" class="py-1 hover:text-textPrimary">Qualidade</a></li>
        </ul>
      </li>

      <li><a href="/#faleConosco" class="block py-2 hover:text-textPrimary" id="scrollToFaleConoscoMobile">Contato</a></li>
    </ul>

    <div class="px-6 mb-8">
      <button class="flex items-center justify-center gap-2 p-3 rounded-md bg-bgButtonPrimary text-white uppercase text-[12px] hover:bg-orange-500 transition-colors duration-300">
        <img src="/locked.png" class="h-[18px] w-[18px]" alt="Cadeado">
        Acesso Safe Register Car
      </button>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('menu-btn');
    const closeBtn = document.getElementById('close-menu');
    const menu = document.getElementById('mobile-menu');
    const header = document.getElementById('main-header');

    function updateHeaderState() {
      if (!header) return;
      const isMenuOpen = !menu.classList.contains('hidden');
      if (isMenuOpen) {
        header.classList.add('hidden');
        header.classList.remove('header-fixed');
        return;
      } else {
        header.classList.remove('hidden', 'header-hidden-temp');
      }

      if (window.scrollY > 300) {
        header.classList.add('header-fixed');
      } else {
        header.classList.remove('header-fixed');
      }
    }

    btn.addEventListener('click', () => {
      menu.classList.remove('hidden');
      header.classList.add('hidden');
    });

    closeBtn.addEventListener('click', () => {
      menu.classList.add('hidden');
      updateHeaderState();
    });

    const toggles = document.querySelectorAll('.submenu-toggle');
    toggles.forEach(btnToggle => {
      btnToggle.addEventListener('click', () => {
        const submenu = btnToggle.nextElementSibling;
        submenu.classList.toggle('hidden');
        const icon = btnToggle.querySelector('svg');
        if (icon) icon.classList.toggle('rotate-180');
      });
    });

    const linkContatoMobile = document.getElementById('scrollToFaleConoscoMobile');
    const targetContato = document.getElementById('faleConosco');
    if (linkContatoMobile && targetContato) {
      linkContatoMobile.addEventListener('click', e => {
        e.preventDefault();
        targetContato.scrollIntoView({ behavior: 'smooth' });
        menu.classList.add('hidden');
        updateHeaderState();
      });
    }

    window.addEventListener('scroll', updateHeaderState, { passive: true });
    updateHeaderState();
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
</style>
