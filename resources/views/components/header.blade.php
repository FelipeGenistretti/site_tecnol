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
               class="text-contrast nav-link {{ Route::is('home') ? 'text-[#F15A29] font-bold' : 'text-textSecondary hover:text-textPrimary hover:font-bold' }}">
              Início
            </a>
          </li>

          <li class="flex items-center h-full">
            <a href="{{ route('quem-somos') }}" 
               class="text-contrast nav-link {{ Route::is('quem-somos') ? 'text-[#F15A29] font-bold' : 'text-textSecondary hover:text-textPrimary hover:font-bold' }}">
              Quem somos
            </a>
          </li>

          <li class="relative group flex items-center h-full">
            <a href="{{ route('safe-register-car') }}" 
               class="text-contrast nav-link flex items-center gap-1 transition-colors {{ Route::is('safe-register-car') ? 'text-[#F15A29] font-bold' : 'text-textSecondary hover:text-textPrimary hover:font-bold' }}">
              serviços
            </a>
            <div class="absolute left-0 top-[60%] w-48 bg-white bg-contrast border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-50">
              <a href="{{ route('safe-register-car') }}" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold text-contrast">Safe Data Analytics - SDA</a>
              <a href="{{ route('safe-register-car') }}#ondeoperamos" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold text-contrast" id="scrollToOndeOperamos">TECNOHUB</a>
            </div>
          </li>

          <li class="relative group flex items-center h-full">
            <a href="{{ route('compliance') }}" 
               class="text-contrast nav-link flex items-center gap-1 {{ Route::is('compliance') ? 'text-[#F15A29] font-bold' : 'text-textSecondary hover:text-textPrimary hover:font-bold' }}">
              Compliance
            </a>
            <div class="absolute left-0 top-[60%] w-48 bg-white border bg-contrast rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-50">
              <a href="{{ route('compliance') }}" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold text-contrast">Compliance</a>
              <a href="{{ route('canal-denuncia') }}" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold text-contrast">Canal de denúncia</a>
            </div>
          </li>

          <li class="relative group flex items-center h-full">
            <a href="{{ route('privacidade') }}" 
               class="text-contrast nav-link flex items-center gap-1 {{ Route::is('compliance') ? 'text-[#F15A29] font-bold' : 'text-textSecondary hover:text-textPrimary hover:font-bold' }}">
              Privacidade 
            </a>
            <div class="absolute left-0 top-[60%] w-48 bg-white border bg-contrast rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-50">
              <a href="{{ route('privacidade') }}" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold text-contrast">Privacidade</a>
              <a href="{{ route('solicitacao-titular') }}" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold text-contrast">SOLICITAÇÃO DO TITULAR</a>
            </div>
          </li>

          <li class="relative group flex items-center h-full">
            <a href="{{ route('seguranca') }}" 
               class="text-contrast nav-link flex items-center gap-1 {{ Route::is('seguranca') ? 'text-[#F15A29] font-bold' : 'text-textSecondary hover:text-textPrimary hover:font-bold' }}">
              Segurança
            </a>
            <div class="absolute left-0 top-[60%] w-48 bg-white bg-contrast border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-50">
              <a href="{{ route('seguranca') }}" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold text-contrast">Gestão de segurança</a>
              <a href="{{ route('privacidade') }}" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold text-contrast">Privacidade</a>
              <a href="{{ route('qualidade') }}" class="nav-link block px-4 py-2 text-gray-700 hover:text-textPrimary hover:font-bold text-contrast">Qualidade</a>
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
                class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-[#F15A29]"
              />
            </div>
          </div>

        </div>

        <x-font-control/>

        <x-contraste-control/>

        <button type="button" class="button-contrast py-3 px-4 flex items-center gap-2 rounded-md bg-bgButtonPrimary text-white uppercase hover:bg-orange-500 transition-colors duration-300">
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
      <li class="relative">
        <button class="w-full flex justify-between items-center hover:text-orange-600 uppercase toggle-submenu">
          Quem somos
          <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <ul class="pl-4 mt-2 hidden submenu flex-col gap-3">
          <li><a href="{{ route('quem-somos') }}" class="block hover:text-orange-600">Sobre a Tecnol</a></li>
          <li><a href="" class="block hover:text-orange-600">Trabalhe conosco</a></li>
        </ul>
      </li>

      <li class="relative">
        <button class="w-full flex justify-between items-center hover:text-orange-600 uppercase toggle-submenu">
          Serviços
          <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <ul class="pl-4 mt-2 hidden submenu flex-col gap-3">
          <li><a href="" class="block hover:text-orange-600">Safe Data Analytics - SDA</a></li>
          <li><a href=""class="block hover:text-orange-600">TECNOHUB</a></li>
        </ul>
      </li>

      <li class="relative">
        <button class="w-full flex justify-between items-center hover:text-orange-600 uppercase toggle-submenu">
          Compliance
          <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <ul class="pl-4 mt-2 hidden submenu flex-col gap-3">
          <li><a href="{{ route('compliance') }}" class="block hover:text-orange-600">Compliance</a></li>
          <li><a href="{{ route('canal-denuncia') }}" class="block hover:text-orange-600">Canal de denúncia</a></li>
        </ul>
      </li>

          <li class="relative">
        <button class="w-full flex justify-between items-center hover:text-orange-600 uppercase toggle-submenu">
          Privacidade
          <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <ul class="pl-4 mt-2 hidden submenu flex-col gap-3">
          <li><a href="{{ route('privacidade') }}" class="block hover:text-orange-600">Privacidade</a></li>
          <li><a href="{{ route('canal-denuncia') }}" class="block hover:text-orange-600">Solicitação do titular</a></li>
        </ul>
      </li>

      <li class="relative">
        <button class="w-full flex justify-between items-center hover:text-orange-600 uppercase toggle-submenu">
          Segurança
          <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <ul class="pl-4 mt-2 hidden submenu flex-col gap-3">
          <li><a href="{{ route('seguranca') }}" class="block hover:text-orange-600">Gestão de segurança</a></li>
          <li><a href="{{ route('privacidade') }}" class="block hover:text-orange-600">Privacidade</a></li>
          <li><a href="{{ route('qualidade') }}" class="block hover:text-orange-600">Qualidade</a></li>
        </ul>
      </li>

      <li><a href="/#faleConosco" class="block hover:text-orange-600">Contato</a></li>

        <button type="button" class="w-[40%] container-x button-contrast py-3 px-4 flex items-center gap-2 rounded-md bg-bgButtonPrimary text-white uppercase hover:bg-orange-500 transition-colors duration-300">
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
