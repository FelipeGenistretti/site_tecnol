@extends('layouts.app')


@section('title','TecShare')

@section('content')
      <div class="flex items-center py-12  bg-gray-200">
  <h1 class="text-2xl text-black container-x">Quem somos</h1>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 h-[460.px] container-x m-5">
        <div class= "p-4 mt-12">
            <h1 class= "text-[40px] m-3">Um pouco da nossa história</h1>
            <p class="text-sm">Hoje a TECNOL possui sede em Nova Lima e conta com uma infraestrutura moderna, com Datacenter certificados, links redundantes e toda estrutura de atendimento (BackOffice, Comercial,<br> Relacionamento Institucional, Jurídico especializado e uma Central de Atendimento). Somos formados por uma equipe com mais de 20 anos de experiência no setor de veículos. Estamos sempre investindo em pessoas e em novas tecnologias, buscando o nosso aperfeiçoamento contínuo para sempre ser a melhor opção em nossa área de atuação.</p>
        </div>
        
        
        <div class = "p-4 mt-12">
            <img class="rounded" src="{{ asset('/quemsomos-1.jpg') }}" alt="">

        </div>
    </div>


    <div class="grid grid-cols-1 lg:grid-cols-2 h-[460.px] container-x bg-[#125e7a] text-white p-10">

        
        <div class = "p-4 mt-12">
            <img class="h-[300px] w-[820px] rounded" src="{{ asset('/quemsomos-1.jpg') }}" alt="">

        </div>

          <div class= "p-4 mt-12 h-[278px] ">
            <h1 class= "text-[40px] m-3">Nossa missão e visão</h1>
            <p class="text-sm">Temos como missão automatizar sistematicamente a transmissão de informações de forma rápida, fácil e segura. Além da busca contínua em ser referência em soluções automatizadas para o mercado financeiro. </p>
                
        </div>
        
    </div>
            <div class="flex items-center justify-center m-8">
            <h1 class="text-[40px]"> Nossos valores</h1>
             </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
  <!-- Card 1 -->
  <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col">
    <img src="{{ asset('./star.png') }}" alt="" class="h-[40px]  w-[40px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800">Inovação</h2>
    <p class="text-gray-700 text-base flex-1">
        Mantemos atenção constante às novas tecnologias e oportunidades, buscando aprimorar nossos sistemas e apresentar ao mercado soluções práticas. Estamos continuamente avaliando as oportunidades.
  </p>
  </div>

  <!-- Card 2 -->
  <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col">
    <img src="{{ asset('./pessoas.png') }}" alt="" class="h-[40px]  w-[40px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800">Ética</h2>
    <p class="text-gray-700 text-base flex-1">
    Agimos alinhados à nossa missão e visão, atuando contra atitudes antiéticas ou desvios de conduta. Tomamos decisões com foco no longo prazo e consideramos os impactos em nossos stakeholders.
    </p>
  </div>

  <!-- Card 3 -->
  <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col">
    <img src="{{ asset('./medalha.png') }}" alt="" class="h-[40px]  w-[40px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800">Qualidade e eficiência </h2>
    <p class="text-gray-700 text-base flex-1">
       Garantimos as melhores entregas ao tomar decisões baseadas em dados, informações relevantes e na troca de conhecimento. Criamos soluções com etapas lógicas e somos disciplinados na execução, realizando uma gestão de risco contínua. 
   </p>
  </div>

  <!-- Card 4 -->
  <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col">
    <img src="{{ asset('./medalha-star.png') }}" alt="" class="h-[40px]  w-[40px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800">Compromisso com a verdade e transparência</h2>
    <p class="text-gray-700 text-base flex-1">
        Adotamos a perspectiva de nossos clientes para entender suas necessidades e antecipar soluções que gerem valor. Estabelecemos relações de confiança e consultivas, esclarecendo dúvidas de forma transparente e mantendo-os informados. Formamos parcerias com outras áreas para otimizar e agilizar os resultados, considerando os impactos para o cliente.
    </p>
  </div>

  <!-- Card 5 -->
  <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col">
    <img src="{{ asset('./wi-fi.png') }}" alt="" class="h-[20px]  w-[30px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800">Prosperidade e oportunidade para os outros</h2>
    <p class="text-gray-700 text-base flex-1">
    Somos protagonistas de nossas carreiras e aproveitamos as oportunidades de desenvolvimento disponíveis. Buscamos novos conhecimentos ao enfrentar desafios e valorizamos a diversidade de opiniões, encarando os feedbacks como fontes de aprendizado.
   </p>
  </div>

  <!-- Card 6 -->
  <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col">
    <img src="{{ asset('./plantas.png') }}" alt="" class="h-[20px]  w-[30px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800">Responsabilidade socioambiental</h2>
    <p class="text-gray-700 text-base flex-1">
        Estamos comprometidos com nosso meio ambiente, desenvolvendo nossas atividades de forma a não causar danos à natureza e auxiliando outras instituições por meio das nossas soluções automatizadas. Internamente, mantemos um compromisso com a utilização de recursos de maneira sustentável e consciente.
  </p>
  </div>
