@extends('layouts.app')

@section('title','Trabalhe-conosco - TecShare')

@section('content')
<div class="titulo flex items-center bg-bgSecondary justify-center lg:justify-start text-center lg:text-start  text-contrast bg-contrast">
  <h1 class=" text-textPrimary container-x  text-contrast bg-contrast">Trabalhe conosco</h1>
</div>  

<div class="bg-white container-x py-12 bg-contrast">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 items-stretch">

    <div class="">
      <div class="space-y-4 text-textPrimary">
        <h1 class="text-[52px] text-contrast max-md:text-center max-md:text-5xl">Vem fazer parte da cultura Tecshare</h1>
        <p class="text-[16px] text-contrast textContainer">Já pensou em trabalhar em um lugar onde o principal objetivo é crescer juntos?</p>
        <p class="text-[16px] text-contrast textContainer">Na Tecshare, é assim! Buscamos talentos que nos ajudem a fazer da tecnologia a matéria-prima de soluções e inovações que mudem para melhor as necessidades do mercado financeiro. </p>
        <p class="text-[16px] text-contrast textContainer">Candidate-se às vagas em aberto ou cadastre seu currículo em nosso banco de talentos.</p>
        <p class="text-[16px] text-contrast textContainer">Boa sorte!</p>
      </div>
      <button type="button" class="button-secundary-contrast p-3 flex items-center gap-2 border justify-center border-[#E5E5E5] bts-hover rounded-md mt-4">
         <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast">
        <path d="M10 3.01172C10.5523 3.01172 11 3.45943 11 4.01172C10.9997 4.56378 10.5521 5.01172 10 5.01172H5.53418C5.23925 5.01172 5 5.25097 5 5.5459V18.4658C5.00026 18.7605 5.23941 19 5.53418 19H18.4668C18.7614 18.9998 18.9997 18.7604 19 18.4658V14.0059C19 13.4537 19.4479 13.0061 20 13.0059C20.5523 13.0059 21 13.4536 21 14.0059V18.4658C20.9997 19.8649 19.8659 20.9998 18.4668 21H5.53418C4.13484 21 3.00026 19.8651 3 18.4658V5.5459C3 4.1464 4.13468 3.01172 5.53418 3.01172H10ZM19.9678 3C20.2298 3.0001 20.4816 3.1066 20.667 3.2959C20.8524 3.48535 20.9569 3.74285 20.957 4.01074L20.958 9.38672C20.958 9.94457 20.5145 10.3969 19.9688 10.3975C19.4226 10.3975 18.9788 9.94475 18.9785 9.38672V6.4502L13.8389 11.7031C13.4526 12.0978 12.8257 12.0978 12.4395 11.7031C12.0539 11.3085 12.0537 10.669 12.4395 10.2744L17.5801 5.02148H14.623C14.0769 5.02148 13.6339 4.56885 13.6338 4.01074C13.634 3.4527 14.0769 3 14.623 3H19.9678Z" fill="currentColor"/>
        </svg>
        <p class="uppercase textContainer">Confira nossas oportunidades</p>
      </button>
    </div>

    <div class="flex items-center h-full">
      <img src="/heroTrabalheConosco.png" alt="">
    </div>

  </div>
</div>


<div class="bg-bgSecondary">

  <div class="container-x text-[38px] bg-contrast text-contrast py-10">
    <h1 class="py-1">Envie seu currículo</h1>
</div>

