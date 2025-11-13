<div class="titulo flex items-center bg-bgSecondary justify-center lg:justify-start text-center lg:text-start  text-contrast bg-contrast">
  <h1 class=" text-textPrimary container-x  text-contrast bg-contrast">Privacidade</h1>
</div>

<div class="container-x py-12 gap-3 bg-contrast">
  <div class="grid grid-cols-1 lg:grid-cols-2">
      <div class="space-y-8 text-textPrimary">
        <h1 class="text-5xl max-sm:text-[38px] flex max-sm:justify-center max-sm:text-center max-sm:items-center text-contrast">Política de privacidade</h1>
        <p class="textContainer text-contrast text-[16px]">A privacidade e a proteção dos dados pessoais são mandatórias para a Tecshare. Na visita ao nosso site, coletaremos seu nome, e-mail, número de telefone e empresa, se for o caso, quando você fizer a opção de falar com a gente. Caso informe esses dados ao optar por entrar em contato conosco.</p>
        <p class="textContainer text-contrast text-[16px]">O tratamento dessas informações seguirá o disposto nesta <span class="font-bold">Política de Privacidade.</span> Recomendamos consultá-la com regularidade de forma a estar sempre atualizado.</p>
        <p class="textContainer text-contrast text-[16px]">Todos os dados pessoais serão tratados pela Tecnol em consonância com a <span class="font-bold">Lei Geral de Proteção de Dados Pessoais de 14 de Agosto de 2018 (Lei nº 13.709).</span></p>

        <div>
          <button onclick="downloadFile()" type="button" class="button-secundary-contrast textContainer uppercase border border-black p-3 flex gap-2 items-center rounded-md">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13 4L13 12.0858L15.2929 9.79289L16.7071 11.2071L12 15.9142L7.29289 11.2071L8.70711 9.79289L11 12.0858L11 4H13ZM2 19.9L2 11H4L4 19L20 19L20 11H22L22 19.9C22 20.5075 21.5075 21 20.9 21L3.1 21C2.49248 21 2 20.5075 2 19.9Z" fill="currentColor"/>
          </svg>
             <p>Baixar politica de privacidade</p>
          </button>
        </div>
      </div>

      <div class="max-sm:mt-6 max flex justify-center">
        <img src="/imgReuniaoPrivacidade.png" alt="">
      </div>
  </div>
</div>

    <div id="pdfModal" class="hidden fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center  pt-[60px] mt-8">
    <div class="bg-white bg-contrast input-contrast w-[90%] md:w-[70%] h-[80%] rounded shadow relative p-6">
        
        <!-- Botão fechar -->
        <button onclick="closePdfModal()" class="absolute top-0 right-2 text-[25px] font-bold ">
            &times;
        </button>

        <!-- Iframe do PDF -->
        <iframe id="pdfViewer" class="w-full h-full rounded mt-2" src="{{ asset('pdfs/teste-pdf.pdf') }}">

        </iframe>
    </div>
</div>

<script>

   function downloadFile(caminho){
    document.getElementById('pdfModal').style.display = 'flex';
 console.log("Aqui vai o diretorio do arquivo + ",caminho);
}

function closePdfModal(){
    document.getElementById('pdfModal').style.display = 'none';
}

      window.addEventListener("load", () => {
     document.getElementById('pdfModal').style.display = 'none';

        const skeleton = document.getElementById('skeleton');
        const content = document.getElementById('content-real');

        skeleton.classList.add('hidden');
        content.classList.remove('hidden');
    });





</script>