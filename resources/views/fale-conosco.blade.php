@extends('layouts.app')

@section('content')
<div class="bg-contrast container-x py-12" id="faleConosco">
  <div class="flex flex-col justify-center items-center gap-2">
    <h1 class="text-4xl text-contrast">Fale conosco</h1>
    <p class="text-contrast text-md text-gray-500 font-semibold max-sm:text-center max-sm:text-lg textContainer">
      Envie-nos um e-mail com uma sugestão, crítica ou elogio
    </p>
  </div>

  <div class="h-[72px] w-[371px] hidden bg-[#2ABB7F] flex items-center justify-center fixed inset-20 z-[9999]" id="modalSuccess">
    <div class="flex items-center justify-center gap-3">
        <img src="/iconCheckModal.png" alt="">
        <p class="text-white text-contrast">Cadastro realizado com sucesso!</p>
        <button type="button" class="flex items-center">
            <img src="/iconCloseModal.png" alt="" id="close">
        </button>
    </div>
</div>

<div class="h-[72px] w-[371px] hidden bg-[#E2B203] flex items-center justify-center" id="modalCamposObrigatorios">
    <div class="flex items-center justify-center gap-3">
        <img src="/alertModalCamposObrigatorios.png" alt="">
        <p class="text-black">Preencha os campos obrigatórios</p>
        <button type="button" class="flex items-center">
            <img src="/closeModalBlack.png" alt="" id="btnClose">
        </button>
    </div>
</div>

  <div class="pt-5">
    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-[70%_30%] gap-6">
      
      <!-- FORMULÁRIO (70%) -->
      <div class="bg-gray-100/30 bg-contrast rounded-md shadow-md p-6 textContainer">
        @if(session('success'))
          <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
              {{ session('success') }}
          </div>
        @endif

       <form action="{{ route('fale-conosco.store') }}" method="POST">
  @csrf

  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="flex flex-col">
      <label for="name" class="text-sm mb-1 text-contrast">Nome</label>
      <input
        type="text"
        name="nome"
        id="name"
        value="{{ old('nome') }}"
        placeholder="Digite seu nome"
        class="input-contrast p-2 border rounded-md w-full @error('nome') border-red-500 @enderror"
      />
      @error('nome')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <div class="flex flex-col">
      <label for="email" class="text-sm mb-1 text-contrast">E-mail</label>
      <input
        type="email"
        name="email"
        id="email"
        value="{{ old('email') }}"
        placeholder="email@email.com.br"
        class="input-contrast p-2 border rounded-md w-full @error('email') border-red-500 @enderror"
      />
      @error('email')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <div class="flex flex-col">
      <label for="phone" class="text-sm mb-1 text-contrast">Telefone</label>
      <input
        type="text"
        name="telefone"
        id="phone"
        value="{{ old('telefone') }}"
        placeholder="(xx) xxxxx-xxxx"
        class="input-contrast p-2 border rounded-md w-full @error('telefone') border-red-500 @enderror"
      />
      @error('telefone')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>
  </div>

  <div class="grid grid-cols-1 py-5">
    <div class="flex flex-col rounded-md">
      <label class="text-sm mb-1 text-contrast" for="mensagem">Mensagem</label>
      <textarea
        name="mensagem"
        id="mensagem"
        placeholder="Escreva aqui sua mensagem"
        class="input-contrast p-3 border rounded-md resize-none @error('mensagem') border-red-500 @enderror"
      >{{ old('mensagem') }}</textarea>
      @error('mensagem')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>
  </div>

  <div class="flex gap-2 items-center mb-4">
    <input type="checkbox" name="privacy" id="privacy" class="accent-orange-600 scale-125" {{ old('privacy') ? 'checked' : '' }} />
    <p class="text-contrast">
      Li e concordo com a
      <span>
        <a href="#" class="text-orange-600 underline font-bold text-contrast">Política de Privacidade</a>
      </span>
      e autorizo o tratamento dos meus dados.
    </p>
  </div>
  @error('privacy')
    <p class="text-red-500 text-sm mt-1 mb-4">{{ $message }}</p>
  @enderror

  <div class="flex justify-center pt-5">
  <button
    id="btnSubmit"
    type="submit"
    class="button-contrast uppercase text-md text-white bg-orange-600 hover:bg-orange-400 transition duration-300 w-full p-3 rounded-md flex items-center justify-center gap-2"
  >
    <span id="btnText">Enviar</span>

    <!-- Spinner -->
    <span
      id="btnLoader"
      class="hidden w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin"
    ></span>
  </button>
