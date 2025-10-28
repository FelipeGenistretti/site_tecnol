<div class="hero relative bg-cover bg-center min-h-[500px] md:min-h-[700px]" style="background-image: url('/banner.png');">

  <!-- Overlay do banner -->
  <div class="absolute inset-0 bg-black/30 z-0"></div>

  <!-- Conteúdo do Hero -->
  <div class="hero-content relative z-10 container-x flex flex-col justify-center pt-[228px] pb-10 max-sm:items-center">
    <h1 class="uppercase text-5xl font-bold mb-2 text-white max-sm:text-center max-sm:font-semibold max-sm:text-4xl">
      Safe Register Car
    </h1>

    <p class="md:hidden text-white font-semibold max-sm:text-xl text-center">
      Registro de contrato de veículos
    </p>

    <p class="hidden md:flex mb-2 text-xl text-white mt-2">
      A solução mais moderna, segura e eficiente para registro <br/>
      eletrônico de contratos de garantia de financiamento de <br/>
      veículos.
    </p>

    <!-- Estatísticas -->
    <div class="hidden md:flex flex-col md:flex-row gap-6 mt-10">
      <div class="flex flex-col text-white gap-2 md:gap-4">
        <p class="text-5xl font-bold">27+</p>
        <p>Estados Brasileiros</p>
      </div>
      <div class="flex flex-col text-white gap-2 md:gap-4">
        <p class="text-5xl font-bold">100%</p>
        <p>Conformidade Legal</p>
      </div>
      <div class="flex flex-col text-white gap-2 md:gap-4">
        <p class="text-5xl font-bold">24/7</p>
        <p>Disponibilidade</p>
      </div>
    </div>

    <!-- Botões -->
    <div class="flex flex-col sm:flex-row gap-4 mt-10">
      <button type="button"
              class="w-full flex items-center gap-2 bg-orange-600 text-white font-semibold uppercase rounded-md px-4 py-3 hover:bg-orange-400 transition duration-300 sm:w-auto relative z-10">
        <div class="max-sm:hidden">
          <img src="/locked.png" alt="">
        </div>
        <p class="max-sm:hidden">acesso ao sistema</p>
        
        <div class="flex items-center gap-2">
          <p class="md:hidden">saiba mais</p>
          <div class="md:hidden w-[20px]">
            <img src="/avancar.png" alt="">
          </div>
        </div>
      </button>

      <button type="button"
              class="hidden md:flex items-center gap-2 border text-white uppercase rounded-md px-4 py-3 transform hover:bg-white/10 hover:scale-105 transition duration-300 relative z-10">
        <p>Saiba mais</p>
        <img src="/avancar.png" alt="" class="w-[20px] h-[20px]">
      </button>
    </div>
  </div>

  <!-- Seção de cadastro -->
  <div class="hero-signup bg-[#125e7a] py-12 md:py-16 flex flex-col md:flex-row justify-between items-center gap-6 shadow-lg mt-12 relative z-10">
    <div class="container-x flex flex-col gap-2 md:gap-3 text-center md:text-left">
      <p class="text-white text-xl font-semibold max-sm:text-2xl">
        Faça seu cadastro sem custo de adesão e mensalidade
      </p>
      <p class="text-white sm:text">
        pague somente pelas transações executadas
      </p>
    </div>

    <div class="container-x">
      <button type="button" class="sm:w-full flex items-center p-3 gap-2 transform hover:scale-105 duration-300 hover:shadow-md border rounded-md relative z-10">
        <img src="/check.png" class="w-[20px]" alt="">
        <p class="uppercase text-white">quero conhecer</p>
      </button>
    </div>
  </div>
</div>
