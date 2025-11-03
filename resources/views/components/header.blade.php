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
        <li class=" hover:text-textPrimary hover:font-bold flex items-center h-full"><a href="{{ route('home') }}">Início</a></li>
        <li class=" hover:text-textPrimary hover:font-bold flex items-center h-full"><a href="{{ route('quem-somos') }}">Quem somos</a></li>

        <li class="relative group flex items-center h-full">
          <a class=" flex items-center gap-1 hover:text-textPrimary hover:font-bold transition-colors" href="{{ route('safe-register-car') }}">Safe Register Car</a>
          <div class="absolute left-0 top-full w-48 bg-white border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
            <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">O que é?</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold" id="scrollToOndeOperamos">Onde operamos</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Pré-cadastro</a>
          </div>
        </li>

        <li class="relative group flex items-center h-full">
          <a class="  flex items-center gap-1 hover:text-textPrimary hover:font-bold" href="{{ route('compliance') }}">Compliance</a>
          <div class="absolute left-0 top-full w-48 bg-white border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
            <a href="{{ route('compliance') }}" class=" block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Compliance</a>
            <a href="#" class=" block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Canal de denúncia</a>
            <a href="#" class=" block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Solicitação do titular</a>
          </div>
        </li>

        <li class="relative group flex items-center h-full">
          <a class=" flex items-center gap-1 hover:text-textPrimary hover:font-bold" href="{{ route('seguranca') }}">Segurança</a>
          <div class="absolute left-0 top-full w-48 bg-white border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
            <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Gestão de segurança</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Privacidade</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold">Qualidade</a>
          </div>
        </li>

        <li class="hover:text-textPrimar  hover:font-bold flex items-center h-full"><a href="/#faleConosco" id="scrollToFaleConosco">Contato</a></li>
      </ul>

        <button type="button" class=" ">
        <img src="/search.png" class="h-[20px] w-[20px]" alt="Cadeado">
      </button>

      <x-font-control/>

      <button type="button" class=" py-3 px-4 flex items-center gap-2 rounded-md bg-bgButtonPrimary text-white uppercase hover:bg-orange-500 transition-colors duration-300">
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