</div>

<div class="bg-[#004A65] text-white flex flex-col items-center justify-center h-[550px] mb-4 mt-8">
  <img src="{{ asset('/seg.png') }}" alt="Ícone" class="h-[64px] w-[64px] mb-4">
  <h1 class="text-3xl font-semibold">Política de Sistema de Gestão Integrado - SGI</h1>
  <p class="m-5 text-center text-sm">A TECNOL, uma empresa de tecnologia focada no fornecimento de Serviços de Desenvolvimento de Soluções de Software, com sua matriz localizada em Nova Lima/MG e uma filial em São Paulo/SP, operando em âmbito nacional, define sua Política de Gestão Integrada com o compromisso de alcançar</p>

    <div  class="grid grid-cols-1 lg:grid-cols-2 gap-10  ">
        <div class="bg-[#F2F2F21A]  w-[700px] p-5 rounded border  border-[#F2F2F21A] ">
            <p class="text-sm">• A Política de Segurança da Informação e Serviços da TECNOL tem como principais metas oferecer um serviço confiável, com<strong> garantia de qualidade e segurança da informação </strong> para a entrega e operação dos serviços contratados, com objetivo de manter, por meios dos requisitos técnicos e legais, de clientes, parceiros a <strong> confidencialidade, integridade e disponibilidade </strong> durante toda a prestação do serviço, monitorando constantemente.</p>
        </div>

        <div class="bg-[#F2F2F21A] w-[700px] p-5 rounded border  border-[#F2F2F21A]">
            
            <p class="text-sm">• A Política de Segurança da Informação e Serviços da TECNOL, assegura a proteção dos seus ativos, pessoas, informação, sistemas, aplicação e mapeamento de seus principais processos críticos do negócio de acordo com as estratégias da empresa, legislação vigente e requisitos contratuais, com acompanhamento constante.</p>
        </div>
    </div>
</div>

         <div class="flex flex-col items-center justify-center m-8 text-center">
  <h1 class="text-[40px] mb-4">Trabalhe conosco</h1>
  <p class="mb-2 text-sm">
    Já pensou em trabalhar em um lugar onde o principal objetivo é crescer junto?
  </p>
  <p class="text-sm">
    Na TECNOL, é assim! Buscamos talentos que nos ajudem a fazer da tecnologia a matéria-prima de soluções e inovações que mudem para melhor as necessidades do mercado financeiro.
  </p>
</div>