<div class="h-[72px] w-[371px] hidden bg-[#E2B203] flex items-center right-10 mt-4 justify-center fixed z-50" id="modalArquivoInvalido">
    <div class="flex items-center justify-center gap-3">
        <img src="/alertModalCamposObrigatorios.png" alt="">
        <p class="text-black">{{ $errors->first('arquivos') }}</p>
        <button type="button" class="flex items-center">
            <img src="/closeModalBlack.png" alt="" id="btnClose">
        </button>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-[2fr_auto]  gap-6 container-x pb-12 bg-contrast text-contrast " >
  
  
  <form action="{{ route('trabalhe-conosco') }}"  name="arquivos" accept="image/*,.pdf,.doc,.docx,.xls,.xlsx" enctype="multipart/form-data" method="post" class="text-constrast input-contrast bg-contrast bg-white rounded-lg p-6 shadow-md w-full h-full flex flex-col justify-start space-y-4 mt-5">
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
          <option value="Administrativo">Administrativo</option>
          <option value="Atendimento">Atendimento</option>
          <option value="Contábil">Contábil</option>
          <option value="Financeiro">Financeiro</option>
          <option value="Jurídico">Jurídico</option>
          <option value="Produtos">Produtos</option>
          <option value="Recursos-humanos">Recursos humanos</option>
          <option value="Tecnologia">Tecnologia</option>
          <option value="SegDaInformação">Segurança da informação</option>
        </select>
      </div>
    </div>
    
    
    <div class="flex flex-col w-full">
      <label class="textContainer text-sm font-medium mb-1">Mensagem</label>
      <input type="text" class="input-contrast border rounded px-3 py-2 w-full pb-12" placeholder="Escreva aqui sua mensagem" name="mensagem" />
    </div>
    
    

    <div class="flex flex-col bg-contrast">
      <label class="textContainer text-sm font-medium mb-1">Upload de Arquivo</label>
      <label id="inputInit" class="input-contrast border rounded px-3 py-2 w-full flex flex-col items-center justify-center cursor-pointer   h-[200px] gap-3">
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#411F56]">
          <path d="M48.1229 45H15.2946C15.2946 45 8.88135 45 7.6347 38.0534C6.38853 28.3228 14.2004 27.3119 14.2004 27.3119C14.2004 27.3119 12.0348 14.0232 26.2374 12.5825C38.2744 11.3615 40.463 24.0971 40.463 24.0971C40.463 24.0971 52.5 24.5316 52.5 35.7379C52.5 42.8271 48.1229 45 48.1229 45Z" stroke="currentColor" stroke-width="5"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M25.6959 28.2666V38.3118H29.4347V28.2666L31.3666 30.0676L33.7341 26.7705L27.5653 21.0197L21.3965 26.7705L23.764 30.0676L25.6959 28.2666Z" fill="currentColor"/>
        </svg>
        
        
        

        
        <p class="textContainer text-contrast text-sm text-center text-[#666666]">
          Arraste e solte seu(s) arquivo(s) aqui <br> ou
        </p>
        <span class="textContainer p-2 px-6 rounded border border-[#B3B3B3] cursor-pointe input-contrast">
          Adicionar arquivos
      </span>
      <input type="file" name="arquivo"  onchange="InputActive()" class="hidden" id="upload-input" accept=".pdf,.doc,.docx">
     
     
      <div id="input-card" class=" hidden h-[72px] p-10 w-full justify  bg-[#2ABB7F] gap-4 mb-1 items-center flex">
      <svg  width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 4C0 1.79086 1.79086 0 4 0H36C38.2091 0 40 1.79086 40 4V36C40 38.2091 38.2091 40 36 40H4C1.79086 40 0 38.2091 0 36V4Z" fill="#F15A29"/>
