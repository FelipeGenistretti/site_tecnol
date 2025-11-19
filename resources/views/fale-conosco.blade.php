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

  <div class="h-[72px] w-[371px] hidden bg-[#2ABB7F] flex items-center justify-center fixed inset-20 z-[9999] absolute top-[300px]" id="modalSuccess">
    <div class="flex items-center justify-center gap-3">
        <img src="/iconCheckModal.png" alt="">
        <p class="text-white text-contrast">Cadastro realizado com sucesso!</p>
        <button type="button" class="flex items-center">
            <img src="/iconCloseModal.png" alt="" id="close">
        </button>
    </div>
</div>

<div class="h-[72px] w-[371px] hidden bg-[#E2B203] flex items-center justify-center z-[9999] absolute top-[300px]" id="modalCamposObrigatorios">
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
        <a href="#" class="text-[#411F56] underline font-bold text-contrast">Política de Privacidade</a>
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

          <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="button-a-contrast text-[#411F56]">
        <path class="svg-bg" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" fill="white"/>
        <path class="icon-stroke" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" stroke=""/>
        <path class="svg" d="M28.3327 15.8334L20.8402 20.6059C20.5859 20.7536 20.2971 20.8313 20.0031 20.8313C19.7091 20.8313 19.4203 20.7536 19.166 20.6059L11.666 15.8334" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
        <path class="svg" d="M26.666 13.3334H13.3327C12.4122 13.3334 11.666 14.0796 11.666 15V25C11.666 25.9205 12.4122 26.6667 13.3327 26.6667H26.666C27.5865 26.6667 28.3327 25.9205 28.3327 25V15C28.3327 14.0796 27.5865 13.3334 26.666 13.3334Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>


          <div>
            <p class="opacity-65 mb-2 text-contrast">Email</p>
            <p class="text-contrast">atendimento@tecshare.com.br</p>
          </div>
        </div>

        <div class="bg-gray-100/30 bg-contrast rounded-md shadow-md p-5 flex items-center gap-3 transform hover:scale-105 hover:shadow-xl transition duration-300">
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="button-a-contrast text-[#411F56]">
        <path class="svg-bg" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" fill="white"/>
        <path class="icon-stroke" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" stroke=""/>
        <path class="svg" d="M28.3327 15.8334L20.8402 20.6059C20.5859 20.7536 20.2971 20.8313 20.0031 20.8313C19.7091 20.8313 19.4203 20.7536 19.166 20.6059L11.666 15.8334" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
        <path class="svg" d="M26.666 13.3334H13.3327C12.4122 13.3334 11.666 14.0796 11.666 15V25C11.666 25.9205 12.4122 26.6667 13.3327 26.6667H26.666C27.5865 26.6667 28.3327 25.9205 28.3327 25V15C28.3327 14.0796 27.5865 13.3334 26.666 13.3334Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>


          <div class="text-contrast">
            <p class="opacity-65 mb-2">Ouvidoria</p>
            <p>ouvidoria@tecshare.com.br</p>
          </div>
        </div>

       

        <div class="bg-gray-100/30 bg-contrast rounded-md shadow-md p-5 flex items-center gap-3 transform hover:scale-105 hover:shadow-xl transition duration-300">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="button-a-contrast text-[#411F56]">
        <path class="svg-bg" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" fill="white"/>
        <path class="icon-stroke" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" stroke=""/>
        <path class="svg" d="M17.0544 11.8159L17.7237 11.6142C18.8259 11.2819 20.0034 11.8188 20.4753 12.8687L21.0779 14.2092C21.4802 15.104 21.2682 16.1557 20.5507 16.8248L19.4961 17.8082C19.4552 17.8463 19.4313 17.8993 19.43 17.9553C19.4221 18.2691 19.6301 18.8343 20.0735 19.6024C20.4011 20.1699 20.6986 20.5749 20.9536 20.8129C21.043 20.8965 21.1141 20.9496 21.1625 20.982L21.2356 21.027L21.2703 21.0206L22.718 20.578C23.656 20.2912 24.6725 20.6332 25.2465 21.4286L26.1021 22.6144C26.7738 23.5454 26.653 24.8298 25.8195 25.6192L25.3111 26.1007C24.4825 26.8854 23.2921 27.156 22.2057 26.8067C20.1713 26.1526 18.3452 24.3881 16.705 21.5472C15.0622 18.7018 14.4478 16.2347 14.9027 14.1436C15.1306 13.0961 15.878 12.2431 16.8758 11.8757L17.0544 11.8159ZM17.278 13.0599C16.6944 13.2863 16.2587 13.7914 16.1242 14.4094C15.7455 16.1502 16.2863 18.3219 17.7876 20.9222C19.2865 23.5185 20.8942 25.072 22.5883 25.6167C23.2401 25.8263 23.9544 25.6639 24.4516 25.1931L24.9599 24.7116C25.3388 24.3528 25.3937 23.769 25.0884 23.3458L24.2328 22.16C23.9719 21.7985 23.5098 21.643 23.0835 21.7734L21.5938 22.2272L21.4781 22.2527C20.6009 22.3975 19.8267 21.675 18.991 20.2274C18.4419 19.2763 18.1652 18.5246 18.1803 17.9237C18.1902 17.5321 18.3572 17.161 18.6436 16.8939L19.6981 15.9106C20.0243 15.6064 20.1207 15.1285 19.9378 14.7216L19.3352 13.3812C19.1207 12.904 18.5855 12.6599 18.0845 12.811L17.4152 13.0128L17.278 13.0599Z" fill="currentColor" stroke="currentColor" stroke-width="0.2"/>
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

