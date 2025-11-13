@extends('layouts.app')

@section('title','Fale Conosco - TecShare') 

@section('content')
 <div class="titulo flex items-center bg-bgSecondary justify-center lg:justify-start text-center lg:text-start  text-contrast bg-contrast">
  <h1 class=" text-textPrimary container-x  text-contrast bg-contrast">Contato</h1>
</div> 

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
    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-[70%_28%] gap-6">
      
      <!-- FORMULÁRIO (70%) -->
      <div class="bg-gray-100/30 bg-contrast rounded-md shadow-md p-6 textContainer">
        @if(session('success'))
          <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
              {{ session('success') }}
          </div>
        @endif

       <form action="{{ route('fale-conosco.store') }}" id="faleConoscoForm" method="POST">
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

  <div class="g-recaptcha" data-sitekey="6LfoBQQsAAAAALvq1uHB9aofQRKJcb2uSXQzl1am"></div>


  <div class="flex max-sm:justify-center pt-5">
  <button
    id="btnSubmit"
    type="submit"
    class="bg-bgButtonPrimary lg:w-[15%] button-contrast uppercase text-md text-white  hover:bg-purple-800 transition duration-300 w-full p-3 rounded-md flex items-center justify-center gap-2"
  >
    <span id="btnText ">Enviar</span>

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
            <p class="text-contrast">atendimento@tecshare.com.br</p>
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
            <p>ouvidoria@tecshare.com.br</p>
          </div>
        </div>

       

        <div class="bg-gray-100/30 bg-contrast rounded-md shadow-md p-5 flex items-center gap-3 transform hover:scale-105 hover:shadow-xl transition duration-300">
            <img src="/telefoneNoContrast.png" width="40" height="40" alt="" class="" id="telefoneSemContraste">
            <img src="/telefoneContrast.png" width="40" height="40" alt="" class="hidden" id="telefoneContraste">


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
  function onSubmit(token) {
    // Quando o usuário clicar e o token for gerado
    document.getElementById("demo-form").submit();
  }
</script>


<script src="https://www.google.com/recaptcha/api.js" async defer></script>


        <script>
        document.addEventListener('DOMContentLoaded', () => {
            const logo = document.getElementById("telefoneSemContraste");
            const logoContrast = document.getElementById("telefoneContraste");

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
  const form = document.getElementById('faleConoscoForm');
  const btn = document.getElementById('btnSubmit');
  const text = document.getElementById('btnText');
  const loader = document.getElementById('btnLoader');

  form.addEventListener('submit', (event) => {
  //  event.preventDefault();


    btn.disabled = true;
    btn.classList.add('opacity-80', 'cursor-not-allowed');
    text.textContent = "Enviando...";
    loader.classList.remove('hidden');

    
    setTimeout(() => {
      btn.disabled = false;
      btn.classList.remove('opacity-80', 'cursor-not-allowed');
      text.textContent = "Enviar";
      loader.classList.add('hidden');
    }, 2000);
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

