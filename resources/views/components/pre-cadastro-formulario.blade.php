{{-- SKELETON LOADING --}}
<div id="skeleton" class="container-x py-12 animate-pulse">

    <div class="flex flex-col items-center space-y-4 mb-10">
        <div class="h-10 w-64 bg-gray-300 rounded"></div>
        <div class="h-4 w-3/4 bg-gray-300 rounded"></div>
    </div>

    <div class="bg-gray-200 p-5 rounded-md space-y-5">

        {{-- Linha 1 --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="h-12 bg-gray-300 rounded"></div>
            <div class="h-12 bg-gray-300 rounded"></div>
        </div>

        {{-- Linha 2 --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="h-12 bg-gray-300 rounded"></div>
            <div class="h-12 bg-gray-300 rounded"></div>
        </div>

        {{-- Linha 3 --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
            <div class="h-12 bg-gray-300 rounded"></div>
            <div class="h-12 bg-gray-300 rounded"></div>
            <div class="h-12 bg-gray-300 rounded"></div>
        </div>

        {{-- Linha 4 --}}
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
            <div class="h-12 bg-gray-300 rounded"></div>
            <div class="h-12 bg-gray-300 rounded"></div>
            <div class="h-12 bg-gray-300 rounded"></div>
            <div class="h-12 bg-gray-300 rounded"></div>
        </div>

        {{-- Linha 5 --}}
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
            <div class="h-12 bg-gray-300 rounded"></div>
            <div class="h-12 bg-gray-300 rounded"></div>
            <div class="h-12 bg-gray-300 rounded"></div>
            <div class="h-12 bg-gray-300 rounded"></div>
        </div>

        {{-- Botão --}}
        <div class="h-12 w-40 bg-gray-300 rounded mx-auto lg:mx-0"></div>

    </div>
</div>


<div  id="content-real" class="hidden bg-contrast text-contrast">
<div class="container-x py-10 bg-[#F2F2F2] bg-contrast">
  <h1 class="text-textPrimary flex max-sm:text-center max-sm:text-[38px] text-3xl max-sm:justify-center text-contrast">Pré-cadastro</h1>
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

<div class="h-[72px] w-[371px] hidden bg-[#E2B203] flex items-center justify-center right-10 mt-4 fixed z-50 transition-all duration-300"
     id="modalCpfInvalido">
  <div class="flex items-center gap-3">
    <img src="/alertModalCamposObrigatorios.png" alt="">
    <p class="text-black">O CPF informado é inválido.</p>
    <button type="button" id="closeCpfModal" class="flex items-center">
      <img src="/closeModalBlack.png" alt="">
    </button>
  </div>
</div>

<div class="h-[72px] w-[371px] hidden bg-[#E2B203] flex items-center justify-center right-10 mt-4 fixed z-50 transition-all duration-300"
     id="modalCnpjInvalido">
  <div class="flex items-center gap-3">
    <img src="/alertModalCamposObrigatorios.png" alt="">
    <p class="text-black">O CNPJ informado é inválido.</p>
    <button type="button" id="closeCnpjModal" class="flex items-center">
      <img src="/closeModalBlack.png" alt="">
    </button>
  </div>
</div>

<div class="container-x py-12">
  <div class="text-center space-y-5 text-contrast">
    <h1 class="text-5xl text-textPrimary max-sm:text-[38px] text-contrast">Pré-cadastro</h1>
    <p class="textContainer text-textSecondary font-semibold text-contrast">Preencha todos os campos abaixo para iniciar seu pré-cadastro.</p>
  </div>

  <div class="p-5 bg-[#F2F2F2] bg-contrast rounded-md mt-10">
    <form action="{{ route('pre-registro.store') }}" method="post">
      @csrf

      <div class="grid grid-cols-1 lg:grid-cols-[30%_70%] gap-3">
        <div>
          <div class="flex flex-col">
            <label for="cnpj" class="textContainer text-sm">CNPJ</label>
            <input type="text" name="cnpj" id="cnpj" value="{{ old('cnpj') }}" placeholder="00.000.000/0001-00" class="input-contrast textContainer p-2 rounded-sm mt-2 border border-gray">
            @error('cnpj')
              <span class="textContainer text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="nome" class="textContainer text-sm">Razão social</label>
            <input type="text" name="nome" id="razao-social" value="{{ old('nome') }}" placeholder="Nome" class="input-contrast textContainer p-2 rounded-sm mt-2 border border-gray">
            @error('nome')
              <span class="textContainer text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="categoria" class="text-sm textContainer">Categoria</label>
            <select name="categoria" id="categoria" class="input-contrast textContainer p-2 rounded-sm mt-2 border border-gray">
              <option value="">Selecione...</option>
              <option value="oficina" {{ old('categoria') == 'oficina' ? 'selected' : '' }}>Oficina</option>
              <option value="lojista" {{ old('categoria') == 'lojista' ? 'selected' : '' }}>Lojista</option>
              <option value="empresa" {{ old('categoria') == 'empresa' ? 'selected' : '' }}>Empresa</option>
            </select>
            @error('categoria')
              <span class="textContainer text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="nome-fantasia" class="textContainer text-sm">Nome fantasia</label>
            <input type="text" name="nome-fantasia" id="nome-fantasia" value="{{ old('nome-fantasia') }}" placeholder="Nome" class="input-contrast textContainer p-2 rounded-sm mt-2 border border-gray">
            @error('nome-fantasia')
              <span class="textContainer text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-[20%_60%_20%] mt-3 gap-3">
        <div>
          <div class="flex flex-col">
            <label for="cep" class="textContainer text-sm">CEP*</label>
            <input type="text" name="cep" id="cep" value="{{ old('cep') }}" placeholder="00000-000" class="input-contrast textContainer p-2 rounded-sm mt-2 border border-gray">
            @error('cep')
              <span class="textContainer text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="endereco" class="textContainer text-sm">Endereço</label>
            <input type="text" name="endereco" id="endereco" value="{{ old('endereco') }}" placeholder="Endereço" class="input-contrast textContainer p-2 rounded-sm mt-2 border border-gray">
            @error('endereco')
              <span class="textContainer text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="numero" class="textContainer text-sm">Número</label>
            <input type="text" name="numero" id="numero" value="{{ old('numero') }}" placeholder="00" class="input-contrast textContainer p-2 rounded-sm mt-2 border border-gray lg:mr-3">
            @error('numero')
              <span class="textContainer text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-[25%_25%_25%_25%] gap-3 mt-3 lg:mr-6">
        <div>
          <div class="flex flex-col">
            <label for="complemento" class="textContainer text-sm">Complemento</label>
            <input type="text" name="complemento" id="complemento" value="{{ old('complemento') }}" placeholder="sala, apartamento, etc..." class="input-contrast textContainer p-2 rounded-sm mt-2 border border-gray">
            @error('complemento')
              <span class="textContainer text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="bairro" class="textContainer text-sm">Bairro</label>
            <input type="text" name="bairro" id="bairro" value="{{ old('bairro') }}" placeholder="Nome do bairro" class="input-contrast textContainer p-2 rounded-sm mt-2 border border-gray">
            @error('bairro')
              <span class="textContainer text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="uf" class="textContainer text-sm">UF</label>
            <select name="uf" id="uf" class="input-contrast textContainer p-2 rounded-sm mt-2 border border-gray">
              <option value="">Selecione...</option>
              @foreach(['SP','RJ','MG','PR','RS','SC','BA','PE'] as $estado)
                <option value="{{ $estado }}" {{ old('uf') == $estado ? 'selected' : '' }}>{{ $estado }}</option>
              @endforeach
            </select>
            @error('uf')
              <span class="textContainer text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="cidade" class="textContainer text-sm">Cidade</label>
            <select name="cidade" id="cidade" class="input-contrast textContainer p-2 rounded-sm mt-2 border border-gray w-full">
              <option value="">Selecione...</option>
              <option value="SP">SP</option>
            </select>
            @error('cidade')
              <span class="textContainer text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-[40%_20%_20%_20%] gap-3 mt-3 lg:mr-6">
        <div>
          <div class="flex flex-col">
            <label for="Nome" class="textContainer text-sm">Nome</label>
            <input type="text" name="Nome" id="nome" value="{{ old('Nome') }}" placeholder="Nome" class="input-contrast textContainer p-2 rounded-sm mt-2 border border-gray">
            @error('Nome')
              <span class="textContainer text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="cpf" class="textContainer text-sm">CPF</label>
            <input type="text" name="cpf" id="cpf" value="{{ old('cpf') }}" placeholder="000.000.000-00" class="input-contrast textContainer p-2 rounded-sm mt-2 border border-gray">
            @error('cpf')
              <span class="textContainer text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>  
        </div>

        <div>
          <div class="flex flex-col">
            <label for="telefone" class="text-sm textContainer">Telefone</label>
            <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}" placeholder="(00) 00000-0000" class="input-contrast textContainer p-2 rounded-sm mt-2 border border-gray">
            @error('telefone')
              <span class="textContainer text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex flex-col">
            <label for="email" class="textContainer text-sm">E-mail</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="email@dominio.com.br" class="input-contrast textContainer p-2 rounded-sm mt-2 border border-gray">
            @error('email')
              <span class="textContainer text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>
      </div>

      <div class="mt-6">
        <div class="flex gap-2 items-center mb-4">
          <input type="checkbox" name="privacy" id="privacy" class="accent-orange-600 scale-125" {{ old('privacy') ? 'checked' : '' }}/>
          <p class="textContainer">
            Li e concordo com a
            <span class="textContainer">
              <a href="#" class="text-orange-600 text-contrast underline font-bold">Política de Privacidade</a>
            </span>
            e autorizo o tratamento dos meus dados.
          </p>
        </div>
        @error('privacy')
          <span class="textContainer text-red-600 text-sm mt-1 block">{{ $message }}</span>
        @enderror

        <button type="submit" class="textContainer p-4 button-contrast uppercase text-white rounded-md bg-bgButtonPrimary transform hover:bg-orange-400 transition duration-300 max-sm:w-full max-sm:justify-center max-sm:mb-5">enviar</button>
      </div>

    </form>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const inputCep = document.getElementById("cep");

    inputCep.addEventListener("blur", () => {
      const cep = inputCep.value.replace(/\D/g, "");

      if (cep.length === 8) {
        fetch(`https://viacep.com.br/ws/${cep}/json/`)
          .then(r => r.json())
          .then(data => {
            if (data.erro) return;

            document.getElementById("endereco").value = data.logradouro || "";
            document.getElementById("complemento").value = data.complemento || "";
            document.getElementById("bairro").value = data.bairro || "";
          })
          .catch(err => console.log("Erro ao buscar CEP:", err));
      }
    });

    const inputCnpj = document.getElementById("cnpj");

    inputCnpj.addEventListener("blur", () => {
      const cnpj = inputCnpj.value.replace(/\D/g, "");

      if (cnpj.length === 14) {
        fetch(`/api/cnpj/${cnpj}`)
          .then(r => r.json())
          .then(data => {
            if (data.status === "ERROR") return;

            document.getElementById("nome-fantasia").value = data.fantasia ? capitalize(data.fantasia) : "";
            document.getElementById("nome").value = data.nome_limpo ? capitalize(data.nome_limpo) : "";
            document.getElementById("cpf").value = data.cpf_extraido || "";
            document.getElementById("telefone").value = data.telefone || "";
            document.getElementById("email").value = data.email || "";

            const cep = data.cep ? data.cep.replace(/\D/g, "") : "";

            if (cep.length === 8) {
              document.getElementById("cep").value = cep;

              return fetch(`https://viacep.com.br/ws/${cep}/json/`);
            }
          })
          .then(r => r ? r.json() : null)
          .then(endereco => {
            if (!endereco || endereco.erro) return;

            document.getElementById("endereco").value = endereco.logradouro || "";
            document.getElementById("complemento").value = endereco.complemento || "";
            document.getElementById("bairro").value = endereco.bairro || "";
          })
          .catch(err => console.log("Erro ao buscar CNPJ:", err));
      }
    });

  });

  function capitalize(str) {
  return str
    .toLowerCase()
    .replace(/\b\w/g, char => char.toUpperCase());
}

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

@if($errors->has('cpf'))
<script>
document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("modalCpfInvalido");
  const btn = document.getElementById("closeCpfModal");

  if (!modal) return;
  modal.classList.remove("hidden");
  modal.classList.add("opacity-0");
  setTimeout(() => modal.classList.remove("opacity-0"), 10);

  if (btn) {
    btn.addEventListener("click", () => {
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

@if($errors->has('cnpj'))
<script>
document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("modalCnpjInvalido");
  const btn = document.getElementById("closeCnpjModal");

  if (!modal) return;
  modal.classList.remove("hidden");
  modal.classList.add("opacity-0");
  setTimeout(() => modal.classList.remove("opacity-0"), 10);

  if (btn) {
    btn.addEventListener("click", () => {
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

<script>
    window.addEventListener("load", () => {
        const skeleton = document.getElementById('skeleton');
        const content = document.getElementById('content-real');

        skeleton.classList.add('hidden');
        content.classList.remove('hidden');
    });
</script>