</div>

</form>

      </div>

      <!-- BLOCO DE INFORMAÇÕES (30%) -->
      <div class="flex flex-col gap-4 textContainer">
        <div class="bg-gray-100/30 bg-contrast rounded-md shadow-md p-5 flex items-center gap-3 transform hover:scale-105 hover:shadow-xl transition duration-300 lg:w-full">

          <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#F15A29]">
            <path class="svg-bg" d="M0 10C0 4.47715 4.47715 0 10 0H30C35.5228 0 40 4.47715 40 10V30C40 35.5228 35.5228 40 30 40H10C4.47715 40 0 35.5228 0 30V10Z" fill="#FFF6F3"/>
            <path class="svg"  d="M28.3332 15.8333L20.8407 20.6058C20.5864 20.7535 20.2976 20.8313 20.0036 20.8313C19.7096 20.8313 19.4208 20.7535 19.1665 20.6058L11.6665 15.8333" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
            <path class="svg"  d="M26.6665 13.3333H13.3332C12.4127 13.3333 11.6665 14.0795 11.6665 15V25C11.6665 25.9205 12.4127 26.6666 13.3332 26.6666H26.6665C27.587 26.6666 28.3332 25.9205 28.3332 25V15C28.3332 14.0795 27.587 13.3333 26.6665 13.3333Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>


          <div>
            <p class="opacity-65 mb-2 text-contrast">Email</p>
            <p class="text-contrast">atendimento@sistemastecnol.com.br</p>
          </div>
        </div>

        <div class="bg-gray-100/30 bg-contrast rounded-md shadow-md p-5 flex items-center gap-3 transform hover:scale-105 hover:shadow-xl transition duration-300">
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#F15A29]">
            <path class="svg-bg" d="M0 10C0 4.47715 4.47715 0 10 0H30C35.5228 0 40 4.47715 40 10V30C40 35.5228 35.5228 40 30 40H10C4.47715 40 0 35.5228 0 30V10Z" fill="#FFF6F3"/>
            <path class="svg"  d="M28.3332 15.8333L20.8407 20.6058C20.5864 20.7535 20.2976 20.8313 20.0036 20.8313C19.7096 20.8313 19.4208 20.7535 19.1665 20.6058L11.6665 15.8333" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
            <path class="svg"  d="M26.6665 13.3333H13.3332C12.4127 13.3333 11.6665 14.0795 11.6665 15V25C11.6665 25.9205 12.4127 26.6666 13.3332 26.6666H26.6665C27.587 26.6666 28.3332 25.9205 28.3332 25V15C28.3332 14.0795 27.587 13.3333 26.6665 13.3333Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>


          <div class="text-contrast">
            <p class="opacity-65 mb-2">Ouvidoria</p>
            <p>ouvidoria@sistemastecnol.com.br</p>
          </div>
        </div>

        <div class="bg-gray-100/30 bg-contrast rounded-md shadow-md p-5 lg:w-full flex items-center gap-3 transform hover:scale-105 hover:shadow-xl transition duration-300">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#F15A29]">
            <path class="svg-bg" d="M0 10C0 4.47715 4.47715 0 10 0H30C35.5228 0 40 4.47715 40 10V30C40 35.5228 35.5228 40 30 40H10C4.47715 40 0 35.5228 0 30V10Z" fill="#FFF6F3"/>
            <path class="svg"  d="M28.3332 15.8333L20.8407 20.6058C20.5864 20.7535 20.2976 20.8313 20.0036 20.8313C19.7096 20.8313 19.4208 20.7535 19.1665 20.6058L11.6665 15.8333" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
            <path class="svg"  d="M26.6665 13.3333H13.3332C12.4127 13.3333 11.6665 14.0795 11.6665 15V25C11.6665 25.9205 12.4127 26.6666 13.3332 26.6666H26.6665C27.587 26.6666 28.3332 25.9205 28.3332 25V15C28.3332 14.0795 27.587 13.3333 26.6665 13.3333Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          <div class="text-contrast">
            <p class="opacity-65 mb-2">Encarregado de proteção de dados</p>
            <p>Saron Correa</p>
            <p>dpo@sistemastecnol.com.br</p>
          </div>
        </div>

        <div class="bg-gray-100/30 bg-contrast rounded-md shadow-md p-5 flex items-center gap-3 transform hover:scale-105 hover:shadow-xl transition duration-300">
            <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path d="M0 10.25C0 4.72715 4.47715 0.25 10 0.25H30C35.5228 0.25 40 4.72715 40 10.25V30.25C40 35.7728 35.5228 40.25 30 40.25H10C4.47715 40.25 0 35.7728 0 30.25V10.25Z" fill="#FFF6F3"/>
            <rect width="40" height="40.5" fill="url(#pattern0_1_3993)"/>
            <defs>
            <pattern id="pattern0_1_3993" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_1_3993" transform="scale(0.0125 0.0123457)"/>
            </pattern>
            <image id="image0_1_3993" width="80" height="81" preserveAspectRatio="none" xlink:href="data:image/png;base64,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"/>
            </defs>
            </svg>


          <div class="text-contrast">
            <p class="opacity-65 mb-2">Telefones</p>
            <p>(31) 3324-6460</p>
            <p>0800 590 4004</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


