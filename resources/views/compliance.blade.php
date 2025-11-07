@extends('layouts.app')

@section('title','TecShare compliance')

@section('content')
    <div id="skeleton" class="container-x py-10 animate-pulse">
    <div class="h-10 w-56 bg-gray-300 rounded mb-8"></div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <div class="space-y-3">
            <div class="h-8 w-3/4 bg-gray-300 rounded"></div>
            <div class="h-4 w-full bg-gray-300 rounded"></div>
            <div class="h-4 w-5/6 bg-gray-300 rounded"></div>
            <div class="h-4 w-4/5 bg-gray-300 rounded"></div>
        </div>

        <div class="h-64 w-full bg-gray-300 rounded"></div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-12">
        <div class="h-64 w-full bg-gray-300 rounded"></div>
        <div class="space-y-3">
            <div class="h-8 w-1/2 bg-gray-300 rounded"></div>
            <div class="h-4 w-full bg-gray-300 rounded"></div>
            <div class="h-4 w-5/6 bg-gray-300 rounded"></div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-12">
        <div class="h-48 bg-gray-300 rounded"></div>
        <div class="h-48 bg-gray-300 rounded"></div>
        <div class="h-48 bg-gray-300 rounded"></div>
    </div>
</div>

<div id="content-real" class="hidden  text-contrast bg-contrast">

   <div class="flex items-center py-12  bg-bgSecondary justify-center lg:justify-start h-[]  text-contrast bg-contrast">
  <h1 class="text-[38px] text-textPrimary container-x  text-contrast bg-contrast">Compliance</h1>
    </div>


  <div class="grid grid-cols-1 lg:grid-cols-2  container-x my-8 lg:my-12  text-contrast bg-contrast">
        <div class= "p-4  lg:mt-12">
            <h1 class= "text-[40px]  text-textPrimary py-2  text-center lg:text-start m-2  text-contrast bg-contrast">Transparência e conformidade</h1>
            <p class="text-lg  text-textPrimary textContainer  text-contrast bg-contrast">Na Tecnol, a transparência, a conformidade com a legislação e o compromisso com princípios éticos e melhores experiências de mercado são práticas diárias e fundamentais para o futuro sustentável dos negócios.<br> <br>

O nosso foco é a prevenção e o combate a fraudes, corrupções e quaisquer desvios que possam comprometer nosso código de conduta e/ou as normas em vigor.</p>
       
          <button class="button-secundary-contrast flex gap-3 items-center justify-center lg:justify-start p-2 px-6 rounded border border-[#B3B3B3] cursor-pointer mt-8 w-full lg:w-[350px]">
  <img src="{{ asset('/download-black.png') }}" alt="Ícone de download" class="w-5 h-5">
  <span class="p-2">Baixe nossa política de compliance</span>
