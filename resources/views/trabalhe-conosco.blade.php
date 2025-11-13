@extends('layouts.app')

@section('title','Trabalhe-conosco - TecShare')

@section('content')
<div class="titulo flex items-center bg-bgSecondary justify-center lg:justify-start text-center lg:text-start  text-contrast bg-contrast">
  <h1 class=" text-textPrimary container-x  text-contrast bg-contrast">Trabalhe conosco</h1>
</div>  


 <div class="textContainer flex flex-col items-center justify-center text-center  py-10 container-x text-contrast bg-contrast" id="trabalheConosco">
  <h1 class="text-4xl mb-3 text-textPrimary text-contrast">Trabalhe conosco</h1>
  <p class="text-textPrimary text-contrast">
    Já pensou em trabalhar em um lugar onde o principal objetivo é crescer junto?
  </p>
  <p class="text-textPrimary text-contrast">
    Na Tecshare, é assim! Buscamos talentos que nos ajudem a fazer da tecnologia a matéria-prima de soluções e inovações que mudem para melhor as necessidades do mercado financeiro.
</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-[2fr_auto]  gap-6 container-x pb-12 bg-contrast text-contrast " >

  <!-- Coluna 1: Formulário -->
  
<form action="{{ route('trabalhe-conosco') }}" multiple type="arquivos[]" accept="image/*,.pdf,.doc,.docx,.xls,.xlsx" enctype="multipart/form-data" method="post" class="text-constrast input-contrast bg-contrast bg-gray-100 rounded-lg p-6 shadow-md w-full h-full flex flex-col justify-start space-y-4 mt-5">
  @csrf

  <div class="textContainer grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    <div class="flex flex-col">
      <label class="textContainer text-sm font-medium mb-1">Nome</label>
      <input type="text" name="nome" class="input-contrast border rounded px-3 py-2 w-full" placeholder="Digite seu nome">
    </div>
           
    <div class="flex flex-col">
      <label class="textContainer text-sm font-medium mb-1">E-mail</label>
      <input type="text" name="email"  class="input-contrast border rounded px-3 py-2 w-full" placeholder="email@email.com.br">
    </div>
  

    <div class="flex flex-col">
      <label class="textContainer text-sm font-medium mb-1">Telefone</label>
      <input type="text" name="telefone" class="input-contrast border rounded px-3 py-2 w-full" placeholder="(xx) xxxxx-xxxx">
    </div>

    <div class="flex flex-col">
      <label class="textContainer text-sm font-medium mb-1">Área de atuação</label>
      <select class="input-contrast border rounded px-3 py-2 w-full bg-white" name="atuacao">
        <option value="">Selecionar</option>
        <option value="opcao1">Opção 1</option>
        <option value="opcao2">Opção 2</option>
        <option value="opcao3">Opção 3</option>
      </select>
    </div>
  </div>


  <!-- Mensagem -->
  <div class="flex flex-col w-full">
    <label class="textContainer text-sm font-medium mb-1">Mensagem</label>
    <input type="text" class="input-contrast border rounded px-3 py-2 w-full pb-12" placeholder="Escreva aqui sua mensagem" name="mensagem" />
  </div>

  

  <!-- Upload -->
  <div class="flex flex-col bg-contrast">
    <label class="textContainer text-sm font-medium mb-1">Upload de Arquivo</label>
    <label class="bg-contrast input-contrast border rounded px-3 py-2 w-full flex flex-col items-center justify-center cursor-pointer bg-gray-50 hover:bg-gray-100 h-[200px] gap-3">
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast bg-contrast">
        <path d="M48.1229 45H15.2946C15.2946 45 8.88135 45 7.6347 38.0534C6.38853 28.3228 14.2004 27.3119 14.2004 27.3119C14.2004 27.3119 12.0348 14.0232 26.2374 12.5825C38.2744 11.3615 40.463 24.0971 40.463 24.0971C40.463 24.0971 52.5 24.5316 52.5 35.7379C52.5 42.8271 48.1229 45 48.1229 45Z" stroke="currentColor" stroke-width="5"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.6959 28.2666V38.3118H29.4347V28.2666L31.3666 30.0676L33.7341 26.7705L27.5653 21.0197L21.3965 26.7705L23.764 30.0676L25.6959 28.2666Z" fill="currentColor"/>
        </svg>




      <p class="textContainer text-sm text-center">
        Arraste e solte seu(s) arquivo(s) aqui <br> ou
      </p>
      <span class="textContainer p-2 px-6 rounded border border-[#B3B3B3] cursor-pointe input-contrast">
        Adicionar arquivos
      </span>
      <input type="file" name="arquivos[]"  class="hidden">
    </label>
    <p class="textContainer text-sm text-gray-500 mt-1 text-contrast">Tamanho máximo permitido do anexo 5MB</p>
  </div>

  <!-- Checkbox + reCAPTCHA -->
  <div class="flex flex-col gap-2">
    <div class="flex gap-2 items-center mb-4">
          <input type="checkbox" name="privacy" id="privacy" class="accent-orange-600 scale-125" {{ old('privacy') ? 'checked' : '' }}/>
          <p class="textContainer">
            Li e concordo com a
            <span class="textContainer">
              <a href="#" class="text-orange-600 underline font-bold">Política de Privacidade</a>
            </span>
            e autorizo o tratamento dos meus dados.
          </p>
        </div>

    <div class="mt-2">
      <div class="bg-gray-200 border border-gray-300 rounded p-4 text-center">
        <span class="text-sm text-gray-500">reCAPTCHA aqui</span>
      </div>
    </div>
  </div>

  <!-- Botão -->
  <div>
    <button type="submit" class="button-contrast bg-[#F15A29] textContainer hover:bg-orange-500 text-white font-medium py-2 px-4 rounded transition-colors flex justify-center items-center gap-2">
    
      Enviar
    </button>
  </div>

