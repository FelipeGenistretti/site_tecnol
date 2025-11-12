@extends('layouts.app')

@section('title','TecShare')

@section('content')
{{-- Skeleton Loading --}}
<div id="skeleton" class="container-x py-10 animate-pulse">
    <!-- Título -->
    <div class="h-10 w-3/4 bg-gray-300 rounded mx-auto mb-8"></div>

    <!-- Form container -->
    <div class="w-full max-w-[1200px] bg-gray-200 rounded-lg p-6 sm:p-8 shadow-md mx-auto">
        <!-- Seletor duplo -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
            <div class="h-10 bg-gray-300 rounded"></div>
            <div class="h-10 bg-gray-300 rounded"></div>
        </div>

        <!-- Inputs principais -->
        <div class="grid grid-cols-1 md:grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <div class="h-10 bg-gray-300 rounded"></div>
            <div class="h-10 bg-gray-300 rounded"></div>
            <div class="h-10 bg-gray-300 rounded"></div>
            <div class="h-10 bg-gray-300 rounded"></div>
        </div>

        <!-- Textarea Observações -->
        <div class="h-24 bg-gray-300 rounded mb-6"></div>

        <!-- Upload -->
        <div class="h-48 bg-gray-300 rounded mb-6"></div>

        <!-- Checkbox -->
        <div class="h-6 w-3/4 bg-gray-300 rounded mb-6"></div>

        <!-- Botão Enviar -->
        <div class="h-12 w-1/4 bg-gray-300 rounded"></div>
    </div>
</div>

<div id="content-real" class="hidden bg-contrast text-contrast">
<div class="flex items-center py-12 bg-bgSecondary justify-center lg:justify-start text-center lg:text-start  text-contrast bg-contrast">
  <h1 class="text-[38px] text-textPrimary container-x  text-contrast bg-contrast">Solicitação do titular</h1>
</div>

<div class=" text-contrast bg-contrast h-[72px] w-[371px] hidden bg-[#2ABB7F] flex items-center justify-center right-10 mt-4 fixed z-50 transition-all duration-300"
     id="modalSuccess">
  <div class="flex items-center justify-center gap-3  text-contrast bg-contrast">
      <img src="/iconCheckModal.png" alt="">
      <p class="text-white  text-contrast bg-contrast">Cadastro realizado com sucesso!</p>
      <button type="button" id="closeSuccessModal">
          <img src="/iconCloseModal.png" alt="">
      </button>
  </div>
</div>

<div class="h-[72px] w-[371px] hidden bg-[#E2B203] flex items-center right-10 mt-4 justify-center fixed z-50 transition-all duration-300"
     id="modalCamposObrigatorios">
  <div class="flex items-center justify-center gap-3  text-contrast bg-contrast">
      <img src="/alertModalCamposObrigatorios.png" alt="">
      <p class="text-black  text-contrast bg-contrast">Preencha os campos obrigatórios</p>
      <button type="button" id="closeCamposModal">
          <img src="/closeModalBlack.png" alt="">
      </button>
  </div>
</div>

