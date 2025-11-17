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


  <div class="flex flex-col w-full">
    <label class="textContainer text-sm font-medium mb-1">Mensagem</label>
    <input type="text" class="input-contrast border rounded px-3 py-2 w-full pb-12" placeholder="Escreva aqui sua mensagem" name="mensagem" />
  </div>

  

  <div class="flex flex-col bg-contrast">
    <label class="textContainer text-sm font-medium mb-1">Upload de Arquivo</label>
    <label class="bg-contrast input-contrast border rounded px-3 py-2 w-full flex flex-col items-center justify-center cursor-pointer bg-gray-50 hover:bg-gray-100 h-[200px] gap-3">
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#411F56]">
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

  <div class="flex flex-col gap-2">
    <div class="flex gap-2 items-center mb-4">
          <input type="checkbox" name="privacy" id="privacy" class="accent-orange-600 scale-125" {{ old('privacy') ? 'checked' : '' }}/>
          <p class="textContainer">
            Li e concordo com a
            <span class="textContainer">
              <a href="#" class="text-[#411F56] underline font-bold text-contrast">Política de Privacidade</a>
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

  <div>
    <button type="submit" class="button-contrast bg-bgButtonPrimary textContainer uppercase hover:bg-purple-800 text-white font-medium py-3 px-4 rounded transition-colors flex justify-center items-center gap-2">
    
      Enviar
    </button>
  </div>

</form>

  <div class="flex flex-col space-y-4 mt-5 bg-contrast text-contrast">
    <div class="bg-gray-100 rounded-lg p-4 shadow-md flex items-center gap-3  text-contrast input-contrast">
      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#411F56]">
        <path class="svg-bg" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" fill="white"/>
        <path class="svg" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" stroke=""/>
        <path class="svg" d="M28.3327 15.8334L20.8402 20.6059C20.5859 20.7536 20.2971 20.8313 20.0031 20.8313C19.7091 20.8313 19.4203 20.7536 19.166 20.6059L11.666 15.8334" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
        <path class="svg" d="M26.666 13.3334H13.3327C12.4122 13.3334 11.666 14.0796 11.666 15V25C11.666 25.9205 12.4122 26.6667 13.3327 26.6667H26.666C27.5865 26.6667 28.3327 25.9205 28.3327 25V15C28.3327 14.0796 27.5865 13.3334 26.666 13.3334Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>


      <div class="text-sm text-gray-700 line-clamp-2">
        <p class="textContainer text-gray-500 text-contrast">email</p>
        <p class="textContainer text-contrast">atendimento@sistemastecnol.com.br</p>
      </div>
    </div>

    <div class="bg-gray-100 rounded-lg p-4 shadow-md  flex items-center gap-3 bg-contrast text-contrast input-contrast">
      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#411F56]">
        <path class="svg-bg" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" fill="white"/>
        <path class="svg" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" stroke=""/>
        <path class="svg" d="M28.3327 15.8334L20.8402 20.6059C20.5859 20.7536 20.2971 20.8313 20.0031 20.8313C19.7091 20.8313 19.4203 20.7536 19.166 20.6059L11.666 15.8334" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
        <path class="svg" d="M26.666 13.3334H13.3327C12.4122 13.3334 11.666 14.0796 11.666 15V25C11.666 25.9205 12.4122 26.6667 13.3327 26.6667H26.666C27.5865 26.6667 28.3327 25.9205 28.3327 25V15C28.3327 14.0796 27.5865 13.3334 26.666 13.3334Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>


      <div class="text-sm text-gray-700 line-clamp-2">
        <p class="textContainer text-gray-500 text-contrast">ouvidoria</p>
        <p class="textContainer text-contrast">ouvidoria@sistemastecnol.com.br</p>
      </div>  
    </div>

 

    <div class="bg-gray-100 rounded-lg p-4 shadow-md flex items-center gap-3 text-contrast bg-contrast input-contrast">
      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#411F56]">
        <path class="svg-bg" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" fill="white"/>
        <path class="svg" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" stroke=""/>
        <path class="svg" d="M17.0544 11.8159L17.7237 11.6142C18.8259 11.2819 20.0034 11.8188 20.4753 12.8687L21.0779 14.2092C21.4802 15.104 21.2682 16.1557 20.5507 16.8248L19.4961 17.8082C19.4552 17.8463 19.4313 17.8993 19.43 17.9553C19.4221 18.2691 19.6301 18.8343 20.0735 19.6024C20.4011 20.1699 20.6986 20.5749 20.9536 20.8129C21.043 20.8965 21.1141 20.9496 21.1625 20.982L21.2356 21.027L21.2703 21.0206L22.718 20.578C23.656 20.2912 24.6725 20.6332 25.2465 21.4286L26.1021 22.6144C26.7738 23.5454 26.653 24.8298 25.8195 25.6192L25.3111 26.1007C24.4825 26.8854 23.2921 27.156 22.2057 26.8067C20.1713 26.1526 18.3452 24.3881 16.705 21.5472C15.0622 18.7018 14.4478 16.2347 14.9027 14.1436C15.1306 13.0961 15.878 12.2431 16.8758 11.8757L17.0544 11.8159ZM17.278 13.0599C16.6944 13.2863 16.2587 13.7914 16.1242 14.4094C15.7455 16.1502 16.2863 18.3219 17.7876 20.9222C19.2865 23.5185 20.8942 25.072 22.5883 25.6167C23.2401 25.8263 23.9544 25.6639 24.4516 25.1931L24.9599 24.7116C25.3388 24.3528 25.3937 23.769 25.0884 23.3458L24.2328 22.16C23.9719 21.7985 23.5098 21.643 23.0835 21.7734L21.5938 22.2272L21.4781 22.2527C20.6009 22.3975 19.8267 21.675 18.991 20.2274C18.4419 19.2763 18.1652 18.5246 18.1803 17.9237C18.1902 17.5321 18.3572 17.161 18.6436 16.8939L19.6981 15.9106C20.0243 15.6064 20.1207 15.1285 19.9378 14.7216L19.3352 13.3812C19.1207 12.904 18.5855 12.6599 18.0845 12.811L17.4152 13.0128L17.278 13.0599Z" fill="currentColor" stroke="currentColor" stroke-width="0.2"/>
      </svg>


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