</form>

  <!-- Coluna 2: Contatos -->
  <div class="flex flex-col space-y-4 mt-5 bg-contrast text-contrast">
    <div class="bg-gray-100 rounded-lg p-4 shadow-md  flex items-center gap-3 bg-contrast text-contrast input-contrast">
      <svg id="mail-icon" class="text-contrast contrast-svg" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path data-original-fill="#FFF6F3" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" fill="#FFF6F3"/>
<path data-original-stroke="#FAC8B8" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" stroke="#FAC8B8"/>
<path data-original-stroke="#F15A29" d="M28.3327 15.8333L20.8402 20.6058C20.5859 20.7535 20.2971 20.8313 20.0031 20.8313C19.7091 20.8313 19.4203 20.7535 19.166 20.6058L11.666 15.8333" stroke="#F15A29" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
<path data-original-stroke="#F15A29" d="M26.666 13.3333H13.3327C12.4122 13.3333 11.666 14.0795 11.666 15V25C11.666 25.9205 12.4122 26.6667 13.3327 26.6667H26.666C27.5865 26.6667 28.3327 25.9205 28.3327 25V15C28.3327 14.0795 27.5865 13.3333 26.666 13.3333Z" stroke="#F15A29" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
</svg>


      <div class="text-sm text-gray-700 line-clamp-2">
        <p class="textContainer text-gray-500 text-contrast">email</p>
        <p class="textContainer text-contrast">atendimento@sistemastecnol.com.br</p>
      </div>
    </div>

    <div class="bg-gray-100 rounded-lg p-4 shadow-md  flex items-center gap-3 bg-contrast text-contrast input-contrast">
      <svg id="mail-icon" class="contrast-svg" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path data-original-fill="#FFF6F3" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" fill="#FFF6F3"/>
<path data-original-stroke="#FAC8B8" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" stroke="#FAC8B8"/>
<path data-original-stroke="#F15A29" d="M28.3327 15.8333L20.8402 20.6058C20.5859 20.7535 20.2971 20.8313 20.0031 20.8313C19.7091 20.8313 19.4203 20.7535 19.166 20.6058L11.666 15.8333" stroke="#F15A29" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
<path data-original-stroke="#F15A29" d="M26.666 13.3333H13.3327C12.4122 13.3333 11.666 14.0795 11.666 15V25C11.666 25.9205 12.4122 26.6667 13.3327 26.6667H26.666C27.5865 26.6667 28.3327 25.9205 28.3327 25V15C28.3327 14.0795 27.5865 13.3333 26.666 13.3333Z" stroke="#F15A29" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
</svg>


      <div class="text-sm text-gray-700 line-clamp-2">
        <p class="textContainer text-gray-500 text-contrast">ouvidoria</p>
        <p class="textContainer text-contrast">ouvidoria@sistemastecnol.com.br</p>
      </div>  
    </div>

    <div class="bg-gray-100 rounded-lg p-4 shadow-md flex items-center gap-3 bg-contrast text-contrast input-contrast">