<path d="M7.704 25.5V15.728H11.904C12.8093 15.728 13.5093 15.994 14.004 16.526C14.4987 17.058 14.746 17.772 14.746 18.668C14.746 19.564 14.4987 20.278 14.004 20.81C13.5093 21.342 12.8093 21.608 11.904 21.608H9.286V25.5H7.704ZM9.286 20.222H11.806C12.2073 20.222 12.52 20.1193 12.744 19.914C12.968 19.6993 13.08 19.396 13.08 19.004V18.332C13.08 17.94 12.968 17.6413 12.744 17.436C12.52 17.2213 12.2073 17.114 11.806 17.114H9.286V20.222ZM16.6213 15.728H20.0793C20.7047 15.728 21.2693 15.8307 21.7733 16.036C22.2867 16.2413 22.7207 16.5493 23.0753 16.96C23.4393 17.3613 23.7193 17.87 23.9153 18.486C24.1113 19.0927 24.2093 19.802 24.2093 20.614C24.2093 21.426 24.1113 22.14 23.9153 22.756C23.7193 23.3627 23.4393 23.8713 23.0753 24.282C22.7207 24.6833 22.2867 24.9867 21.7733 25.192C21.2693 25.3973 20.7047 25.5 20.0793 25.5H16.6213V15.728ZM20.0793 24.1C20.8073 24.1 21.3953 23.8713 21.8433 23.414C22.2913 22.9567 22.5153 22.2847 22.5153 21.398V19.83C22.5153 18.9433 22.2913 18.2713 21.8433 17.814C21.3953 17.3567 20.8073 17.128 20.0793 17.128H18.2033V24.1H20.0793ZM26.318 25.5V15.728H32.422V17.128H27.9V19.844H31.918V21.244H27.9V25.5H26.318Z" fill="white"/>
</svg>

        
     
      </div>


      
    </label>
      <div id="file-List" class="hidden input-contrast border rounded px-3 py-2 w-full flex flex-col items-center justify-center cursor-pointer   h-[200px] gap-3">
        
        <ul>
          <li>
            
          </li>


        </ul>
          


          <button class="textContainer p-2 px-6 rounded border border-[#B3B3B3] cursor-pointe input-contrast">Adicionar arquivos</button>
      </div>



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
    <div class="bg-white rounded-lg p-4 shadow-md flex items-center gap-3  text-contrast input-contrast">
      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#411F56]">
        <path class="svg-bg" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" fill="white"/>
        <path class="svg" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" stroke="#e6e6e6"/>
        <path class="svg" d="M28.3327 15.8334L20.8402 20.6059C20.5859 20.7536 20.2971 20.8313 20.0031 20.8313C19.7091 20.8313 19.4203 20.7536 19.166 20.6059L11.666 15.8334" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
        <path class="svg" d="M26.666 13.3334H13.3327C12.4122 13.3334 11.666 14.0796 11.666 15V25C11.666 25.9205 12.4122 26.6667 13.3327 26.6667H26.666C27.5865 26.6667 28.3327 25.9205 28.3327 25V15C28.3327 14.0796 27.5865 13.3334 26.666 13.3334Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>

      
      <div class="text-sm text-gray-700 line-clamp-2">
        <p class="textContainer text-gray-500 text-contrast">email</p>
        <p class="textContainer text-contrast">atendimento@sistemastecnol.com.br</p>
      </div>
    </div>
    
    <div class="bg-white rounded-lg p-4 shadow-md  flex items-center gap-3 bg-contrast text-contrast input-contrast">
      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#411F56]">
        <path class="svg-bg" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" fill="white"/>
        <path class="svg" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" stroke="#E6E6E6"/>
        <path class="svg" d="M28.3327 15.8334L20.8402 20.6059C20.5859 20.7536 20.2971 20.8313 20.0031 20.8313C19.7091 20.8313 19.4203 20.7536 19.166 20.6059L11.666 15.8334" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
        <path class="svg" d="M26.666 13.3334H13.3327C12.4122 13.3334 11.666 14.0796 11.666 15V25C11.666 25.9205 12.4122 26.6667 13.3327 26.6667H26.666C27.5865 26.6667 28.3327 25.9205 28.3327 25V15C28.3327 14.0796 27.5865 13.3334 26.666 13.3334Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      
      
      <div class="text-sm text-gray-700 line-clamp-2">
        <p class="textContainer text-gray-500 text-contrast">ouvidoria</p>
        <p class="textContainer text-contrast">ouvidoria@sistemastecnol.com.br</p>
      </div>  
    </div>

    
    
    <div class="bg-white rounded-lg p-4 shadow-md flex items-center gap-3 text-contrast bg-contrast input-contrast">
      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#411F56]">
        <path class="svg-bg" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" fill="white"/>
        <path class="svg" d="M10 0.5H30C35.2467 0.5 39.5 4.7533 39.5 10V30C39.5 35.2467 35.2467 39.5 30 39.5H10C4.7533 39.5 0.5 35.2467 0.5 30V10C0.5 4.7533 4.7533 0.5 10 0.5Z" stroke="#E6E6E6"/>
        <path class="svg" d="M17.0544 11.8159L17.7237 11.6142C18.8259 11.2819 20.0034 11.8188 20.4753 12.8687L21.0779 14.2092C21.4802 15.104 21.2682 16.1557 20.5507 16.8248L19.4961 17.8082C19.4552 17.8463 19.4313 17.8993 19.43 17.9553C19.4221 18.2691 19.6301 18.8343 20.0735 19.6024C20.4011 20.1699 20.6986 20.5749 20.9536 20.8129C21.043 20.8965 21.1141 20.9496 21.1625 20.982L21.2356 21.027L21.2703 21.0206L22.718 20.578C23.656 20.2912 24.6725 20.6332 25.2465 21.4286L26.1021 22.6144C26.7738 23.5454 26.653 24.8298 25.8195 25.6192L25.3111 26.1007C24.4825 26.8854 23.2921 27.156 22.2057 26.8067C20.1713 26.1526 18.3452 24.3881 16.705 21.5472C15.0622 18.7018 14.4478 16.2347 14.9027 14.1436C15.1306 13.0961 15.878 12.2431 16.8758 11.8757L17.0544 11.8159ZM17.278 13.0599C16.6944 13.2863 16.2587 13.7914 16.1242 14.4094C15.7455 16.1502 16.2863 18.3219 17.7876 20.9222C19.2865 23.5185 20.8942 25.072 22.5883 25.6167C23.2401 25.8263 23.9544 25.6639 24.4516 25.1931L24.9599 24.7116C25.3388 24.3528 25.3937 23.769 25.0884 23.3458L24.2328 22.16C23.9719 21.7985 23.5098 21.643 23.0835 21.7734L21.5938 22.2272L21.4781 22.2527C20.6009 22.3975 19.8267 21.675 18.991 20.2274C18.4419 19.2763 18.1652 18.5246 18.1803 17.9237C18.1902 17.5321 18.3572 17.161 18.6436 16.8939L19.6981 15.9106C20.0243 15.6064 20.1207 15.1285 19.9378 14.7216L19.3352 13.3812C19.1207 12.904 18.5855 12.6599 18.0845 12.811L17.4152 13.0128L17.278 13.0599Z" fill="currentColor" stroke="currentColor" stroke-width="0.2"/>
      </svg>
      
      
      <div class="text-sm text-gray-700 line-clamp-3 text-contrast">
        <p class="textContainer text-gray-500 text-contrast">Telefones</p>
        <p class="textContainer">(31) 3324-6460</p>
        <p class="textContainer">0800 590 4004</p>
      </div>

        <!-- @error('nome')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror

       @error('email')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror

       @error('telefone')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror

       @error('atuacao')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror

       @error('mensagem')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror

       @error('arquivos')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror -->
      
    </div>
  </div>
  