<!-- Conteúdo principal -->
<div class="mt-[60px] flex flex-col items-center px-4 sm:px-8  text-contrast bg-contrast  text-contrast bg-contrast">
  <!-- Título e subtítulo -->
  <div class="text-center max-w-3xl  text-contrast bg-contrast">
    <h1 class="text-2xl sm:text-3xl lg:text-[52px] font-semibold mb-3 text-textPrimary  text-contrast bg-contrast">
      Canal de solicitação do titular
    </h1>
    <br>
    <p class="text-textPrimary text-base sm:text-lg  text-contrast bg-contrast">
      Preencha todos os campos abaixo para concluir a solicitação
    </p>
  </div>

  <!-- Formulário -->
  <div class="w-full max-w-[1200px] bg-gray-100 rounded-lg p-6 sm:p-8 shadow-md mt-8 mb-10  text-contrast bg-contrast">
    <form action="{{ route('enviar-solicitacao') }}"  accept="image/*,.pdf,.doc,.docx,.xls,.xlsx" method="post" enctype="multipart/form-data" class="flex flex-col space-y-6">
      @csrf
      <!-- Seletor duplo -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4  text-contrast bg-contrast">
        <div class="flex flex-col">
          <label class="text-sm font-medium mb-1  text-contrast bg-contrast">Tipo da solicitação</label>
          <select class=" input-contrast border rounded px-3 py-2 w-full bg-white  text-contrast bg-contrast" name="solicitacao" >
            <option value="">Selecionar</option>
            <option>A empresa possui meus dados pessoais</option>
            <option>Dados pessoais que a empresa tem sobre mim</option>
            <option>Atualizar meus dados pessoais</option>
            <option>Excluir os dados pessoais que a empresa tem sobre mim</option>
            <option>Revogar o consentimento para tratar meus dados pessoais</option>
          </select>
        </div>

        <div class="flex flex-col  text-contrast bg-contrast">
          <label class="text-sm font-medium mb-1  text-contrast bg-contrast">Classificação do titular</label>
          <select class=" input-contrast border rounded px-3 py-2 w-full bg-white  text-contrast bg-contrast" name="classificacao" >
            <option value="">Selecionar</option>
            <option>Clientes</option>
            <option>Colaboradores</option>
            <option>Ex-colaborador</option>
            <option>Outro</option>
          </select>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4  text-contrast bg-contrast">
        <div class="flex flex-col  text-contrast bg-contrast">
          <label class="text-sm font-medium mb-1">Nome</label>
          <input type="text" class=" input-contrast border rounded px-3 py-2 w-full  text-contrast bg-contrast" placeholder="Digite seu nome" name="nome"/>
        </div>
        <div class="flex flex-col">
          <label class="text-sm font-medium mb-1">CPF</label>
          <input type="text" class="input-contrast border rounded px-3 py-2 w-full  text-contrast bg-contrast" placeholder="000.000.000-00" name="cpf" />
        </div>
        <div class="flex flex-col">
          <label class="text-sm font-medium mb-1">E-mail</label>
          <input type="text" class="input-contrast border rounded px-3 py-2 w-full  text-contrast bg-contrast" placeholder="email@dominio.com.br" name="email" />
        </div>
        <div class="flex flex-col">
          <label class="text-sm font-medium mb-1">Telefone</label>
          <input type="text" class="input-contrast border rounded px-3 py-2 w-full  text-contrast bg-contrast" placeholder="(00) 00000-0000" name="telefone" />
        </div>
      </div>

      <!-- Observações -->
      <div class="flex flex-col">
        <label class="text-sm font-medium mb-1">Observações</label>
        <textarea class="input-contrast border rounded px-3 py-2 w-full min-h-[120px]  text-contrast bg-contrast" placeholder="Escreva aqui"  name="observacoes"></textarea>
        <p class="text-sm ml-1 text-gray-600 text-contrast">Limite máximo de 8000 caracteres</p>
      </div>

      <!-- Upload -->
      <label class="input-contrast text-contrast bg-contrast border-2 border-dashed border-gray-400/30 rounded px-3 w-full flex flex-col items-center justify-center cursor-pointer bg-gray-50 hover:bg-gray-100 h-[200px] gap-3 transition-colors">
        
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast bg-contrast">
<path d="M48.1229 45H15.2946C15.2946 45 8.88135 45 7.6347 38.0534C6.38853 28.3228 14.2004 27.3119 14.2004 27.3119C14.2004 27.3119 12.0348 14.0232 26.2374 12.5825C38.2744 11.3615 40.463 24.0971 40.463 24.0971C40.463 24.0971 52.5 24.5316 52.5 35.7379C52.5 42.8271 48.1229 45 48.1229 45Z" stroke="currentColor" stroke-width="5"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M25.6959 28.2666V38.3118H29.4347V28.2666L31.3666 30.0676L33.7341 26.7705L27.5653 21.0197L21.3965 26.7705L23.764 30.0676L25.6959 28.2666Z" fill="currentColor"/>
</svg>



        <p class="text-sm text-center textContainer  text-contrast bg-contrast">
          Arraste e solte seu(s) arquivo(s) aqui <br> ou
        </p>
        <span class=" input-contrast textContainer py-3 px-6 rounded border border-[#B3B3B3] cursor-pointer uppercase">
          Adicionar arquivos
        </span>
        <input type="file" name="files" class="hidden">
      </label>

      <p class="text-sm text-textSecondary my-3 textContainer text-contrast">
        Tamanho máximo permitido do anexo: 5MB
      </p>

      <div class="flex flex-col">
        <div class="flex gap-2 items-center mb-4">
          <input type="checkbox" name="privacy" id="privacy" class="accent-orange-600 scale-125 textContainer" {{ old('privacy') ? 'checked' : '' }}/>
          <p class="textContainer text-sm">
            Li e concordo com a
            <a href="#" class="text-orange-600 underline font-bold">Política de Privacidade</a>
          </p>
        </div>

        <button
          id="btnSubmit"
          type="submit"
          class="button-contrast textContainer lg:w-[20%] flex items-center justify-center gap-2 uppercase px-6 py-3 bg-bgButtonPrimary hover:bg-orange-400 transition duration-300 rounded-md text-white"
        >
          <span id="btnSubmitText" class="flex items-center gap-2">
            <img src="/uploadFile.png" alt="">
            <p class="text-sm">Enviar</p>
          </span>

          <span
            id="btnSubmitLoader"
            class="hidden w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin"
          ></span>
        </button>

      </div>

    </form>
  </div>
