<div>
  <header class="w-full container-x fixed top-0 left-0 bg-white shadow z-50 h-[128px]">
    <div class="flex justify-between items-center mx-auto h-full">

      <!-- LOGO -->
      <div class="flex items-center w-[167px] h-[29px]">
        <img src="/logo.png" alt="Logo TecShare">
      </div>

      <!-- MENU DESKTOP -->
      <nav class="hidden lg:flex items-center gap-8 uppercase text-md">
        <ul class="textContainer flex items-center gap-6 text-[16px] transition-all">
          <li class="hover:text-orange-600"><a href="{{ route('home') }}">Início</a></li>
          <li class="hover:text-orange-600"><a href="{{ route('quem-somos') }}">Quem somos</a></li>

          <li class="relative group">
            <a class="flex items-center gap-1 hover:text-orange-600 transition-colors" href="{{ route('safe-register-car') }}">Safe Register Car</a>
            <div class="absolute left-0 top-full mt-2 w-48 bg-white border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition-colors">O que é?</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition-colors">Onde operamos</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition-colors">Pré-cadastro</a>
            </div>
          </li>

          <li class="relative group">
            <a class="flex items-center gap-1 hover:text-orange-600 transition-colors" href="{{ route('compliance') }}">Compliance</a>
            <div class="absolute left-0 top-full mt-2 w-48 bg-white border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
              <a href="{{ route('compliance') }}" class="block px-4 py-2 text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition-colors">Compliance</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition-colors">Canal de denúncia</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition-colors">Solicitação do titular</a>
            </div>
          </li>

          <li class="relative group">
            <a class="flex items-center gap-1 hover:text-orange-600 transition-colors" href="{{ route('seguranca') }}">Segurança</a>
            <div class="absolute left-0 top-full mt-2 w-48 bg-white border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition-colors">Gestão de segurança</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition-colors">Privacidade</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition-colors">Qualidade</a>
            </div>
          </li>

          <li class="hover:text-orange-600"><a href="/#faleConosco"  id="scrollToFaleConosco">Contato</a></li>
        </ul>

        <x-font-control/>

        <button type="button" class="textContainer py-3 px-4 flex items-center gap-2 rounded-md bg-orange-600 text-white uppercase hover:bg-orange-500 transition-colors duration-300">
          <img src="/locked.png" class="h-[20px] w-[20px]" alt="Cadeado">
          Acesso Safe Register Car
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
</div>

<script>
  // Pesquisa
  const searchArray = ["Quem somos", "O que é?", "Pré-cadastro", "Compliance", "Segurança", "Onde operamos", "Contato"];
  const input = document.getElementById("searchInput");
  const resultsDiv = document.getElementById("searchResults");

  input.addEventListener("input", () => {
    const query = input.value.toLowerCase();
    resultsDiv.innerHTML = "";
    if (!query) return resultsDiv.classList.add("hidden");
    const results = searchArray.filter(item => item.toLowerCase().includes(query));
    if (!results.length) return resultsDiv.classList.add("hidden");
    resultsDiv.classList.remove("hidden");
    results.forEach(item => {
      const div = document.createElement("div");
      div.textContent = item;
      div.className = "p-2 hover:bg-gray-100 cursor-pointer";
      div.addEventListener("click", () => {
        input.value = item;
        resultsDiv.classList.add("hidden");
      });
      resultsDiv.appendChild(div);
    });
  });

  // Menu mobile
  const btn = document.getElementById('menu-btn');
  const menu = document.getElementById('mobile-menu');
  const submenuBtns = document.querySelectorAll('.toggle-submenu');
  const back = document.getElementById("back");

  btn.addEventListener('click', () => menu.classList.toggle('hidden'));
  submenuBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const submenu = btn.nextElementSibling;
      submenu.classList.toggle('hidden');
      btn.querySelector('svg').classList.toggle('rotate-180');
    });
  });
  back.addEventListener("click", () => menu.classList.toggle("hidden"));

  // Scroll suave para contato
  const linkContato = document.getElementById('scrollToFaleConosco');
  const targetContato = document.getElementById('faleConosco');
  if (linkContato && targetContato) {
    linkContato.addEventListener('click', (e) => {
      e.preventDefault();
      targetContato.scrollIntoView({ behavior: 'smooth' });
    });
  }
</script>

<style>
  #mobile-menu {
    transition: max-height 0.3s ease;
  }
</style>