</div>

</div>
</div>

@if($errors->has('arquivos'))
<script>
document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("modalArquivoInvalido");
    const close = document.getElementById("btnClose");

    modal.classList.remove("hidden");
    modal.classList.add("opacity-0", "transition", "duration-500");
    setTimeout(() => modal.classList.remove("opacity-0"), 10);

    close.addEventListener("click", () => {
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

<script>
  document.getElementById("upload-input").addEventListener("change", function () {
    const fileNameDisplay = document.getElementById("file-name");
    const ExcFile = document.getElementById("ExcFile")

    if (this.files.length === 0) {
        fileNameDisplay.innerText = "";
        return;
    }

    if (this.files.length === 1) {
        fileNameDisplay.innerText = this.files[0].name;
    } else {
        fileNameDisplay.innerText = this.files.length + " arquivos selecionados";
    }
});


</script>



<script>
    const inputFile = document.getElementById("upload-input");
const fileList = document.getElementById("file-List");
const inputInit = document.getElementById("inputInit");
const ulFiles = fileList.querySelector("ul");
const addMoreButton = fileList.querySelector("button");

let filesArray = []; // guarda os arquivos selecionados

// QUANDO O PRIMEIRO ARQUIVO É SELECIONADO
function InputActive() {
    const newFiles = Array.from(inputFile.files);

    // substitui os antigos pelos novos
filesArray.length = 0;     // limpa o array
newFiles.forEach(file => filesArray.push(file)); // adiciona só os novos


    // muda o visual
    inputInit.classList.add("hidden");
    fileList.classList.remove("hidden");

    renderFilesList();
}




// MOSTRA OS ARQUIVOS NA <ul>
function renderFilesList() {



    ulFiles.innerHTML = "";

    
    filesArray.forEach((file, index) => {
        const li = document.createElement("li");
        li.classList.add("flex", "items-center", "mb-2","bg-[#F2F2F2]","p-5","border","w-[605px]");
      
          // application/pdf
          // application/vnd.openxmlformats-officedocument.wordprocessingml.document 
        
          if(file.type=="application/pdf"){
       //     alert("O arquivo enviado foi um pdf")
            li.innerHTML = `
                      <div class="shrink-0"> 
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 4C0 1.79086 1.79086 0 4 0H36C38.2091 0 40 1.79086 40 4V36C40 38.2091 38.2091 40 36 40H4C1.79086 40 0 38.2091 0 36V4Z" fill="#F15A29"/>
                  <path d="M7.704 25.5V15.728H11.904C12.8093 15.728 13.5093 15.994 14.004 16.526C14.4987 17.058 14.746 17.772 14.746 18.668C14.746 19.564 14.4987 20.278 14.004 20.81C13.5093 21.342 12.8093 21.608 11.904 21.608H9.286V25.5H7.704ZM9.286 20.222H11.806C12.2073 20.222 12.52 20.1193 12.744 19.914C12.968 19.6993 13.08 19.396 13.08 19.004V18.332C13.08 17.94 12.968 17.6413 12.744 17.436C12.52 17.2213 12.2073 17.114 11.806 17.114H9.286V20.222ZM16.6213 15.728H20.0793C20.7047 15.728 21.2693 15.8307 21.7733 16.036C22.2867 16.2413 22.7207 16.5493 23.0753 16.96C23.4393 17.3613 23.7193 17.87 23.9153 18.486C24.1113 19.0927 24.2093 19.802 24.2093 20.614C24.2093 21.426 24.1113 22.14 23.9153 22.756C23.7193 23.3627 23.4393 23.8713 23.0753 24.282C22.7207 24.6833 22.2867 24.9867 21.7733 25.192C21.2693 25.3973 20.7047 25.5 20.0793 25.5H16.6213V15.728ZM20.0793 24.1C20.8073 24.1 21.3953 23.8713 21.8433 23.414C22.2913 22.9567 22.5153 22.2847 22.5153 21.398V19.83C22.5153 18.9433 22.2913 18.2713 21.8433 17.814C21.3953 17.3567 20.8073 17.128 20.0793 17.128H18.2033V24.1H20.0793ZM26.318 25.5V15.728H32.422V17.128H27.9V19.844H31.918V21.244H27.9V25.5H26.318Z" fill="white"/>
                </svg>
              </div>

              <!-- Nome + tamanho -->
              <div class="flex flex-col justify-end p-3">
                <span class="font-medium text-sm">${file.name}</span>
                <span class="text-xs text-gray-500">${(file.size / 1024 / 1024).toFixed(1)} MB</span>
              </div>

            </div>

              <!-- Botão remover -->
              <button onclick="removeFile(${index})" class="text-red-500 text-lg font-bold ml-auto">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8727 3.88806V2.99902H13.127V3.88806H19.8893V5.88806H4.10938V3.88806H10.8727ZM4.14213 6.55505H5.23678H18.7624H19.8571L19.7584 7.64524L18.6395 20.0006C18.5881 20.5674 18.113 21.0014 17.5439 21.0014H6.45527C5.88621 21.0014 5.41108 20.5674 5.35976 20.0006L4.24086 7.64524L4.14213 6.55505ZM6.33144 8.55505L7.27745 19.0014H16.7218L17.6678 8.55505H6.33144Z" fill="#333333"/>
                </svg>
              </button>
                        
        `
          }
          console.log("O tipo de arquivo é  " + file.type)
          if(file.type=="application/vnd.openxmlformats-officedocument.wordprocessingml.document"){
          //  alert("O arquivo enviado foi um docx")
                      li.innerHTML = `
                      
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 4C0 1.79086 1.79086 0 4 0H36C38.2091 0 40 1.79086 40 4V36C40 38.2091 38.2091 40 36 40H4C1.79086 40 0 38.2091 0 36V4Z" fill="#1D7AFC"/>
                <path d="M4.532 16.624H7.496C8.032 16.624 8.516 16.712 8.948 16.888C9.388 17.064 9.76 17.328 10.064 17.68C10.376 18.024 10.616 18.46 10.784 18.988C10.952 19.508 11.036 20.116 11.036 20.812C11.036 21.508 10.952 22.12 10.784 22.648C10.616 23.168 10.376 23.604 10.064 23.956C9.76 24.3 9.388 24.56 8.948 24.736C8.516 24.912 8.032 25 7.496 25H4.532V16.624ZM7.496 23.8C8.12 23.8 8.624 23.604 9.008 23.212C9.392 22.82 9.584 22.244 9.584 21.484V20.14C9.584 19.38 9.392 18.804 9.008 18.412C8.624 18.02 8.12 17.824 7.496 17.824H5.888V23.8H7.496ZM16.0834 25.144C15.5394 25.144 15.0434 25.052 14.5954 24.868C14.1554 24.676 13.7754 24.4 13.4554 24.04C13.1434 23.672 12.8994 23.22 12.7234 22.684C12.5554 22.14 12.4714 21.516 12.4714 20.812C12.4714 20.108 12.5554 19.488 12.7234 18.952C12.8994 18.408 13.1434 17.956 13.4554 17.596C13.7754 17.228 14.1554 16.952 14.5954 16.768C15.0434 16.576 15.5394 16.48 16.0834 16.48C16.6274 16.48 17.1194 16.576 17.5594 16.768C18.0074 16.952 18.3874 17.228 18.6994 17.596C19.0194 17.956 19.2634 18.408 19.4314 18.952C19.6074 19.488 19.6954 20.108 19.6954 20.812C19.6954 21.516 19.6074 22.14 19.4314 22.684C19.2634 23.22 19.0194 23.672 18.6994 24.04C18.3874 24.4 18.0074 24.676 17.5594 24.868C17.1194 25.052 16.6274 25.144 16.0834 25.144ZM16.0834 23.932C16.4034 23.932 16.6954 23.876 16.9594 23.764C17.2314 23.652 17.4594 23.492 17.6434 23.284C17.8354 23.068 17.9834 22.808 18.0874 22.504C18.1914 22.2 18.2434 21.856 18.2434 21.472V20.152C18.2434 19.768 18.1914 19.424 18.0874 19.12C17.9834 18.816 17.8354 18.56 17.6434 18.352C17.4594 18.136 17.2314 17.972 16.9594 17.86C16.6954 17.748 16.4034 17.692 16.0834 17.692C15.7554 17.692 15.4594 17.748 15.1954 17.86C14.9314 17.972 14.7034 18.136 14.5114 18.352C14.3274 18.56 14.1834 18.816 14.0794 19.12C13.9754 19.424 13.9234 19.768 13.9234 20.152V21.472C13.9234 21.856 13.9754 22.2 14.0794 22.504C14.1834 22.808 14.3274 23.068 14.5114 23.284C14.7034 23.492 14.9314 23.652 15.1954 23.764C15.4594 23.876 15.7554 23.932 16.0834 23.932ZM24.6504 25.144C23.5544 25.144 22.6944 24.776 22.0704 24.04C21.4464 23.296 21.1344 22.22 21.1344 20.812C21.1344 20.108 21.2144 19.488 21.3744 18.952C21.5344 18.416 21.7664 17.964 22.0704 17.596C22.3744 17.228 22.7424 16.952 23.1744 16.768C23.6144 16.576 24.1064 16.48 24.6504 16.48C25.3784 16.48 25.9864 16.64 26.4744 16.96C26.9704 17.28 27.3584 17.752 27.6384 18.376L26.4984 19C26.3544 18.6 26.1304 18.284 25.8264 18.052C25.5304 17.812 25.1384 17.692 24.6504 17.692C24.0024 17.692 23.4944 17.912 23.1264 18.352C22.7584 18.792 22.5744 19.4 22.5744 20.176V21.448C22.5744 22.224 22.7584 22.832 23.1264 23.272C23.4944 23.712 24.0024 23.932 24.6504 23.932C25.1544 23.932 25.5624 23.804 25.8744 23.548C26.1944 23.284 26.4304 22.948 26.5824 22.54L27.6744 23.2C27.3944 23.808 27.0024 24.284 26.4984 24.628C25.9944 24.972 25.3784 25.144 24.6504 25.144ZM35.5104 25H33.9144L31.8864 21.664H31.8504L29.8464 25H28.3464L31.0584 20.716L28.4424 16.624H30.0384L31.9464 19.744H31.9704L33.9024 16.624H35.4024L32.7624 20.704L35.5104 25Z" fill="white"/>
                </svg>
              </div>

              <!-- Nome + tamanho -->
              <div class="flex flex-col justify-end p-3">
                <span class="font-medium text-sm">${file.name}</span>
                <span class="text-xs text-gray-500">${(file.size / 1024 / 1024).toFixed(1)} MB</span>
              </div>

            </div>

              <!-- Botão remover -->
              <button onclick="removeFile(${index})" class="text-red-500 text-lg font-bold ml-auto">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8727 3.88806V2.99902H13.127V3.88806H19.8893V5.88806H4.10938V3.88806H10.8727ZM4.14213 6.55505H5.23678H18.7624H19.8571L19.7584 7.64524L18.6395 20.0006C18.5881 20.5674 18.113 21.0014 17.5439 21.0014H6.45527C5.88621 21.0014 5.41108 20.5674 5.35976 20.0006L4.24086 7.64524L4.14213 6.55505ZM6.33144 8.55505L7.27745 19.0014H16.7218L17.6678 8.55505H6.33144Z" fill="#333333"/>
                </svg>
              </button>                      
        `
          }
          if(file.type!="application/vnd.openxmlformats-officedocument.wordprocessingml.document" 
            && file.type!="application/pdf"
          )
          {
            alert("NÃO é pdf nem word")
           
           
        
        

        
      


            return 
          }



    
        ulFiles.appendChild(li);
    });
}

// REMOVE UM ARQUIVO
function removeFile(index) {
    filesArray.splice(index, 1);
    renderFilesList();
}

// BOTÃO "Adicionar arquivos" abre o input novamente
addMoreButton.addEventListener("click", (e) => {
    e.preventDefault();
    inputFile.click();
});

// ✓ antes de enviar o formulário, cria um DataTransfer com todos os arquivos
document.querySelector("form").addEventListener("submit", (e) => {
    const dataTransfer = new DataTransfer();

    filesArray.forEach(file => dataTransfer.items.add(file));

    inputFile.files = dataTransfer.files;
});



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