</button>
</div>

         <div class = "p-4 mt-4 lg:mt-12  text-contrast bg-contrast">
            <img class="h- rounded" src="{{ asset('/compliance-1.png') }}" alt="">

        </div>
    </div>
      



 <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 container-x bg-[#F2F2F2] text-[#333333] py-8  text-contrast bg-contrast">

        
        <div class = "p-4 mt-4 lg:mt-12">
            <img class=" rounded" src="{{ asset('/compliance-2.png') }}" alt="">

        </div>

          <div class= "py-2 lg:py-[55px]">
            <h1 class= "text-[35px] text-center lg:text-start m-3" ><strong> Programa de compliance  </strong></h1>
            <br>
            <p class="textContainer">Estamos empenhados em manter a integridade e a confiança em todos os nossos relacionamentos, seja com clientes, parceiros, colaboradores ou órgãos reguladores. <br><br>
            </p>
        
            

            <p class="textContainer">Para reforçar esse compromisso, o nosso programa de Compliance inclui uma Política do Sistema de Antissuborno e ações contínuas para promover um ambiente ético e transparente, consolidando a confiança com nossos stakeholders e fortalecendo a governança corporativa.</p>
        
           <button class="button-secundary-contrast flex items-center gap-3 justify-center lg:justify-start p-3 px-6 rounded border border-[#B3B3B3] cursor-pointer mt-8 w-full lg:w-[450px]">
      <img src="{{ asset('/download-white.png') }}" alt="Ícone de download" class="w-5 h-5">
      <span class="text-[15px]">NOSSA POLÍTICA DO SISTEMA DE ANTISSUBORNO</span>
    </button>

        </div>
        
    </div>



            <div class="flex items-center justify-center m-8">
            <h1 class="text-[40px]"> Nossos pilares</h1>
             </div>


<div class="grid grid-cols-1 lg:grid-cols-3 gap-10 container-x mb-12  text-contrast bg-contrast">


      <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col  text-contrast bg-contrast">
    <img src="{{ asset('./star.png') }}" alt="" class="h-[40px]  w-[40px]  text-contrast bg-contrast">
    <h2 class="text-xl font-semibold mb-3 text-gray-800  text-contrast bg-contrast">Compromisso de alta direção.</h2>
    <p class="text-gray-700 text-base flex-1 textContainer  text-contrast bg-contrast">
        O compromisso de agregar valor.
    </p>
  </div>

    <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col  text-contrast bg-contrast">
    <img src="{{ asset('./pessoas.png') }}" alt="" class="h-[30px]  w-[30px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800  text-contrast bg-contrast">Instância responsável.</h2>
    <p class="text-gray-700 text-base flex-1 textContainer  text-contrast bg-contrast">
        Equipe bem estruturada
    </p>
  </div>

 <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col  text-contrast bg-contrast">
    <img src="{{ asset('./medalha.png') }}" alt="" class="h-[30px]  w-[30px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800  text-contrast bg-contrast">Análise de perfil e risco.</h2>
    <p class="text-gray-700 text-base flex-1 textContainer  text-contrast bg-contrast">
        Soluções pensadas no cliente.
    </p>
  </div>
  </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-10 container-x mb-12  text-contrast bg-contrast">
    <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col lg:w-[525px] lg:justify-self-end  text-contrast bg-contrast" >
    <img src="{{ asset('./medalha-star.png') }}" alt="" class="h-[30px]  w-[30px]  text-contrast bg-contrast">
    <h2 class="text-xl font-semibold mb-3 text-gray-800  text-contrast bg-contrast">Regras e instrumentos</h2>
    <p class="text-gray-700 text-base flex-1 textContainer  text-contrast bg-contrast">
        Políticas e procedimentos para <br> mitigar os riscos.
  </div>

   <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col lg:w-[525px]  text-contrast bg-contrast">
    <img src="{{ asset('./wi-fi.png') }}" alt="" class="h-[20px]  w-[30px]  text-contrast bg-contrast">
    <h2 class="text-xl font-semibold mb-3 text-gray-800  text-contrast bg-contrast">Monitoramento contínuo</h2>
    <p class="text-gray-700 text-base flex-1 textContainer  text-contrast bg-contrast">
        Análise e avaliação <br> para assegurar resultados valídos
    </p>
  </div>
</div>

</div>

<div class="grid grid-cols-1 lg:grid-cols-2  text-contrast bg-contrast">
      <div class="bg-[#F2F2F2] text-center flex flex-col items-center justify-center px-6 p-10  text-contrast bg-contrast">
    <h1 class="text-[45px] font-semibold mb-4">Código de conduta e ética</h1>
    <p class="text-gray-700 textContainer  text-contrast bg-contrast">
      Para fortalecer a transparência e a equidade entre os nossos colaboradores, fornecedores, clientes e parceiros de negócios, tornamos público o nosso Código de Conduta.
    </p>

    <button class="button-secundary-contrast flex items-center gap-3 p-3 px-6 rounded border border-[#B3B3B3] cursor-pointer mt-8">
      <img src="{{ asset('/download-black.png') }}" alt="Ícone de download" class="w-5 h-5">
      <span>BAIXE NOSSO CÓDIGO DE CONDUTA</span>
    </button>
  </div>
    
       <div class="bg-gradient-to-b from-[#004A65] to-[#006C94] bg-contrast text-center  text-contrast  flex flex-col items-center justify-center px-6 text-white p-10">
    <h1 class="text-[45px] font-semibold mb-4  text-contrast bg-contrast">Canal de denúncia</h1>
    <p class="textContainer  text-contrast bg-contrast">
        Contamos com um Canal de Denúncia sigiloso e imparcial, hospedado fora dos sistemas da TECNOL, administrado com total garantia de confidencialidade.
    </p>

    <button class="button-contrast flex items-center gap-3 justify-center lg:justify-start p-3 px-6 rounded border bg-[#F15A29] cursor-pointer mt-8 w-full lg:w-[350px]">
  <img src="{{ asset('/cadeadoBranco.png') }}" alt="Ícone de download" class="w-5 h-5">
  <span>ACESSAR CANAL DE DENÚNCIA</span>
</button>

  </div>
    


  






</div>
    <x-back-to-top/>

</div>

<script>
    window.addEventListener("load", () => {
        const skeleton = document.getElementById('skeleton');
        const content = document.getElementById('content-real');

        skeleton.classList.add('hidden');
        content.classList.remove('hidden');
    });

</script>

@endsection