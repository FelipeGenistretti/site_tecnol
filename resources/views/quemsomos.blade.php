@extends('layouts.app')


@section('title','TecShare')

@section('content')
{{-- Skeleton Loading --}}
<div id="skeleton" class="container-x py-10 animate-pulse">
    {{-- Título --}}
    <div class="h-10 w-56 bg-gray-300 rounded mb-8"></div>

    {{-- Grid principal --}}
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

    {{-- Missão/Visão --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-12">
        <div class="h-64 w-full bg-gray-300 rounded"></div>
        <div class="space-y-3">
            <div class="h-8 w-1/2 bg-gray-300 rounded"></div>
            <div class="h-4 w-full bg-gray-300 rounded"></div>
            <div class="h-4 w-5/6 bg-gray-300 rounded"></div>
        </div>
    </div>

    {{-- Valores --}}
    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-4 mt-12">
        <div class="h-48 bg-gray-300 rounded"></div>
        <div class="h-48 bg-gray-300 rounded"></div>
        <div class="h-48 bg-gray-300 rounded"></div>
        <div class="h-48 bg-gray-300 rounded"></div>
        <div class="h-48 bg-gray-300 rounded"></div>
        <div class="h-48 bg-gray-300 rounded"></div>
    </div>
</div>

<div id="content-real" class="hidden">

      <div class="flex items-center py-12  bg-bgSecondary justify-center lg:justify-start h-[]">
  <h1 class="text-[38px] text-textPrimary container-x">Quem somos</h1>
    </div>

    <div class="h-[72px] w-[371px] hidden  bg-[#2ABB7F] flex items-center justify-center right-10 mt-4 fixed z-50" id="modalSuccess">
    <div class="flex items-center justify-center gap-3">
        <img src="/iconCheckModal.png" alt="">
        <p class="text-white">Cadastro realizado com sucesso!</p>
        <button type="button" class="flex items-center">
            <img src="/iconCloseModal.png" alt="" id="close">
        </button>
    </div> 
</div>

<div class="h-[72px] w-[371px] hidden bg-[#E2B203] flex items-center right-10 mt-4 justify-center fixed z-50" id="modalCamposObrigatorios">
    <div class="flex items-center justify-center gap-3">
        <img src="/alertModalCamposObrigatorios.png" alt="">
        <p class="text-black">Preencha os campos obrigatórios</p>
        <button type="button" class="flex items-center">
            <img src="/closeModalBlack.png" alt="" id="btnClose">
        </button>
    </div>
</div>

    <div class="grid grid-cols-1 lg:grid-cols-2 container-x py-12 gap-4">
        <div class="space-y-4  mt-3 lg:mt-6">
            <h1 class= " text-textPrimary text-[38px] text-center lg:text-left text-Primary text-[45px] m-2">Um pouco da nossa história</h1>
            <p class="textContainer text-[16px]  text-textPrimary   lg:text-left m-2">Hoje a TECNOL possui sede em Nova Lima e conta com uma infraestrutura moderna, com Datacenter certificados, links redundantes e toda estrutura de atendimento (BackOffice, Comercial, Relacionamento Institucional, Jurídico especializado e uma Central de Atendimento). Somos formados por uma equipe com mais de 20 anos de experiência no setor de veículos. Estamos sempre investindo em pessoas e em novas tecnologias, buscando o nosso aperfeiçoamento contínuo para sempre ser a melhor opção em nossa área de atuação.</p>
        </div>
        
        
        <div class = "">
            <img class="rounded" src="{{ asset('/quem-somos-1.png') }}" alt="">

        </div>
    </div>


    <div class="grid grid-cols-1 lg:grid-cols-2 container-x bg-bgPrimary text-white py-10 gap-3">

        
        <div class = "">
            <img class="rounded mt-[40px]" src="{{ asset('/quem-somos-2.png') }}" alt="" >

        </div>

          <div class= "mt-[40px] space-y-3">
            <h1 class= "text-4xl text-center lg:text-left">Nossa missão e visão</h1>
            <p class="textContainer text-md mt-[24px]">Temos como missão automatizar sistematicamente a transmissão de informações de forma rápida, fácil e segura. Além da busca contínua em ser referência em soluções automatizadas para o mercado financeiro. </p>
                
        </div>
        
    </div>
            <div class="flex items-center justify-center py-10">
            <h1 class="text-5xl mb-[24px]"> Nossos valores</h1>
             </div>
    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-[16px] container-x">
  <!-- Card 1 -->
  <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col">
    <img src="{{ asset('./star.png') }}" alt="" class="h-[40px]  w-[40px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800">Inovação</h2>
    <p class="textContainer text-gray-700 text-base flex-1">
        Mantemos atenção constante às novas tecnologias e oportunidades, buscando aprimorar nossos sistemas e apresentar ao mercado soluções práticas. Estamos continuamente avaliando as oportunidades.
  </p>
  </div>

  <!-- Card 2 -->
  <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col">
    <img src="{{ asset('./Icon-pessoas.png') }}" alt="" class="h-[40px] w-[40px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800">Ética</h2>
    <p class="textContainer text-gray-700 text-base flex-1">
    Agimos alinhados à nossa missão e visão, atuando contra atitudes antiéticas ou desvios de conduta. Tomamos decisões com foco no longo prazo e consideramos os impactos em nossos stakeholders.
    </p>
  </div>

  <!-- Card 3 -->
  <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col">
    <img src="{{ asset('./medalha.png') }}" alt="" class="h-[30px]  w-[30px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800">Qualidade e eficiência </h2>
    <p class="textContainer text-gray-700 text-base flex-1">
       Garantimos as melhores entregas ao tomar decisões baseadas em dados, informações relevantes e na troca de conhecimento. Criamos soluções com etapas lógicas e somos disciplinados na execução, realizando uma gestão de risco contínua. 
   </p>
  </div>

  <!-- Card 4 -->
  <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col">
    <img src="{{ asset('./medalha-star.png') }}" alt="" class="h-[30px]  w-[30px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800">Compromisso com a verdade e transparência</h2>
    <p class="textContainer text-gray-700 text-base flex-1">
        Adotamos a perspectiva de nossos clientes para entender suas necessidades e antecipar soluções que gerem valor. Estabelecemos relações de confiança e consultivas, esclarecendo dúvidas de forma transparente e mantendo-os informados. Formamos parcerias com outras áreas para otimizar e agilizar os resultados, considerando os impactos para o cliente.
    </p>
  </div>

  <!-- Card 5 -->
  <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col">
    <img src="{{ asset('./wi-fi.png') }}" alt="" class="h-[20px]  w-[30px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800">Prosperidade e oportunidade para os outros</h2>
    <p class="textContainer text-gray-700 text-base flex-1">
    Somos protagonistas de nossas carreiras e aproveitamos as oportunidades de desenvolvimento disponíveis. Buscamos novos conhecimentos ao enfrentar desafios e valorizamos a diversidade de opiniões, encarando os feedbacks como fontes de aprendizado.
   </p>
  </div>

  <!-- Card 6 -->
  <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col">
    <img src="{{ asset('./plantas.png') }}" alt="" class="h-[30px]  w-[30px]">
    <h2 class="text-xl font-semibold mb-3 text-gray-800">Responsabilidade socioambiental</h2>
    <p class="textContainer text-gray-700 text-base flex-1">
        Estamos comprometidos com nosso meio ambiente, desenvolvendo nossas atividades de forma a não causar danos à natureza e auxiliando outras instituições por meio das nossas soluções automatizadas. Internamente, mantemos um compromisso com a utilização de recursos de maneira sustentável e consciente.
  </p>
  </div>
</div>

<div class="container-x bg-bgPrimary text-white flex flex-col items-center justify-center py-10 mt-20 space-y-5">
  <img src="{{ asset('/seg.png') }}" alt="Ícone" class="">
  <h1 class="text-4xl font-normal text-center ">Política de Sistema de Gestão Integrado - SGI</h1>
  <p class="textContainer text-center font-medium text-md">A TECNOL, uma empresa de tecnologia focada no fornecimento de Serviços de Desenvolvimento de Soluções de Software, com sua matriz localizada em Nova Lima/MG e uma filial em São Paulo/SP, operando em âmbito nacional, define sua Política de Gestão Integrada com o compromisso de alcançar</p>

    <div  class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="bg-[#F2F2F21A]  rounded border  border-[#F2F2F21A] p-4">
            <p class="textContainer text-[16px] ">• A Política de Segurança da Informação e Serviços da TECNOL tem como principais metas oferecer um serviço confiável, com<strong> garantia de qualidade e segurança da informação </strong> para a entrega e operação dos serviços contratados, com objetivo de manter, por meios dos requisitos técnicos e legais, de clientes, parceiros a <strong> confidencialidade, integridade e disponibilidade </strong> durante toda a prestação do serviço, monitorando constantemente.</p>
        </div>

        <div class="bg-[#F2F2F21A] rounded border  border-[#F2F2F21A] p-4">
            
            <p class="textContainer  text-[16px]">• A Política de Segurança da Informação e Serviços da TECNOL, assegura a proteção dos seus ativos, pessoas, informação, sistemas, aplicação e mapeamento de seus principais processos críticos do negócio de acordo com as estratégias da empresa, legislação vigente e requisitos contratuais, com acompanhamento constante.</p>
        </div>
    </div>
</div>

         <div class="textContainer flex flex-col items-center justify-center text-center mt-5 py-10" id="trabalheConosco">
  <h1 class="text-4xl mb-3 text-textPrimary">Trabalhe conosco</h1>
  <p class="textContainer text-sm text-textSecondary">
    Já pensou em trabalhar em um lugar onde o principal objetivo é crescer junto?
  </p>
  <p class="textContainer text-sm text-textSecondary">
    Na TECNOL, é assim! Buscamos talentos que nos ajudem a fazer da tecnologia a matéria-prima de soluções e inovações que mudem para melhor as necessidades do mercado financeiro.
  </p>
</div>

<div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-[2fr_auto]  gap-6 container-x mb-12">
  
<form id="enviarCurriculoForm" action="{{ route('enviar-curriculo') }}" enctype="multipart/form-data" accept="image/*,.pdf,.doc,.docx,.xls,.xlsx" method="post" class="bg-gray-100 rounded-lg p-6 shadow-md w-full h-full flex flex-col justify-start space-y-4 mt-5">
  @csrf

  <div class="textContainer grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    <div class="flex flex-col">
      <label class="textContainer text-sm font-medium mb-1">Nome</label>
      <input type="text" name="nome" class="border rounded px-3 py-2 w-full" placeholder="Digite seu nome">
    </div>
           
    <div class="flex flex-col">
      <label class="textContainer text-sm font-medium mb-1">E-mail</label>
      <input type="text" name="email"  class="border rounded px-3 py-2 w-full" placeholder="email@email.com.br">
    </div>
  

    <div class="flex flex-col">
      <label class="textContainer text-sm font-medium mb-1">Telefone</label>
      <input type="text" name="telefone" class="border rounded px-3 py-2 w-full" placeholder="(xx) xxxxx-xxxx">
    </div>

    <div class="flex flex-col">
      <label class="textContainer text-sm font-medium mb-1">Área de atuação</label>
      <select class="border rounded px-3 py-2 w-full bg-white" name="atuacao">
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
    <input type="text" class="border rounded px-3 py-2 w-full pb-12" placeholder="Escreva aqui sua mensagem" name="mensagem" />
  </div>

  

  <!-- Upload -->
  <div class="flex flex-col">
    <label class="textContainer text-sm font-medium mb-1">Upload de Arquivo</label>
    <label class="border rounded px-3 py-2 w-full flex flex-col items-center justify-center cursor-pointer bg-gray-50 hover:bg-gray-100 h-[200px] gap-3">
      <img src="{{ asset('/upload-nuuvem.png') }}" alt="">
      <p class="textContainer text-sm text-center">
        Arraste e solte seu(s) arquivo(s) aqui <br> ou
      </p>
      <span class="textContainer p-2 px-6 rounded border border-[#B3B3B3] cursor-pointer">
        Adicionar arquivos
      </span>
      <input type="file" name="files"  class="hidden">
    </label>
    <p class="textContainer text-sm text-gray-500 mt-1">Tamanho máximo permitido do anexo 5MB</p>
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

<!-- <input type="hidden" name="recaptcha_token" id="recaptcha_token"> -->

    <div class="mt-2">
      <div class="bg-gray-200 border border-gray-300 rounded p-4 text-center">
        <span class="text-sm text-gray-500">reCAPTCHA aqui</span>
      </div>
    </div>
  </div>

  <!-- Botão -->
  <div>
    <button type="submit" class="bg-[#F15A29] textContainer hover:bg-orange-500 text-white font-medium py-2 px-4 rounded transition-colors flex justify-center items-center gap-2">
      <img src="{{'./curriculo-submit.png'}}" alt="" class="h-4">
      Enviar Currículo
    </button>
  </div>

</form>

  <!-- Coluna 2: Contatos -->
  <div class="flex flex-col space-y-4 mt-5">
    <div class="bg-gray-100 rounded-lg p-4 shadow-md  flex items-center gap-3">
      <img src="{{ '/email.png' }}" alt="" class="">
      <div class="text-sm text-gray-700 line-clamp-2">
        <p class="textContainer text-gray-500">email</p>
        <p class="textContainer">atendimento@sistemastecnol.com.br</p>
      </div>
    </div>

    <div class="bg-gray-100 rounded-lg p-4 shadow-md  flex items-center gap-3">
      <img src="{{ '/email.png' }}" alt="" class="">
      <div class="text-sm text-gray-700 line-clamp-2">
        <p class="textContainer text-gray-500">ouvidoria</p>
        <p class="textContainer">ouvidoria@sistemastecnol.com.br</p>
      </div>  
    </div>

    <div class="bg-gray-100 rounded-lg p-4 shadow-md flex items-center gap-3">
      <img src="{{ '/email.png' }}" alt="" class="">
      <div class="text-sm text-gray-700 line-clamp-3">
        <p class="textContainer text-gray-500">Encarregado de proteção de dados</p>
        <p class="textContainer">Saron Correa</p>
        <p class="textContainer">dpo@sistematecnol.com.br</p>
      </div>
    </div>

    <div class="bg-gray-100 rounded-lg p-4 shadow-md flex items-center gap-3">
      <img src="{{ '/telefone.png' }}" alt="" class="">
      <div class="text-sm text-gray-700 line-clamp-3">
        <p class="textContainer text-gray-500">Telefones</p>
        <p class="textContainer">(31) 3324-6460</p>
        <p class="textContainer">0800 590 4004</p>
      </div>
    </div>
  </div>

</div>

    </div>


</div>


    <x-back-to-top/>

</div>    
@endsection

<script src="https://www.google.com/recaptcha/enterprise.js?render={{ config('recaptcha.site_key') }}"></script>
<script>
//grecaptcha.enterprise.ready(function() {
//    grecaptcha.enterprise.execute('{{ config('recaptcha.site_key') }}', {action: 'submit'}).then(function(token) {
//        document.getElementById('recaptcha_token').value = token;
//    });
//});
</script>



<<script>
window.addEventListener("load", () => {
    const skeleton = document.getElementById('skeleton');
    const content = document.getElementById('content-real');

    skeleton.classList.add('hidden');
    content.classList.remove('hidden');
});

document.addEventListener("DOMContentLoaded", () => {
    const modalSuccess = document.getElementById("modalSuccess");
    const closeSuccess = document.getElementById("close");

    @if(session('success'))
        showModal(modalSuccess, closeSuccess);
    @endif

    const modalCampos = document.getElementById("modalCamposObrigatorios");
    const btnCloseCampos = document.getElementById("btnClose");

    @if($errors->any())
        showModal(modalCampos, btnCloseCampos);
    @endif

    function showModal(modal, closeBtn) {
        if(!modal) return;

        modal.classList.remove("hidden");
        modal.classList.add("opacity-0", "transition", "duration-500");
        setTimeout(() => modal.classList.remove("opacity-0"), 10);

        if(closeBtn){
            closeBtn.addEventListener("click", () => {
                modal.classList.add("opacity-0");
                setTimeout(() => modal.classList.add("hidden"), 500);
            });
        }

        setTimeout(() => {
            modal.classList.add("opacity-0");
            setTimeout(() => modal.classList.add("hidden"), 500);
        }, 3000);
    }
});
</script>
