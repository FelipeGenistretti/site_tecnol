@extends('layouts.app')


@section('title','TecShare')

@section('content')
    <div class="flex items-center h-[128px] bg-gray-200">
  <h1 class="text-[40px] text-black container-x">Solicitação do titular</h1>
    </div>
    
   <div class="h-[1000px] mt-[60px] flex flex-col items-center">
  <!-- Título e subtítulo -->
  <div class="items-center justify-center text-center">
    <h1 class="text-[52px] m-3">Canal de solicitação do titular</h1>
    <p>Preencha todos os campos abaixo para concluir a solicitação</p>
  </div>

  <!-- Form centralizado -->
  <div class="flex justify-center mt-6">
  <form
    class="bg-gray-100 rounded-lg p-6 shadow-md flex flex-col justify-start space-y-4 w-[1200px]"
  >
    <div class="grid grid-cols-2 gap-2">
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

    <div class="grid grid-cols-4 gap-4">
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

    <div class="flex flex-col w-full">
      <label class="text-sm font-medium mb-1">Observações</label>
      <input type="text" class="border rounded px-3 py-2 w-full pb-12" placeholder="Escreva aqui" />
      <p class="text-sm ml-1">limite máximo de 8000 caracteres</p>
    </div>

    <div>
      <x-upload-arquivo />
    </div>

    <div>
      <button type="submit"
        class="bg-[#F15A29] hover:bg-orange-500 text-white font-medium py-2 px-4 rounded transition-colors flex justify-center items-center gap-2">
        Enviar
      </button>
    </div>
  </form>
</div>

</div>



@endsection
