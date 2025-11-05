@extends('layouts.app')

@section('title','TecShare')

@section('content')

<div class="flex items-center py-12 bg-bgSecondary justify-center lg:justify-start text-center lg:text-start">
  <h1 class="text-[38px] text-textPrimary container-x">Solicitação do titular</h1>
</div>

<div class="h-[72px] w-[371px] hidden bg-[#2ABB7F] flex items-center justify-center right-10 mt-4 fixed z-50 transition-all duration-300"
     id="modalSuccess">
  <div class="flex items-center justify-center gap-3">
      <img src="/iconCheckModal.png" alt="">
      <p class="text-white">Cadastro realizado com sucesso!</p>
      <button type="button" id="closeSuccessModal">
          <img src="/iconCloseModal.png" alt="">
      </button>
  </div>
</div>

<div class="h-[72px] w-[371px] hidden bg-[#E2B203] flex items-center right-10 mt-4 justify-center fixed z-50 transition-all duration-300"
     id="modalCamposObrigatorios">
  <div class="flex items-center justify-center gap-3">
      <img src="/alertModalCamposObrigatorios.png" alt="">
      <p class="text-black">Preencha os campos obrigatórios</p>
      <button type="button" id="closeCamposModal">
          <img src="/closeModalBlack.png" alt="">
      </button>
  </div>
</div>

<!-- Conteúdo principal -->
<div class="mt-[60px] flex flex-col items-center px-4 sm:px-8">
  <!-- Título e subtítulo -->
  <div class="text-center max-w-3xl">
    <h1 class="text-2xl sm:text-3xl lg:text-[52px] font-semibold mb-3 text-textPrimary">
      Canal de solicitação do titular
    </h1>
    <br>
    <p class="text-textPrimary text-base sm:text-lg">
      Preencha todos os campos abaixo para concluir a solicitação
    </p>
  </div>

  <!-- Formulário -->
  <div class="w-full max-w-[1200px] bg-gray-100 rounded-lg p-6 sm:p-8 shadow-md mt-8 mb-10">
    <form action="{{ route('enviar-solicitacao') }}" type="file" accept="image/*,.pdf,.doc,.docx,.xls,.xlsx" method="post" enctype="multipart/form-data" class="flex flex-col space-y-6">
      @csrf
      <!-- Seletor duplo -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div class="flex flex-col">
          <label class="text-sm font-medium mb-1">Tipo da solicitação</label>
          <select class="border rounded px-3 py-2 w-full bg-white" name="solicitacao" >
            <option value="">Selecionar</option>
            <option>A empresa possui meus dados pessoais</option>
            <option>Dados pessoais que a empresa tem sobre mim</option>
            <option>Atualizar meus dados pessoais</option>
            <option>Excluir os dados pessoais que a empresa tem sobre mim</option>
            <option>Revogar o consentimento para tratar meus dados pessoais</option>
          </select>
        </div>

        <div class="flex flex-col">
          <label class="text-sm font-medium mb-1">Classificação do titular</label>
          <select class="border rounded px-3 py-2 w-full bg-white" name="classificacao" >
            <option value="">Selecionar</option>
            <option>Clientes</option>
            <option>Colaboradores</option>
            <option>Ex-colaborador</option>
            <option>Outro</option>
          </select>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="flex flex-col">
          <label class="text-sm font-medium mb-1">Nome</label>
          <input type="text" class="border rounded px-3 py-2 w-full" placeholder="Digite seu nome" name="nome"/>
        </div>
        <div class="flex flex-col">
          <label class="text-sm font-medium mb-1">CPF</label>
          <input type="text" class="border rounded px-3 py-2 w-full" placeholder="000.000.000-00" name="cpf" />
        </div>
        <div class="flex flex-col">
          <label class="text-sm font-medium mb-1">E-mail</label>
          <input type="text" class="border rounded px-3 py-2 w-full" placeholder="email@dominio.com.br" name="email" />
        </div>
        <div class="flex flex-col">
          <label class="text-sm font-medium mb-1">Telefone</label>
          <input type="text" class="border rounded px-3 py-2 w-full" placeholder="(00) 00000-0000" name="telefone" />
        </div>
      </div>

      <!-- Observações -->
      <div class="flex flex-col">
        <label class="text-sm font-medium mb-1">Observações</label>
        <textarea class="border rounded px-3 py-2 w-full min-h-[120px]" placeholder="Escreva aqui"  name="observacoes"></textarea>
        <p class="text-sm ml-1 text-gray-600">Limite máximo de 8000 caracteres</p>
      </div>

      <!-- Upload -->
      <label class="border-2 border-dashed border-gray-400/30 rounded px-3 w-full flex flex-col items-center justify-center cursor-pointer bg-gray-50 hover:bg-gray-100 h-[200px] gap-3 transition-colors">
        <img src="/iconDownloadUploadFile.png" alt="">
        <p class="text-sm text-center textContainer">
          Arraste e solte seu(s) arquivo(s) aqui <br> ou
        </p>
        <span class="textContainer py-3 px-6 rounded border border-[#B3B3B3] cursor-pointer uppercase">
          Adicionar arquivos
        </span>
        <input type="file" name="files" class="hidden">
      </label>

      <p class="text-sm text-textSecondary my-3 textContainer">
        Tamanho máximo permitido do anexo: 5MB
      </p>

      <div class="flex flex-col">
        <div class="flex gap-2 items-center mb-4">
          <input type="checkbox" name="privacy" id="privacy" class="accent-orange-600 scale-125 textContainer" {{ old('privacy') ? 'checked' : '' }}/>
          <p class="textContainer">
            Li e concordo com a
            <a href="#" class="text-orange-600 underline font-bold">Política de Privacidade</a>
          </p>
        </div>

        <button type="submit" class="textContainer lg:w-[20%] flex items-center justify-center gap-2 uppercase px-6 py-3 bg-bgButtonPrimary hover:bg-orange-400 transition duration-300 rounded-md text-white">
          <img src="/uploadFile.png" alt="">
          <p>Enviar arquivo</p>
        </button>
      </div>

    </form>
  </div>
</div>

@endsection



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