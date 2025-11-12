{{-- SKELETON --}}
<div id="skeleton" class="container-x py-12 animate-pulse">

  <div class="flex flex-col items-center space-y-4 mb-10">
    <div class="h-10 w-64 bg-gray-300 rounded"></div>
    <div class="h-4 w-3/4 bg-gray-300 rounded"></div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

    {{-- Lado esquerdo (texto + cards) --}}
    <div>
      <div class="space-y-4 mb-10">
        <div class="h-10 w-3/4 bg-gray-300 rounded"></div>
        <div class="h-4 w-full bg-gray-300 rounded"></div>
        <div class="h-4 w-full bg-gray-300 rounded"></div>
        <div class="h-4 w-5/6 bg-gray-300 rounded"></div>
      </div>

      <div class="grid grid-cols-2 gap-5">
        <div class="h-20 bg-gray-300 rounded"></div>
        <div class="h-20 bg-gray-300 rounded"></div>
        <div class="h-20 bg-gray-300 rounded"></div>
        <div class="h-20 bg-gray-300 rounded"></div>
      </div>
    </div>

    {{-- Lado direito (gráfico) --}}
    <div class="h-80 bg-gray-300 rounded"></div>

  </div>
</div>



<div id="content-real" class="hidden bg-contrast">
  <div class="container-x py-10 bg-contrast  bg-[#F2F2F2]">
    <h1 class="text-textPrimary text-contrast text-3xl max-sm:text-[38px] max-sm:flex max-sm:text-center max-sm:justify-center">Safe Data Analytics - SDA</h1>
  </div>   

  <div class="container-x py-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 text-textPrimary">
      <div>
        <div class="mb-10">
          <h1 class="text-4xl mb-5 max-sm:flex max-sm:justify-center max-sm:text-[38px] max-sm:text-center text-contrast">Inteligência e tecnologia para decisões mais seguras</h1>
          <p class="textContainer max-sm:text-[16px] text-contrast">
            O SDA é muito mais do que uma solução tecnológica: é um aliado estratégico para transformar dados em decisões inteligentes, seguras e eficientes. Com uma modelagem robusta e integrada, ele potencializa toda a esteira automotiva, trazendo inovação e confiabilidade para instituições financeiras, concessionárias e parceiros do mercado.
          </p>
        </div>
        <div class="grid grid-cols-2 gap-5 text-textPrimary">
          <!-- Card 1 -->
          <div class="lg:p-5 max-sm:p-3 rounded-md flex items-center gap-3 bg-contrast text-contrast bg-[#F8F9FA] shadow-md transition transform hover:scale-105 duration-300 hover:shadow-lg">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#F15A29]">
              <g clip-path="url(#clip0_825_8019)">
              <path d="M10 5V10L13.3333 11.6667" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M10.0003 18.3334C14.6027 18.3334 18.3337 14.6024 18.3337 10C18.3337 5.39765 14.6027 1.66669 10.0003 1.66669C5.39795 1.66669 1.66699 5.39765 1.66699 10C1.66699 14.6024 5.39795 18.3334 10.0003 18.3334Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
              </g>
              <defs>
              <clipPath id="clip0_825_8019">
              <rect width="20" height="20" fill="currentColor"/>
              </clipPath>
              </defs>
            </svg>

            <p class="textContainer max-sm:text-[14px]">80% mais rápido</p>
          </div>

          <!-- Card 2 -->
          <div class="lg:p-5 max-sm:p-3 rounded-md flex items-center gap-2 bg-contrast text-contrast bg-[#F8F9FA] shadow-md transition transform hover:scale-105 duration-300 hover:shadow-lg">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#F15A29]">
            <g clip-path="url(#clip0_825_8030)">
            <path d="M10.0003 18.3334C14.6027 18.3334 18.3337 14.6024 18.3337 10C18.3337 5.39765 14.6027 1.66669 10.0003 1.66669C5.39795 1.66669 1.66699 5.39765 1.66699 10C1.66699 14.6024 5.39795 18.3334 10.0003 18.3334Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M7.5 9.99998L9.16667 11.6666L12.5 8.33331" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
            <defs>
            <clipPath id="clip0_825_8030">
            <rect width="20" height="20" fill="white"/>
            </clipPath>
            </defs> 
            </svg>

            <p class="textContainer max-sm:text-[14px]">Totalmente digital</p>
          </div>

          <!-- Card 3 -->
          <div class="lg:p-5 max-sm:p-3 rounded-md flex items-center gap-2 bg-contrast text-contrast bg-[#F8F9FA] shadow-md transition transform hover:scale-105 duration-300 hover:shadow-lg">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#F15A29]">
            <path d="M16.6663 10.8333C16.6663 15 13.7497 17.0833 10.283 18.2916C10.1015 18.3532 9.90429 18.3502 9.72467 18.2833C6.24967 17.0833 3.33301 15 3.33301 10.8333V4.99997C3.33301 4.77895 3.42081 4.56699 3.57709 4.41071C3.73337 4.25443 3.94533 4.16663 4.16634 4.16663C5.83301 4.16663 7.91634 3.16663 9.36634 1.89997C9.54289 1.74913 9.76747 1.66626 9.99967 1.66626C10.2319 1.66626 10.4565 1.74913 10.633 1.89997C12.0913 3.17497 14.1663 4.16663 15.833 4.16663C16.054 4.16663 16.266 4.25443 16.4223 4.41071C16.5785 4.56699 16.6663 4.77895 16.6663 4.99997V10.8333Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            <p class="textContainer max-sm:text-[14px]">100% seguro</p>
          </div>

          <!-- Card 4 -->
          <div class="lg:p-5 max-sm:p-3 rounded-md flex items-center gap-2 bg-contrast text-contrast bg-[#F8F9FA] shadow-md transition transform hover:scale-105 duration-300 hover:shadow-lg">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#F15A29]">
            <path d="M15.8333 9.16669H4.16667C3.24619 9.16669 2.5 9.91288 2.5 10.8334V16.6667C2.5 17.5872 3.24619 18.3334 4.16667 18.3334H15.8333C16.7538 18.3334 17.5 17.5872 17.5 16.6667V10.8334C17.5 9.91288 16.7538 9.16669 15.8333 9.16669Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M5.83301 9.16669V5.83335C5.83301 4.72828 6.27199 3.66848 7.0534 2.88708C7.8348 2.10567 8.89461 1.66669 9.99967 1.66669C11.1047 1.66669 12.1646 2.10567 12.946 2.88708C13.7274 3.66848 14.1663 4.72828 14.1663 5.83335V9.16669" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            <p class="textContainer max-sm:text-[14px]">Dados protegidos</p>
          </div>
        </div>
      </div>

      <div>
        <div class="rounded-md bg-contrast h-full">
          <div>
            <img src="/imgHeroSda.png" width="820" alt="" class="rounded-md h-full">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
    window.addEventListener("load", () => {
        const skeleton = document.getElementById('skeleton');
        const content = document.getElementById('content-real');

        skeleton.classList.add('hidden');
        content.classList.remove('hidden');
    });
</script>
