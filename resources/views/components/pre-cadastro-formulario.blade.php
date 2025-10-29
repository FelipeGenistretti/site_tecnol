<div class="container-x py-10 bg-[#F2F2F2]">
  <h1 class="text-black text-3xl">Safe Register Car</h1>
</div>

<div class="container-x py-12">
  <div class="text-center space-y-4">
    <h1 class="text-5xl text-[#333333]">Pré-cadastro</h1>
    <p class="text-[#666666] font-semibold">Preencha todos os campos abaixo para iniciar seu pré-cadastro.</p>
  </div>

  <div class="p-5 bg-[#F2F2F2] rounded-md mt-6">
    <form action="{{ route('pre-registro.store') }}" method="post">
      @csrf

      <div class="grid grid-cols-1 lg:grid-cols-[30%_70%] gap-3">
        <div>
          <div class="flex flex-col">
            <label for="cnpj" class="text-sm">CNPJ</label>
            <input type="text" name="cnpj" id="cnpj" value="{{ old('cnpj') }}" placeholder="00.000.000/0001-00" class="p-2 rounded-sm mt-2 border border-gray">
            @error('cnpj')
              <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="nome" class="text-sm">Razão social</label>
            <input type="text" name="nome" id="nome" value="{{ old('nome') }}" placeholder="Nome" class="p-2 rounded-sm mt-2 border border-gray">
            @error('nome')
              <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="categoria" class="text-sm">Categoria</label>
            <select name="categoria" id="categoria" class="p-2 rounded-sm mt-2 border border-gray">
              <option value="">Selecione...</option>
              <option value="oficina" {{ old('categoria') == 'oficina' ? 'selected' : '' }}>Oficina</option>
              <option value="lojista" {{ old('categoria') == 'lojista' ? 'selected' : '' }}>Lojista</option>
              <option value="empresa" {{ old('categoria') == 'empresa' ? 'selected' : '' }}>Empresa</option>
            </select>
            @error('categoria')
              <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="nome-fantasia" class="text-sm">Nome fantasia</label>
            <input type="text" name="nome-fantasia" id="nome-fantasia" value="{{ old('nome-fantasia') }}" placeholder="Nome" class="p-2 rounded-sm mt-2 border border-gray">
            @error('nome-fantasia')
              <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-[20%_60%_20%] mt-3 gap-3">
        <div>
          <div class="flex flex-col">
            <label for="cep" class="text-sm">CEP*</label>
            <input type="text" name="cep" id="cep" value="{{ old('cep') }}" placeholder="00000-000" class="p-2 rounded-sm mt-2 border border-gray">
            @error('cep')
              <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="endereco" class="text-sm">Endereço</label>
            <input type="text" name="endereco" id="endereco" value="{{ old('endereco') }}" placeholder="Endereço" class="p-2 rounded-sm mt-2 border border-gray">
            @error('endereco')
              <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="numero" class="text-sm">Número</label>
            <input type="text" name="numero" id="numero" value="{{ old('numero') }}" placeholder="00" class="p-2 rounded-sm mt-2 border border-gray mr-3">
            @error('numero')
              <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-[25%_25%_25%_25%] gap-3 mt-3 mr-6">
        <div>
          <div class="flex flex-col">
            <label for="complemento" class="text-sm">Complemento</label>
            <input type="text" name="complemento" id="complemento" value="{{ old('complemento') }}" placeholder="sala, apartamento, etc..." class="p-2 rounded-sm mt-2 border border-gray">
            @error('complemento')
              <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="bairro" class="text-sm">Bairro</label>
            <input type="text" name="bairro" id="bairro" value="{{ old('bairro') }}" placeholder="Nome do bairro" class="p-2 rounded-sm mt-2 border border-gray">
            @error('bairro')
              <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="uf" class="text-sm">UF</label>
            <select name="uf" id="uf" class="p-2 rounded-sm mt-2 border border-gray">
              <option value="">Selecione...</option>
              @foreach(['SP','RJ','MG','PR','RS','SC','BA','PE'] as $estado)
                <option value="{{ $estado }}" {{ old('uf') == $estado ? 'selected' : '' }}>{{ $estado }}</option>
              @endforeach
            </select>
            @error('uf')
              <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="cidade" class="text-sm">Cidade</label>
            <select name="cidade" id="cidade" class="p-2 rounded-sm mt-2 border border-gray w-full">
              <option value="">Selecione...</option>
            </select>
            @error('cidade')
              <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-[40%_20%_20%_20%] gap-3 mt-3 mr-6">
        <div>
          <div class="flex flex-col">
            <label for="Nome" class="text-sm">Nome</label>
            <input type="text" name="Nome" id="Nome" value="{{ old('Nome') }}" placeholder="Nome" class="p-2 rounded-sm mt-2 border border-gray">
            @error('Nome')
              <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="cpf" class="text-sm">CPF</label>
            <input type="text" name="cpf" id="cpf" value="{{ old('cpf') }}" placeholder="000.000.000-00" class="p-2 rounded-sm mt-2 border border-gray">
            @error('cpf')
              <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>  
        </div>

        <div>
          <div class="flex flex-col">
            <label for="telefone" class="text-sm">Telefone</label>
            <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}" placeholder="(00) 00000-0000" class="p-2 rounded-sm mt-2 border border-gray">
            @error('telefone')
              <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="email" class="text-sm">E-mail</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="email@dominio.com.br" class="p-2 rounded-sm mt-2 border border-gray">
            @error('email')
              <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>
      </div>

      <div class="mt-6">
        <div class="flex gap-2 items-center mb-4">
          <input type="checkbox" name="privacy" id="privacy" class="accent-orange-600 scale-125" {{ old('privacy') ? 'checked' : '' }}/>
          <p>
            Li e concordo com a
            <span>
              <a href="#" class="text-orange-600 underline font-bold">Política de Privacidade</a>
            </span>
            e autorizo o tratamento dos meus dados.
          </p>
        </div>
        @error('privacy')
          <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
        @enderror

        <button type="submit" class="p-4 uppercase text-white rounded-md bg-orange-600 transform hover:bg-orange-400 transition duration-300">enviar</button>
      </div>

    </form>
  </div>


<div class="h-[72px] w-[371px] hidden bg-[#2ABB7F] flex items-center justify-center fixed inset-0 z-50" id="modalSuccess">
    <div class="flex items-center justify-center gap-3">
        <img src="/iconCheckModal.png" alt="">
        <p class="text-white">Cadastro realizado com sucesso!</p>
        <button type="button" class="flex items-center">
            <img src="/iconCloseModal.png" alt="" id="close">
        </button>
    </div>
</div>

<div class="h-[72px] w-[371px] hidden bg-[#E2B203] flex items-center justify-center" id="modalCamposObrigatorios">
    <div class="flex items-center justify-center gap-3">
        <img src="/alertModalCamposObrigatorios.png" alt="">
        <p class="text-black">Cadastro realizado com sucesso!</p>
        <button type="button" class="flex items-center">
            <img src="/closeModalBlack.png" alt="" id="btnClose">
        </button>
    </div>
</div>

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





</div>

<script>




    

</script>
