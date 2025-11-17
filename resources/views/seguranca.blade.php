@extends('layouts.app')

@section('title','Segurança Tecshare')

@section('content')

{{-- Carregamento- --}}
<div id="skeleton" class="container-x py-10 animate-pulse">
    
    {{-- Título --}}
    <div class="h-10 w-56 bg-gray-300 rounded mb-8"></div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        {{-- Texto --}}
        <div class="space-y-3">
            <div class="h-8 w-3/4 bg-gray-300 rounded"></div>
            <div class="h-4 w-full bg-gray-300 rounded"></div>
            <div class="h-4 w-5/6 bg-gray-300 rounded"></div>
            <div class="h-4 w-4/5 bg-gray-300 rounded"></div>
            <div class="h-4 w-3/4 bg-gray-300 rounded"></div>
            <div class="h-4 w-2/3 bg-gray-300 rounded"></div>
        </div>

        {{-- Imagem --}}
        <div class="h-64 w-full bg-gray-300 rounded"></div>
    </div>

    {{-- Botões --}}
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 mt-12">
        <div class="h-[60px] bg-gray-300 rounded"></div>
        <div class="h-[60px] bg-gray-300 rounded"></div>
        <div class="h-[60px] bg-gray-300 rounded"></div>
        <div class="h-[60px] bg-gray-300 rounded"></div>
    </div>
</div>

{{-- Conteúdo real --}}
<div id="content-real" class="hidden">

    <div class="titulo flex items-center py-12 bg-bgSecondary justify-center lg:justify-start  text-contrast bg-contrast">
        <h1 class="text-[38px] text-textPrimary container-x  text-contrast bg-contrast">Segurança</h1>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 container-x py-10  text-contrast bg-contrast text-[#333333]">
        <div class="p-4">
            <h1 class="text-[42px] lg:text-start text-center  text-contrast bg-contrast">Gestão de segurança da <br> informação e serviços</h1>
            <p>A TECSHARE, reforçando seu compromisso com a Segurança da Informação, assegura que seus processos de governança estão em conformidade com os mais altos padrões de segurança.</p>
            <br>
            <p> Assim sendo, a TECSHARE definiu sua Política de Gestão Integrada com o compromisso de: Oferecer um serviço confiável, com garantia de qualidade e segurança da informação, para a entrega e operação dos serviços contratados, com objetivo manter, por meios dos requisitos técnicos legais, a segurança e o sigilo dos dados da empresa, dos clientes, parceiros e fornecedores, a confidencialidade, integridade e disponibilidade durante toda a prestação do serviço, por meio de monitoramento constante.</p>
            <br>
            <p> A Política de Segurança da Informação e Serviços da TECSHARE, assegura a proteção dos seus ativos, pessoas, dados, informações, sistemas, aplicação e mapeamento de seus principais processos críticos do negócio, de acordo com as estratégias da empresa, além de assegurar a privacidade e proteção de dados pessoais das pessoas com quem se relaciona, efetuando o tratamento de dados em conformidade com a legislação vigente. Como em cumprimento a requisitos contratuais aplicáveis, por meio de monitoramento constante.</p>
            <br>
            <p> Nós, da TECSHARE, sempre priorizamos a confidencialidade, a integridade e disponibilidade dos dados de nossos clientes e parceiros comerciais através dos melhores requisitos técnicos e legais em todo o nosso atendimento.</p>
            <br>
            <p>Assim, reforçamos nosso compromisso integral com a segurança da informação interna e de todos os nossos clientes.</p>
        </div>

        <div>
            <img src="{{ asset('/seguranca-1.png')  }}" alt="" class="mt-12">

             <button onclick="downloadFile('/pdfs/meu-arquivo.pdf')" class="bts-hover  flex input-contrast items-center justify-center lg:justify-start gap-3 my-6  p-3 px-6 rounded border border-[#B3B3B3] cursor-pointer h-[60px]">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast bg-contrast">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13 4L13 12.0858L15.2929 9.79289L16.7071 11.2071L12 15.9142L7.29289 11.2071L8.70711 9.79289L11 12.0858L11 4H13ZM2 19.9L2 11H4L4 19L20 19L20 11H22L22 19.9C22 20.5075 21.5075 21 20.9 21L3.1 21C2.49248 21 2 20.5075 2 19.9Z" fill="currentColor"/>
</svg>

            
                <span class="text-[13px] text-center lg:text-left">BAIXAR POLÍTICA DO SISTEMA DE GESTÃO INTEGRADO - SGI</span>
            </button>
            
               <button onclick="downloadFile('/pdfs/meu-arquivo.pdf')"  class="bts-hover flex input-contrast items-center justify-center lg:justify-start gap-3 my-6 p-3 px-6 rounded border border-[#B3B3B3] cursor-pointer h-[60px]">
                               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast bg-contrast">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M13 4L13 12.0858L15.2929 9.79289L16.7071 11.2071L12 15.9142L7.29289 11.2071L8.70711 9.79289L11 12.0858L11 4H13ZM2 19.9L2 11H4L4 19L20 19L20 11H22L22 19.9C22 20.5075 21.5075 21 20.9 21L3.1 21C2.49248 21 2 20.5075 2 19.9Z" fill="currentColor"/>
        </svg>

                <span class="text-[13px] text-center lg:text-left">BAIXAR POLÍTICA DE SEGURANÇA E INFORMAÇÕES - POSIC</span>
            </button>

              <button onclick="downloadFile('/pdfs/meu-arquivo.pdf')"  class="bts-hover flex input-contrast items-center justify-center lg:justify-start gap-3 my-6 p-3 px-6 rounded border border-[#B3B3B3] cursor-pointer h-[60px]">
               
                               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast bg-contrast">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13 4L13 12.0858L15.2929 9.79289L16.7071 11.2071L12 15.9142L7.29289 11.2071L8.70711 9.79289L11 12.0858L11 4H13ZM2 19.9L2 11H4L4 19L20 19L20 11H22L22 19.9C22 20.5075 21.5075 21 20.9 21L3.1 21C2.49248 21 2 20.5075 2 19.9Z" fill="currentColor"/>
</svg>

        

                <span class="text-[13px] text-center lg:text-left">BAIXAR TERMOS DE USO E POLÍTICA DE PRIVACIDADE</span>
            </button>



        </div>
    </div>

    <div id="pdfModal" class=" fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center  pt-[60px] mt-8">
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


</div>

<x-back-to-top/>

{{-- Script pra trocar skeleton pelo conteúdo real --}}
<script>
    window.addEventListener("load", () => {
     document.getElementById('pdfModal').style.display = 'none';

        const skeleton = document.getElementById('skeleton');
        const content = document.getElementById('content-real');

        skeleton.classList.add('hidden');
        content.classList.remove('hidden');
    });

 function downloadFile(caminho){
    document.getElementById('pdfModal').style.display = 'flex';
 console.log("Aqui vai o diretorio do arquivo + ",caminho);
}

function closePdfModal(){
    document.getElementById('pdfModal').style.display = 'none';
}



</script>


@endsection