<svg id="mail-icon" class="contrast-svg" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path data-original-fill="#FFF6F3" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" fill="#FFF6F3"/>
<path data-original-stroke="#FAC8B8" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" stroke="#FAC8B8"/>
<path data-original-stroke="#F15A29" d="M28.3327 15.8333L20.8402 20.6058C20.5859 20.7535 20.2971 20.8313 20.0031 20.8313C19.7091 20.8313 19.4203 20.7535 19.166 20.6058L11.666 15.8333" stroke="#F15A29" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
<path data-original-stroke="#F15A29" d="M26.666 13.3333H13.3327C12.4122 13.3333 11.666 14.0795 11.666 15V25C11.666 25.9205 12.4122 26.6667 13.3327 26.6667H26.666C27.5865 26.6667 28.3327 25.9205 28.3327 25V15C28.3327 14.0795 27.5865 13.3333 26.666 13.3333Z" stroke="#F15A29" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

      <div class="text-sm text-gray-700 line-clamp-3">
        <p class="textContainer text-gray-500 text-contrast">Encarregado de proteção de dados</p>
        <p class="textContainer text-contrast">Saron Correa</p>
        <p class="textContainer text-contrast">dpo@sistematecnol.com.br</p>
      </div>
    </div>
      
      @error('arquivos')
    <p class="text-red-500 text-sm mt-1 mb-4">{{ $message }}</p>
  @enderror
    @error('nome')
    <p class="text-red-500 text-sm mt-1 mb-4">{{ $message }}</p>
  @enderror
    @error('email')
    <p class="text-red-500 text-sm mt-1 mb-4">{{ $message }}</p>
  @enderror
    @error('telefone')
    <p class="text-red-500 text-sm mt-1 mb-4">{{ $message }}</p>
  @enderror
    @error('atuacao')
    <p class="text-red-500 text-sm mt-1 mb-4">{{ $message }}</p>
  @enderror
    @error('mensagem')
    <p class="text-red-500 text-sm mt-1 mb-4">{{ $message }}</p>
  @enderror
    @error('privacy')
    <p class="text-red-500 text-sm mt-1 mb-4">{{ $message }}</p>
  @enderror
 
 

 
 
 
 
 

 

    <div class="bg-gray-100 rounded-lg p-4 shadow-md flex items-center gap-3 text-contrast bg-contrast input-contrast">
      <img src="{{ '/telefone.png' }}" alt="" class="">
      <div class="text-sm text-gray-700 line-clamp-3 text-contrast">
        <p class="textContainer text-gray-500 text-contrast">Telefones</p>
        <p class="textContainer">(31) 3324-6460</p>
        <p class="textContainer">0800 590 4004</p>
      </div>
    </div>
  </div>

</div>

    </div>

    <script>
      function applyContrastToIcons() {
    document.querySelectorAll('.contrast-svg').forEach(svg => {
        svg.querySelectorAll("*").forEach(el => {
            if (el.getAttribute("stroke")) {
                if (!el.dataset.originalStroke) {
                    el.dataset.originalStroke = el.getAttribute("stroke");
                }
                el.setAttribute("stroke", "currentColor");
            }
            if (el.getAttribute("fill") && el.getAttribute("fill") !== "none") {
                if (!el.dataset.originalFill) {
                    el.dataset.originalFill = el.getAttribute("fill");
                }
                el.setAttribute("fill", "currentColor");
            }
        });
    });
}

function restoreIconColors() {
    document.querySelectorAll('.contrast-svg').forEach(svg => {
        svg.querySelectorAll("*").forEach(el => {
            if (el.dataset.originalStroke) {
                el.setAttribute("stroke", el.dataset.originalStroke);
            }
            if (el.dataset.originalFill) {
                el.setAttribute("fill", el.dataset.originalFill);
            }
        });
    });
}

// Executa ao carregar
document.body.classList.contains("contrast") ? applyContrastToIcons() : restoreIconColors();

// Observa mudanças no body (modo contraste alternado)
new MutationObserver(() => {
    document.body.classList.contains("contrast") ? applyContrastToIcons() : restoreIconColors();
}).observe(document.body, { attributes: true, attributeFilter: ["class"] });

    </script>

    

@endsection



