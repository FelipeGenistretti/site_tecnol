@extends('layouts.app')


@section('title','TecShare')

@section('content')

    <div class="flex items-center py-12  bg-bgSecondary justify-center lg:justify-start h-[]">
  <h1 class="text-[38px] text-textPrimary container-x">Solicitação do titular</h1>
    </div>



<!-- Conteúdo principal -->
<div class="mt-[60px] flex flex-col items-center px-4 sm:px-8">
  <!-- Título e subtítulo -->
  <div class="text-center max-w-3xl">
    <h1 class="text-2xl sm:text-3xl lg:text-[52px] font-semibold mb-3 text-textPrimary">
      Canal de solicitação do titular
    </h1>
    <br>
    <p class="text-textPrimary text-base sm:text-lg ">
      Preencha todos os campos abaixo para concluir a solicitação
    </p>
  </div>

  <!-- Formulário -->
  <div class="w-full max-w-[1200px] bg-gray-100 rounded-lg p-6 sm:p-8 shadow-md mt-8 mb-10">
    <form class="flex flex-col space-y-6">
      <!-- Seletor duplo -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div class="flex flex-col">
          <label class="text-sm font-medium mb-1">Tipo da solicitação</label>
          <select class="border rounded px-3 py-2 w-full bg-white">
            <option value="">Selecionar</option>
            <option>Opção 1</option>
            <option>Opção 2</option>
            <option>Opção 3</option>
          </select>
        </div>

        <div class="flex flex-col">
          <label class="text-sm font-medium mb-1">Classificação do titular</label>
          <select class="border rounded px-3 py-2 w-full bg-white">
            <option value="">Selecionar</option>
            <option>Opção 1</option>
            <option>Opção 2</option>
            <option>Opção 3</option>
          </select>
        </div>
      </div>

      <!-- Inputs principais -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="flex flex-col">
          <label class="text-sm font-medium mb-1">Nome</label>
          <input type="text" class="border rounded px-3 py-2 w-full" placeholder="Digite seu nome" />
        </div>
        <div class="flex flex-col">
          <label class="text-sm font-medium mb-1">CPF</label>
          <input type="text" class="border rounded px-3 py-2 w-full" placeholder="000.000.000-00" />
        </div>
        <div class="flex flex-col">
          <label class="text-sm font-medium mb-1">E-mail</label>
          <input type="text" class="border rounded px-3 py-2 w-full" placeholder="email@dominio.com.br" />
        </div>
        <div class="flex flex-col">
          <label class="text-sm font-medium mb-1">Telefone</label>
          <input type="text" class="border rounded px-3 py-2 w-full" placeholder="(00) 00000-0000" />
        </div>
      </div>

      <!-- Observações -->
      <div class="flex flex-col">
        <label class="text-sm font-medium mb-1">Observações</label>
        <textarea
          class="border rounded px-3 py-2 w-full min-h-[120px]"
          placeholder="Escreva aqui"
        ></textarea>
        <p class="text-sm ml-1 text-gray-600">Limite máximo de 8000 caracteres</p>
      </div>

      <!-- Upload -->
      <div>
        <x-upload-arquivo />
      </div>

      <!-- Botão -->
      <div class="flex justify-center lg:justify-start">
        <button
          type="submit"
          class="bg-[#F15A29] hover:bg-orange-500 text-white font-medium py-2 px-6 rounded transition-colors flex items-center gap-2 justify-center w-full lg:w-[80px]"
        >
          Enviar
        </button>
      </div>
    </form>
  </div>
</div>




@endsection
