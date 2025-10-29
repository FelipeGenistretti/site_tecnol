@extends('layouts.app')

@section('title','TecShare compliance')

@section('content')
<div class="">
              <div class="flex items-center h-[128px] bg-gray-200">
  <h1 class="text-[40px] text-black container-x">Compliance</h1>
    </div>



        <div class="grid grid-cols-1 lg:grid-cols-2 h-[592px] container-x m-5">
        <div class= "p-4 mt-[80px] h-[278px] ">
            <h1 class= "text-[40px] m-3">Transparência e conformidade</h1>
            <p class="text-lg">Na Tecnol, a transparência, a conformidade com a legislação e o compromisso com princípios éticos e melhores experiências de mercado são práticas diárias e fundamentais para o futuro sustentável dos negócios.<br> <br>

O nosso foco é a prevenção e o combate a fraudes, corrupções e quaisquer desvios que possam comprometer nosso código de conduta e/ou as normas em vigor.</p>
       
            <button class="flex items-center gap-3 p-2 px-6 rounded border border-[#B3B3B3] cursor-pointer mt-8 p-3">
            <img src="{{ asset('/download-black.png') }}" alt="Ícone de download" class="w-5 h-5">
            <span>Baixe nossa política de compliance</span>
            </button>
</div>
        
        
        <div class = "p-4 mt-12">
            <img class="h-[432px] w-[820px] rounded" src="{{ asset('/quemsomos-1.jpg') }}" alt="">

        </div>
    </div>


    <div class="grid grid-cols-1 lg:grid-cols-2 h-[700px] container-x bg-[#004A65] text-white p-10">

        
        <div class = "p-4 mt-12">
            <img class="h-[432px] w-[820px] rounded" src="{{ asset('/quemsomos-1.jpg') }}" alt="">

        </div>

          <div class= "p-4 mt-[80px] h-[592px] ">
            <h1 class= "text-[40px] py-3">Programa de compliance</h1>
            <p class="text-sm">Estamos empenhados em manter a integridade e a confiança em todos os nossos relacionamentos, seja com clientes, parceiros, colaboradores ou órgãos reguladores. Para reforçar esse compromisso, possuímos as seguintes <strong>certificações</strong> que atestam nossos padrões de excelência:
            </p>
          
            <div class="py-6">
            <p><strong>• ISO 9001:</strong> Garantia de qualidade em nossos processos e serviços.</p>
            <p><strong>• ISO/IEC 27001:</strong> Gestão robusta da segurança da informação. </p>
            <p><strong>• ISO 37301:</strong> Sistema eficaz de gestão de compliance.</p>
            <p><strong>• ISO 27701:</strong> Proteção e privacidade de dados.</p>
            </div>
            

            <p>O nosso programa de Compliance inclui uma Política do Sistema de Antissuborno e ações contínuas para promover um ambiente ético e transparente, consolidando a confiança com nossos stakeholders e fortalecendo a governança corporativa.</p>
        
            <button class="flex items-center gap-3 p-2 px-6 rounded border border-[#B3B3B3] cursor-pointer mt-8 p-3">
            <img src="{{ asset('/download-white.png') }}" alt="Ícone de download" class="w-5 h-5">
            <span>BAIXE NOSSA POLITICA DO SISTEMA DE ANTISUBORNO     </span>
            </button>

        </div>
        
    </div>


            <div class="flex items-center justify-center m-8">
            <h1 class="text-[40px]"> Nossos pilares</h1>
             </div>


<div class="grid grid-cols-3 gap-10 container-x mb-12">


      <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col">
    <img src="{{ asset('./star.png') }}" alt="" class="h-[40px]  w-[40px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800">Compromisso de alta direção.</h2>
    <p class="text-gray-700 text-base flex-1">
        O compromisso de agregar valor.
    </p>
  </div>

    <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col">
    <img src="{{ asset('./pessoas.png') }}" alt="" class="h-[30px]  w-[30px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800">Instância responsável.</h2>
    <p class="text-gray-700 text-base flex-1">
        Equipe bem estruturada
    </p>
  </div>


    <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col">
    <img src="{{ asset('./medalha.png') }}" alt="" class="h-[30px]  w-[30px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800">Análise de perfil e risco.</h2>
    <p class="text-gray-700 text-base flex-1">
        Soluções pensadas no cliente.
    </p>
  </div>
  </div>
</div>

<div class="grid grid-cols-2 gap-10 container-x mb-12">
    <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col w-[525px] justify-self-end" >
    <img src="{{ asset('./medalha-star.png') }}" alt="" class="h-[30px]  w-[30px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800">Regras e instrumentos</h2>
    <p class="text-gray-700 text-base flex-1">
        Políticas e procedimentos para <br> mitigar os riscos.
  </div>

   <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col w-[525px]">
    <img src="{{ asset('./wi-fi.png') }}" alt="" class="h-[20px]  w-[30px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800">Monitoramento contínuo</h2>
    <p class="text-gray-700 text-base flex-1">
        Análise e avaliação <br> para assegurar resultados valídos
    </p>
  </div>
</div>

</div>


<div class="grid grid-cols-2 h-[430px]">
      <div class="bg-[#F2F2F2] text-center flex flex-col items-center justify-center px-6">
    <h1 class="text-[52px] font-semibold mb-4">Código de conduta e ética</h1>
    <p class="text-gray-700">
      Para fortalecer a transparência e a equidade entre os nossos colaboradores, fornecedores, clientes e parceiros de negócios, tornamos público o nosso Código de Conduta.
    </p>

    <button class="flex items-center gap-3 p-3 px-6 rounded border border-[#B3B3B3] cursor-pointer mt-8">
      <img src="{{ asset('/download-black.png') }}" alt="Ícone de download" class="w-5 h-5">
      <span>BAIXE NOSSO CÓDIGO DE CONDUTA</span>
    </button>
  </div>
    
       <div class="bg-gradient-to-b from-[#004A65] to-[#006C94] text-center flex flex-col items-center justify-center px-6 text-white">
    <h1 class="text-[52px] font-semibold mb-4">Canal de denúncia</h1>
    <p class="">
        Contamos com um Canal de Denúncia sigiloso e imparcial, hospedado fora dos sistemas da TECNOL, administrado com total garantia de confidencialidade.
    </p>

    <button class="flex items-center gap-3 p-3 px-6 rounded border bg-[#F15A29] cursor-pointer mt-8">
      <img src="{{ asset('/cadeadoBranco.png') }}" alt="Ícone de download" class="w-5 h-5">
      <span>ACESSAR CANAL DE DENÚNCIA</span>
    </button>
  </div>
    






</div>
@endsection