</div>

</div>
@endsection

<script>
  window.addEventListener("load", () => {
        const skeleton = document.getElementById('skeleton');
        const content = document.getElementById('content-real');

        skeleton.classList.add('hidden');
        content.classList.remove('hidden');
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector("form[action='{{ route('enviar-solicitacao') }}']");
  const btn = document.getElementById('btnSubmit');
  const text = document.getElementById('btnSubmitText');
  const loader = document.getElementById('btnSubmitLoader');

  if (form) {
    form.addEventListener('submit', () => {
      btn.disabled = true;
      btn.classList.add('opacity-80', 'cursor-not-allowed');

      text.classList.add('hidden');
      loader.classList.remove('hidden');
    });
  }
});
</script>



@if(session('success'))
<script>
document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("modalSuccess");
  const btnClose = document.getElementById("close");

  if (!modal) return;
  modal.classList.remove("hidden");
  modal.classList.add("opacity-0");
  setTimeout(() => modal.classList.remove("opacity-0"), 10);

  if (btnClose) {
    btnClose.addEventListener("click", () => {
      modal.classList.add("opacity-0");
      setTimeout(() => modal.classList.add("hidden"), 300);
    });
  }

  setTimeout(() => {
    modal.classList.add("opacity-0");
    setTimeout(() => modal.classList.add("hidden"), 300);
  }, 3000);
});
</script>
@endif

@if($errors->any())
<script>
document.addEventListener("DOMContentLoaded", () => {
  const modalCampos = document.getElementById("modalCamposObrigatorios");
  const btnCloseCampos = document.getElementById("btnClose");

  if (modalCampos) {
    modalCampos.classList.remove("hidden");
    modalCampos.classList.add("opacity-0");
    setTimeout(() => modalCampos.classList.remove("opacity-0"), 10);

    if (btnCloseCampos) {
      btnCloseCampos.addEventListener("click", () => {
        modalCampos.classList.add("opacity-0");
        setTimeout(() => modalCampos.classList.add("hidden"), 300);
      });
    }

    setTimeout(() => {
      modalCampos.classList.add("opacity-0");
      setTimeout(() => modalCampos.classList.add("hidden"), 300);
    }, 3000);
  }
});
</script>
@endif