<script>
  document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector(`form[action='{{ route("fale-conosco.store") }}']`);
    const btn = document.getElementById('btnSubmit');
    const text = document.getElementById('btnText');
    const loader = document.getElementById('btnLoader');

    form.addEventListener('submit', () => {
      btn.disabled = true;
      btn.classList.add('opacity-80', 'cursor-not-allowed');
      text.textContent = "Enviando...";
      loader.classList.remove('hidden');
    });
  });
</script>


@if(session('success'))
 <script>
    document.addEventListener("DOMContentLoaded", () => {
      const modal = document.getElementById("modalSuccess");
      const btnClose = document.getElementById("close");

      modal.classList.remove("hidden");
      modal.classList.add("opacity-0", "transition", "duration-500");
      setTimeout(() => modal.classList.remove("opacity-0"), 10);

      btnClose.addEventListener("click", () => {
        modal.classList.add("opacity-0");
        setTimeout(() => modal.classList.add("hidden"), 500);
      });

      setTimeout(() => {
        modal.classList.add("opacity-0");
        setTimeout(() => modal.classList.add("hidden"), 500);
      }, 3000);
    });
  </script>
@endif

@if($errors->any())
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const modalCamposObrigatorios = document.getElementById("modalCamposObrigatorios");
        const btnClose = document.getElementById("btnClose");

        modalCamposObrigatorios.classList.remove("hidden");
        modalCamposObrigatorios.classList.add("opacity-0", "transition", "duration-500");
        setTimeout(() => modalCamposObrigatorios.classList.remove("opacity-0"), 10);

        btnClose.addEventListener("click", () => {
            modalCamposObrigatorios.classList.add("opacity-0");
            setTimeout(() => modalCamposObrigatorios.classList.add("hidden"), 500);
        });

        setTimeout(() => {
            modalCamposObrigatorios.classList.add("opacity-0");
            setTimeout(() => modalCamposObrigatorios.classList.add("hidden"), 500);
        }, 3000);
    });
</script>
@endif