<div class="grid grid-cols-1 md:grid-cols-[1fr_auto] gap-6 m-10 container-x">
  
  <form class="bg-gray-100 rounded-lg p-6 shadow-md w-full h-full flex flex-col justify-start space-y-4 mt-6">

    <div class="grid grid-cols-4 gap-4">
      <div class="flex flex-col">
        <label class="text-sm font-medium mb-1">Nome</label>
        <input type="text" class="border rounded px-3 py-2 w-full" placeholder="Digite seu nome">
      </div>
      <div class="flex flex-col">
        <label class="text-sm font-medium mb-1">E-mail</label>
        <input type="text" class="border rounded px-3 py-2 w-full" placeholder="email@email.com.br">
      </div>
      <div class="flex flex-col">
        <label class="text-sm font-medium mb-1">Telefone</label>
        <input type="text" class="border rounded px-3 py-2 w-full" placeholder="(xx) xxxxx-xxxx">
      </div>
      <div class="flex flex-col">
        <label class="text-sm font-medium mb-1">Área de atuação</label>
        <select class="border rounded px-3 py-2 w-full bg-white">
          <option value="">Selecionar</option>
          <option value="opcao1">Opção 1</option>
          <option value="opcao2">Opção 2</option>
          <option value="opcao3">Opção 3</option>
        </select>
      </div>
    </div>

  
    <div class="flex flex-col w-full">
      <label class="text-sm font-medium mb-1">Mensagem</label>
      <input type="text" class="border rounded px-3 py-2 w-full pb-12" placeholder="Escreva aqui sua mensagem" />
    </div>

  
    <div class="flex flex-col">
      <label class="text-sm font-medium mb-1">Upload de Arquivo</label>
      <label class="border rounded px-3 py-2 w-full flex flex-col items-center justify-center cursor-pointer bg-gray-50 hover:bg-gray-100 h-[200px] gap-3">
        <img src="{{ asset('/upload-nuuvem.png') }}" alt="">
        <p class="text-sm text-center">
          Arraste e solte seu(s) arquivo(s) aqui <br> ou
        </p>
        <span class="p-2 px-6 rounded border border-[#B3B3B3] cursor-pointer">
          Adicionar arquivos
        </span>
        <input type="file" class="hidden">
      </label>
      <p class="text-sm text-gray-500 mt-1">Tamanho máximo permitido do anexo 5MB</p>
    </div>

  
    <div class="flex flex-col gap-2">
      <!-- Checkbox circular customizado -->
      <label class="flex items-start md:items-center gap-2 text-sm cursor-pointer relative">
        <input type="checkbox" class="peer absolute w-5 h-5 opacity-0" />
        <div class="w-5 h-5 rounded-full border border-gray-400 flex items-center justify-center bg-white peer-checked:bg-orange-500 transition-colors">
          <div class="w-2.5 h-2.5 rounded-full bg-white scale-0 peer-checked:scale-100 transition-transform"></div>
        </div>
        <span class="ml-1">
          Li e concordo com a Política de Privacidade e autorizo o tratamento dos meus dados.
        </span>
      </label>

    
      <div class="mt-2">
        <div class="bg-gray-200 border border-gray-300 rounded p-4 text-center">
          <span class="text-sm text-gray-500">reCAPTCHA aqui</span>
        </div>
      </div>
    </div>

   
    <div>
      <button type="submit" class="w-full bg-[#F15A29] hover:bg-orange-500 text-white font-medium py-2 px-4 rounded transition-colors flex justify-center items-center gap-2">
        <img src="{{'./curriculo-submit.png'}}" alt="" class="h-4">
        Enviar Currículo
      </button>
    </div>
  </form>

  <!-- Coluna 2: Contatos -->
  <div class="flex flex-col space-y-4 mt-5">
    <div class="bg-gray-100 rounded-lg p-4 shadow-md w-[324px] h-[70px] flex items-center gap-3">
      <img src="{{ '/email.png' }}" alt="" class="h-8 w-8">
      <div class="text-sm text-gray-700 line-clamp-2">
        <p class="text-gray-500">email</p>
        <p>atendimento@sistemastecnol.com.br</p>
      </div>
    </div>

    <div class="bg-gray-100 rounded-lg p-4 shadow-md w-[324px] h-[70px] flex items-center gap-3">
      <img src="{{ '/email.png' }}" alt="" class="h-8 w-8">
      <div class="text-sm text-gray-700 line-clamp-2">
        <p class="text-gray-500">ouvidoria</p>
        <p>ouvidoria@sistemastecnol.com.br</p>
      </div>  
    </div>

    <div class="bg-gray-100 rounded-lg p-4 shadow-md w-[324px] h-[80px] flex items-center gap-3">
      <img src="{{ '/email.png' }}" alt="" class="h-8 w-8">
      <div class="text-sm text-gray-700 line-clamp-3">
        <p class="text-gray-500">Encarregado de proteção de dados</p>
        <p>Saron Correa</p>
        <p>dpo@sistematecnol.com.br</p>
      </div>
    </div>

    <div class="bg-gray-100 rounded-lg p-4 shadow-md w-[324px] h-[80px] flex items-center gap-3">
      <img src="{{ '/telefone.png' }}" alt="" class="h-8 w-8">
      <div class="text-sm text-gray-700 line-clamp-3">
        <p class="text-gray-500">Telefones</p>
        <p>(31) 3324-6460</p>
        <p>0800 590 4004</p>
      </div>
    </div>
  </div>

</div>












    </div>


</div>



@endsection
