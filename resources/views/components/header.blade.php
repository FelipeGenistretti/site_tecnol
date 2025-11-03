<div class="">
  <header class="w-full container-x fixed top-0 left-0 bg-white shadow z-50 h-[128px] flex items-center">
    <div class="flex justify-between items-center w-full h-full mx-auto">

      <!-- LOGO -->
      <div class="flex items-center w-[167px] h-[29px]">
        <img src="/logo.png" alt="Logo TecShare" class="w-full h-full object-contain">
      </div>

      <!-- MENU DESKTOP -->
      <nav class="hidden lg:flex items-center gap-4 uppercase text-md h-full">
        <ul class="flex items-center gap-6 text-textSecondary font-medium text-[12px] h-full">
          <li class="hover:text-textPrimary hover:font-bold flex items-center h-full"><a href="{{ route('home') }}">Início</a></li>
          <li class="hover:text-textPrimary hover:font-bold flex items-center h-full"><a href="{{ route('quem-somos') }}">Quem somos</a></li>

          <li class="relative group flex items-center h-full">
            <a class="flex items-center gap-1 hover:text-textPrimary hover:font-bold transition-colors" href="{{ route('safe-register-car') }}">Safe Register Car</a>
            <div class="absolute left-0 top-full mt-1 w-48 bg-white border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
              <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">O que é?</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold" id="scrollToOndeOperamos">Onde operamos</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Pré-cadastro</a>
            </div>
          </li>

          <li class="relative group flex items-center h-full">
            <a class="flex items-center gap-1 hover:text-textPrimary hover:font-bold" href="{{ route('compliance') }}">Compliance</a>
            <div class="absolute left-0 top-full mt-1 w-48 bg-white border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
              <a href="{{ route('compliance') }}" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Compliance</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Canal de denúncia</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Solicitação do titular</a>
            </div>
          </li>

          <li class="relative group flex items-center h-full">
            <a class="flex items-center gap-1 hover:text-textPrimary hover:font-bold" href="{{ route('seguranca') }}">Segurança</a>
            <div class="absolute left-0 top-full mt-1 w-48 bg-white border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
              <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Gestão de segurança</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Privacidade</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Qualidade</a>
            </div>
          </li>

          <li class="hover:text-textPrimary hover:font-bold flex items-center h-full"><a href="/#faleConosco" id="scrollToFaleConosco">Contato</a></li>
        </ul>

        <button type="button">
          <img src="/search.png" class="h-[20px] w-[20px]" alt="Cadeado">
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
  <div id="mobile-menu" class="hidden lg:hidden bg-white shadow-md fixed top-[128px] left-0 w-full z-40">
    <ul class="flex flex-col gap-1 p-4 text-textSecondary font-medium">
      <li><a href="{{ route('home') }}" class="block py-2 hover:text-textPrimary">Início</a></li>
      <li><a href="{{ route('quem-somos') }}" class="block py-2 hover:text-textPrimary">Quem somos</a></li>

      <li>
        <button class="w-full text-left py-2 toggle-submenu flex justify-between items-center hover:text-textPrimary">
          Safe Register Car
          <svg class="h-4 w-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
          </svg>
        </button>
        <ul class="hidden pl-4 flex flex-col gap-1">
          <li><a href="#" class="block py-2 hover:text-textPrimary">O que é?</a></li>
          <li><a href="#" class="block py-2 hover:text-textPrimary">Onde operamos</a></li>
          <li><a href="#" class="block py-2 hover:text-textPrimary">Pré-cadastro</a></li>
        </ul>
      </li>

      <li>
        <button class="w-full text-left py-2 toggle-submenu flex justify-between items-center hover:text-textPrimary">
          Compliance
          <svg class="h-4 w-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
          </svg>
        </button>
        <ul class="hidden pl-4 flex flex-col gap-1">
          <li><a href="{{ route('compliance') }}" class="block py-2 hover:text-textPrimary">Compliance</a></li>
          <li><a href="#" class="block py-2 hover:text-textPrimary">Canal de denúncia</a></li>
          <li><a href="#" class="block py-2 hover:text-textPrimary">Solicitação do titular</a></li>
        </ul>
      </li>

      <li>
        <button class="w-full text-left py-2 toggle-submenu flex justify-between items-center hover:text-textPrimary">
          Segurança
          <svg class="h-4 w-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
          </svg>
        </button>
        <ul class="hidden pl-4 flex flex-col gap-1">
          <li><a href="#" class="block py-2 hover:text-textPrimary">Gestão de segurança</a></li>
          <li><a href="#" class="block py-2 hover:text-textPrimary">Privacidade</a></li>
          <li><a href="#" class="block py-2 hover:text-textPrimary">Qualidade</a></li>
        </ul>
      </li>

      <li><a href="/#faleConosco" class="block py-2 hover:text-textPrimary" id="scrollToFaleConoscoMobile">Contato</a></li>
    </ul>
  </div>
</div>

<script>
  // Mobile menu toggle
  const btn = document.getElementById('menu-btn');
  const menu = document.getElementById('mobile-menu');
  btn.addEventListener('click', () => menu.classList.toggle('hidden'));

  // Mobile submenu toggle
  document.querySelectorAll('.toggle-submenu').forEach(btn => {
    btn.addEventListener('click', () => {
      const submenu = btn.nextElementSibling;
      submenu.classList.toggle('hidden');
      btn.querySelector('svg').classList.toggle('rotate-180');
    });
  });

  // Smooth scroll contato
  const linkContato = document.getElementById('scrollToFaleConosco');
  const targetContato = document.getElementById('faleConosco');
  if(linkContato && targetContato){
    linkContato.addEventListener('click', e=>{
      e.preventDefault();
      targetContato.scrollIntoView({behavior:'smooth'});
    });
  }
  const linkContatoMobile = document.getElementById('scrollToFaleConoscoMobile');
  if(linkContatoMobile && targetContato){
    linkContatoMobile.addEventListener('click', e=>{
      e.preventDefault();
      targetContato.scrollIntoView({behavior:'smooth'});
      menu.classList.add('hidden');
    });
  }
</script>

<style>
  /* Submenu mais próximo do item */
  nav ul li .group div {
    margin-top: 0.25rem; /* mt-1 */
  }
</style>
