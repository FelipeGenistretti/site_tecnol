@extends('layouts.app')

@section('title','TecShare compliance')

@section('content')
   <div class="flex items-center py-12  bg-bgSecondary justify-center lg:justify-start h-[]">
  <h1 class="text-[38px] text-textPrimary container-x">Compliance</h1>
    </div>


  <div class="grid grid-cols-1 lg:grid-cols-2  container-x my-8 lg:my-12">
        <div class= "p-4  lg:mt-12">
            <h1 class= "text-[40px]  text-textPrimary py-2  text-center lg:text-start m-2">Transparência e conformidade</h1>
            <p class="text-lg  text-textPrimary">Na Tecnol, a transparência, a conformidade com a legislação e o compromisso com princípios éticos e melhores experiências de mercado são práticas diárias e fundamentais para o futuro sustentável dos negócios.<br> <br>

O nosso foco é a prevenção e o combate a fraudes, corrupções e quaisquer desvios que possam comprometer nosso código de conduta e/ou as normas em vigor.</p>
       
          <button class="flex gap-3 items-center justify-center lg:justify-start p-2 px-6 rounded border border-[#B3B3B3] cursor-pointer mt-8 w-full lg:w-[350px]">
  <img src="{{ asset('/download-black.png') }}" alt="Ícone de download" class="w-5 h-5">
  <span class="p-2">Baixe nossa política de compliance</span>
</button>
</div>

         <div class = "p-4 mt-4 lg:mt-12">
            <img class="h- rounded" src="{{ asset('/quemsomos-1.jpg') }}" alt="">

        </div>
    </div>
      



 <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 container-x bg-[#004A65] text-white py-8">

        
        <div class = "p-4 mt-4 lg:mt-12">
            <img class=" rounded" src="{{ asset('/quemsomos-1.jpg') }}" alt="">

        </div>

          <div class= "py-2 lg:py-[55px]">
            <h1 class= "text-[35px] text-center lg:text-start m-3" ><strong> Programa de compliance  </strong></h1>
            <br>
            <p>Estamos empenhados em manter a integridade e a confiança em todos os nossos relacionamentos, seja com clientes, parceiros, colaboradores ou órgãos reguladores. <br><br>
            </p>
        
            

            <p>Para reforçar esse compromisso, o nosso programa de Compliance inclui uma Política do Sistema de Antissuborno e ações contínuas para promover um ambiente ético e transparente, consolidando a confiança com nossos stakeholders e fortalecendo a governança corporativa.</p>
        
           <button class="flex items-center gap-3 justify-center lg:justify-start p-3 px-6 rounded border border-[#B3B3B3] cursor-pointer mt-8 w-full lg:w-[450px]">
      <img src="{{ asset('/download-white.png') }}" alt="Ícone de download" class="w-5 h-5">
      <span class="text-[15px]">NOSSA POLÍTICA DO SISTEMA DE ANTISSUBORNO</span>
    </button>

        </div>
        
    </div>



            <div class="flex items-center justify-center m-8">
            <h1 class="text-[40px]"> Nossos pilares</h1>
             </div>


<div class="grid grid-cols-1 lg:grid-cols-3 gap-10 container-x mb-12">


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

<div class="grid grid-cols-1 lg:grid-cols-2 gap-10 container-x mb-12">
    <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col lg:w-[525px] lg:justify-self-end" >
    <img src="{{ asset('./medalha-star.png') }}" alt="" class="h-[30px]  w-[30px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800">Regras e instrumentos</h2>
    <p class="text-gray-700 text-base flex-1">
        Políticas e procedimentos para <br> mitigar os riscos.
  </div>

   <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col lg:w-[525px] ">
    <img src="{{ asset('./wi-fi.png') }}" alt="" class="h-[20px]  w-[30px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800">Monitoramento contínuo</h2>
    <p class="text-gray-700 text-base flex-1">
        Análise e avaliação <br> para assegurar resultados valídos
    </p>
  </div>
</div>

</div>

<div class="grid grid-cols-1 lg:grid-cols-2">
      <div class="bg-[#F2F2F2] text-center flex flex-col items-center justify-center px-6 p-10">
    <h1 class="text-[45px] font-semibold mb-4">Código de conduta e ética</h1>
    <p class="text-gray-700">
      Para fortalecer a transparência e a equidade entre os nossos colaboradores, fornecedores, clientes e parceiros de negócios, tornamos público o nosso Código de Conduta.
    </p>

    <button class="flex items-center gap-3 p-3 px-6 rounded border border-[#B3B3B3] cursor-pointer mt-8">
      <img src="{{ asset('/download-black.png') }}" alt="Ícone de download" class="w-5 h-5">
      <span>BAIXE NOSSO CÓDIGO DE CONDUTA</span>
    </button>
  </div>
    
       <div class="bg-gradient-to-b from-[#004A65] to-[#006C94] text-center flex flex-col items-center justify-center px-6 text-white p-10">
    <h1 class="text-[45px] font-semibold mb-4">Canal de denúncia</h1>
    <p class="">
        Contamos com um Canal de Denúncia sigiloso e imparcial, hospedado fora dos sistemas da TECNOL, administrado com total garantia de confidencialidade.
    </p>

    <button class="flex items-center gap-3 justify-center lg:justify-start p-3 px-6 rounded border bg-[#F15A29] cursor-pointer mt-8 w-full lg:w-[350px]">
  <img src="{{ asset('/cadeadoBranco.png') }}" alt="Ícone de download" class="w-5 h-5">
  <span>ACESSAR CANAL DE DENÚNCIA</span>
</button>

  </div>
    


  






@endsection