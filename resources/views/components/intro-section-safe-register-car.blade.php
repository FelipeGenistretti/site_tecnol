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
    <h1 class="text-textPrimary text-contrast text-3xl max-sm:text-[38px] max-sm:flex max-sm:text-center max-sm:justify-center">Safe Register Car</h1>
  </div>

  <div class="container-x py-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 text-textPrimary">
      <div>
        <div class="mb-10">
          <h1 class="text-5xl mb-10 max-sm:flex max-sm:justify-center max-sm:text-[38px] max-sm:text-center text-contrast">Os impactos positivos do nosso sistema.</h1>
          <p class="mb-4 textContainer max-sm:text-[16px] text-contrast">
            O SAFE REGISTER CAR é a solução desenvolvida que oferece a interação entre as Instituições Financeiras e aos Órgãos Executivos de Trânsito (DETRANs) de todo o Brasil, sempre atendendo as exigências legais e em conformidade à resolução 807/2020 do CONTRAN, para todo e qualquer registro de contratos de veículos financiados com cláusulas de alienação fiduciária, arrendamento mercantil e reserva de domínio ou penhor.
          </p>
          <p class="textContainer text-contrast">
            Com o registro eletrônico do contrato, a informação passa a ser eletrônica, possibilitando controle de custos através da redução de volume em arquivo físico, padronização, transparência, segurança e automatização do processo de registro eletrônico de contratos. O SAFE REGISTER CAR é uma forma mais moderna, segura e eficiente para o registro dos contratos de garantia de financiamento.
          </p>
        </div>
        <div class="grid grid-cols-2 gap-5 text-textPrimary">
          <!-- Card 1 -->
          <div class="lg:p-5 max-sm:p-3 rounded-md flex items-center gap-3 bg-contrast text-contrast bg-[#F8F9FA] shadow-md transition transform hover:scale-105 duration-300 hover:shadow-lg">
            <img src="/relogio.png" alt="">
            <p class="textContainer max-sm:text-[14px]">80% mais rápido</p>
          </div>

          <!-- Card 2 -->
          <div class="lg:p-5 max-sm:p-3 rounded-md flex items-center gap-2 bg-contrast text-contrast bg-[#F8F9FA] shadow-md transition transform hover:scale-105 duration-300 hover:shadow-lg">
            <img src="/checkOrange.png" alt="">
            <p class="textContainer max-sm:text-[14px]">Totalmente digital</p>
          </div>

          <!-- Card 3 -->
          <div class="lg:p-5 max-sm:p-3 rounded-md flex items-center gap-2 bg-contrast text-contrast bg-[#F8F9FA] shadow-md transition transform hover:scale-105 duration-300 hover:shadow-lg">
            <img src="/escudo.png" alt="">
            <p class="textContainer max-sm:text-[14px]">100% seguro</p>
          </div>

          <!-- Card 4 -->
          <div class="lg:p-5 max-sm:p-3 rounded-md flex items-center gap-2 bg-contrast text-contrast bg-[#F8F9FA] shadow-md transition transform hover:scale-105 duration-300 hover:shadow-lg">
            <img src="/cadeadoOrange.png" alt="">
            <p class="textContainer max-sm:text-[14px]">Dados protegidos</p>
          </div>
        </div>
      </div>

      <!-- Gráfico -->
      <div>
        <div class="rounded-md shadow-xl bg-contrast bg-[#F2F2F2] h-full flex items-center justify-center p-6">
          <div class="text-center">
            <img src="/PieLayer.png" alt="">
            <div class="flex justify-center mt-4 text-contrast">
              <ol class="flex flex-col sm:flex-row justify-center gap-3 text-sm">
                <li>Redução de custos operacionais</li>
                <li>Economia de tempo e maior transparência</li>
              </ol>
            </div>
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
