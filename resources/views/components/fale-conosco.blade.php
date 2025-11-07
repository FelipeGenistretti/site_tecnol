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
    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-[60%_40%] gap-6">
      
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
      <label for="name" class="font-medium mb-1 text-contrast">Nome</label>
      <input
        type="text"
        name="nome"
        id="name"
        value="{{ old('nome') }}"
        placeholder="Digite seu nome"
        class="p-2 border rounded-md w-full @error('nome') border-red-500 @enderror"
      />
      @error('nome')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <div class="flex flex-col">
      <label for="email" class="font-medium mb-1 text-contrast">E-mail</label>
      <input
        type="email"
        name="email"
        id="email"
        value="{{ old('email') }}"
        placeholder="email@email.com.br"
        class="p-2 border rounded-md w-full @error('email') border-red-500 @enderror"
      />
      @error('email')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <div class="flex flex-col">
      <label for="phone" class="font-medium mb-1 text-contrast">Telefone</label>
      <input
        type="text"
        name="telefone"
        id="phone"
        value="{{ old('telefone') }}"
        placeholder="(xx) xxxxx-xxxx"
        class="p-2 border rounded-md w-full @error('telefone') border-red-500 @enderror"
      />
      @error('telefone')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>
  </div>

  <div class="grid grid-cols-1 py-5">
    <div class="flex flex-col rounded-md">
      <label class="font-medium mb-1 text-contrast" for="mensagem">Mensagem</label>
      <textarea
        name="mensagem"
        id="mensagem"
        rows="4"
        placeholder="Escreva aqui sua mensagem"
        class="p-3 border rounded-md resize-none @error('mensagem') border-red-500 @enderror"
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

            <img src="/email.png" alt="" class="" />

          <div>
            <p class="opacity-65 mb-2 text-contrast">Email</p>
            <p class="text-contrast">atendimento@sistemastecnol.com.br</p>
          </div>
        </div>

        <div class="bg-gray-100/30 bg-contrast rounded-md shadow-md p-5 flex items-center gap-3 transform hover:scale-105 hover:shadow-xl transition duration-300">
            <img src="/email.png" alt="" class="" />
          <div class="text-contrast">
            <p class="opacity-65 mb-2">Ouvidoria</p>
            <p>ouvidoria@sistemastecnol.com.br</p>
          </div>
        </div>

        <div class="bg-gray-100/30 bg-contrast rounded-md shadow-md p-5 lg:w-full flex items-center gap-3 transform hover:scale-105 hover:shadow-xl transition duration-300">
            <img src="/email.png" alt="" class="" />
          <div class="text-contrast">
            <p class="opacity-65 mb-2">Encarregado de proteção de dados</p>
            <p>Saron Correa</p>
            <p>dpo@sistemastecnol.com.br</p>
          </div>
        </div>

        <div class="bg-gray-100/30 bg-contrast rounded-md shadow-md p-5 flex items-center gap-3 transform hover:scale-105 hover:shadow-xl transition duration-300">
            <img src="/email.png" alt="" class="" />
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