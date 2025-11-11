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

<div id="content-real" class="hidden mt-0 text-contrast bg-contrast top-0">

<div class="flex items-center py-12  bg-bgSecondary bg-contrast justify-center lg:justify-start">
  <h1 class="text-[38px] text-textPrimary text-contrast container-x ">Quem somos</h1>
    </div>

    <div class="h-[72px] w-[371px] hidden  bg-[#2ABB7F] flex items-center justify-center right-10 mt-4 fixed z-50" id="modalSuccess">
    <div class="flex items-center justify-center gap-3">
        <img src="/iconCheckModal.png" alt="">
        <p class="text-white text-constrast">Cadastro realizado com sucesso!</p>
        <button type="button" class="flex items-center">
            <img src="/iconCloseModal.png" alt="" id="close">
        </button>
    </div> 
</div>

<div class="h-[72px] w-[371px] hidden bg-[#E2B203] flex items-center right-10 mt-4 justify-center fixed z-50" id="modalCamposObrigatorios">
    <div class="flex items-center justify-center gap-3">
        <img src="/alertModalCamposObrigatorios.png" alt="">
        <p class="text-black text-constrast">Preencha os campos obrigatórios</p>
        <button type="button" class="flex items-center">
            <img src="/closeModalBlack.png" alt="" id="btnClose">
        </button>
    </div>
</div>

    <div class="grid grid-cols-1 lg:grid-cols-2 container-x py-12 gap-4 bg-contrast items-center">
        <div class="space-y-4  mt-3 lg:mt-6">
            <h1 class= " text-textPrimary text-[38px] text-center lg:text-left text-Primary text-contrast  ">Um pouco da nossa história</h1>
          <p>A TECSHARE nasceu com o propósito de simplificar e digitalizar experiências, conectando tecnologia, pessoas e negócios de forma inteligente.
          
          <p>Identificamos no mercado a oportunidade de evoluir a forma como empresas se relacionam com dados, processos e clientes, criando experiências mais ágeis, seguras e integradas.</p>
             
          <p>Com foco em automação, usabilidade e análise de dados, a TECSHARE transforma o ecossistema de soluções tecnológicas e integrações digitais, reduzindo burocracias, aumentando a eficiência operacional e garantindo segurança em cada interação, por meio de plataformas como o Safe Data Analytics e TecnoHub</p>
          
          <p>Unimos inovação tecnológica, experiência do usuário e inteligência de dados para desenvolver produtos que simplificam o uso, automatizam a validação de informações e potencializam resultados de negócio.</p>
        
        
        
        </div>
 
            

        
        <div class = " mt-6  lg:mt-12">
            <img class="rounded" src="{{ asset('/quem-somos-1.png') }}" alt="">
        </div>
    </div>


    <div class="grid grid-cols-1 lg:grid-cols-2 container-x bg-[#F2F2F2] bg-contrast text-black py-10 gap-3 items-center">

        
        <div class = "">
            <img class="rounded mt-[40px]" src="{{ asset('/quem-somos-2.png') }}" alt="" >

        </div>

          <div class= "mt-[40px] space-y-3 ">
            <h1 class= "text-4xl text-center lg:text-left text-contrast">Nossa missão e visão</h1>
            <p class="text-contrast" >emos como missão automatizar sistematicamente o acesso a informações de dados de forma rápida, fácil e segura. Além da busca contínua em ser referência em soluções automatizadas para o mercado financeiro.</p>
                
        </div>
        
    </div>
            <div class="flex items-center justify-center py-10 text-contrast bg-contrast">
            <h1 class="text-5xl mb-[24px]"> Nossos valores</h1>
             </div>
  <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-[16px] text-contrast bg-contrast container-x">
  <!-- Card 1 -->
  <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col text-contrast bg-contrast">

    <svg width="37" height="32" viewBox="0 0 37 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.3483 1.25423C19.523 -0.418085 17.1383 -0.418069 16.313 1.25423L12.3831 9.2171L3.59558 10.494C1.75008 10.7622 1.01318 13.0301 2.3486 14.3318L8.70733 20.53L7.20623 29.2821C6.89098 31.1201 8.82022 32.5218 10.4709 31.654L18.3307 27.5218L26.1905 31.654C27.8412 32.5218 29.7703 31.1201 29.4552 29.2821L27.954 20.53L34.3128 14.3318C35.6482 13.0301 34.9113 10.7622 33.0658 10.494L24.2783 9.2171L20.3483 1.25423ZM14.5668 10.4414L18.3307 2.81488L22.0947 10.4414C22.4223 11.1054 23.0558 11.5657 23.7887 11.6722L32.205 12.8951L26.1148 18.8316C25.5847 19.3485 25.3427 20.0931 25.4678 20.8231L26.9055 29.2055L19.3777 25.2478C18.7222 24.9032 17.9392 24.9032 17.2837 25.2478L9.75588 29.2055L11.1936 20.8231C11.3187 20.0931 11.0768 19.3485 10.5465 18.8316L4.45637 12.8951L12.8727 11.6722C13.6055 11.5657 14.2391 11.1054 14.5668 10.4414ZM0.273965 2.38568C-0.157304 2.92475 -0.0699018 3.71136 0.469182 4.14263L4.63585 7.47596C5.17492 7.90723 5.96153 7.81983 6.3928 7.28075C6.82407 6.74166 6.73667 5.95506 6.19758 5.5238L2.03092 2.19046C1.49183 1.7592 0.705215 1.8466 0.273965 2.38568ZM36.3928 26.4475C36.8242 25.9083 36.7367 25.1216 36.1977 24.6905L32.031 21.3571C31.4918 20.9258 30.7053 21.0133 30.274 21.5523C29.8427 22.0915 29.9302 22.878 30.4692 23.3093L34.6358 26.6426C35.175 27.0738 35.9615 26.9865 36.3928 26.4475ZM0.469182 24.6905C-0.0699018 25.1216 -0.157304 25.9083 0.273965 26.4475C0.705215 26.9865 1.49183 27.0738 2.03092 26.6426L6.19758 23.3093C6.73667 22.878 6.82407 22.0915 6.3928 21.5523C5.96153 21.0133 5.17492 20.9258 4.63585 21.3571L0.469182 24.6905ZM36.3928 2.38568C36.8242 2.92475 36.7367 3.71136 36.1977 4.14263L32.031 7.47596C31.4918 7.90723 30.7053 7.81983 30.274 7.28075C29.8427 6.74166 29.9302 5.95506 30.4692 5.5238L34.6358 2.19046C35.175 1.7592 35.9615 1.8466 36.3928 2.38568Z" fill="currentColor"/>
</svg>

   
   
    

    <h2 class="text-xl font-semibold mb-3 text-gray-800 text-contrast">Inovação</h2>
    <p class="textContainer text-gray-700 text-base flex-1 text-contrast">
        Mantemos atenção constante às novas tecnologias e oportunidades, buscando aprimorar nossos sistemas e apresentar ao mercado soluções práticas. Estamos continuamente avaliando as oportunidades.
  </p>
  </div>

  <!-- Card 2 -->
  <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col text-contrast bg-contrast">
    <svg width="48" height="48" viewBox="0 0 48 48" class="text-contrast" xmlns="http://www.w3.org/2000/svg">
<path d="M16.5 19C19.2614 19 21.5 16.7614 21.5 14C21.5 11.2386 19.2614 9 16.5 9C13.7386 9 11.5 11.2386 11.5 14C11.5 16.7614 13.7386 19 16.5 19ZM16.5 16.5C15.1193 16.5 14 15.3807 14 14C14 12.6193 15.1193 11.5 16.5 11.5C17.8807 11.5 19 12.6193 19 14C19 15.3807 17.8807 16.5 16.5 16.5ZM9 23.5833C9 21.9725 10.3058 20.6667 11.9167 20.6667H21.0833C22.6942 20.6667 24 21.9725 24 23.5833V31.5C24 35.6422 20.6421 39 16.5 39C12.3579 39 9 35.6422 9 31.5V23.5833ZM11.9167 23.1667C11.6866 23.1667 11.5 23.3532 11.5 23.5833V31.5C11.5 34.2615 13.7386 36.5 16.5 36.5C19.2614 36.5 21.5 34.2615 21.5 31.5V23.5833C21.5 23.3532 21.3135 23.1667 21.0833 23.1667H11.9167ZM21.5455 18.3573C22.2705 18.7665 23.1078 19 23.9998 19C26.7612 19 28.9998 16.7614 28.9998 14C28.9998 11.2386 26.7612 9 23.9998 9C23.1078 9 22.2705 9.23352 21.5455 9.64273C22.0898 10.2724 22.5182 11.0051 22.7975 11.8075C23.1542 11.6115 23.564 11.5 23.9998 11.5C25.3805 11.5 26.4998 12.6193 26.4998 14C26.4998 15.3807 25.3805 16.5 23.9998 16.5C23.564 16.5 23.1542 16.3885 22.7975 16.1925C22.5182 16.9949 22.0898 17.7276 21.5455 18.3573ZM22.1003 38.7573C22.707 38.9157 23.3435 39 23.9998 39C28.1418 39 31.4998 35.6422 31.4998 31.5V23.5833C31.4998 21.9725 30.194 20.6667 28.5832 20.6667H24.6188C25.1903 21.3587 25.5625 22.2213 25.6478 23.1667H28.5832C28.8132 23.1667 28.9998 23.3532 28.9998 23.5833V31.5C28.9998 34.199 26.8613 36.3985 24.1862 36.4965C23.6222 37.3625 22.9158 38.1272 22.1003 38.7573ZM29.0455 18.3573C29.7705 18.7665 30.6078 19 31.4998 19C34.2612 19 36.4998 16.7614 36.4998 14C36.4998 11.2386 34.2612 9 31.4998 9C30.6078 9 29.7705 9.23352 29.0455 9.64273C29.5898 10.2724 30.0182 11.0051 30.2975 11.8075C30.6542 11.6115 31.064 11.5 31.4998 11.5C32.8805 11.5 33.9998 12.6193 33.9998 14C33.9998 15.3807 32.8805 16.5 31.4998 16.5C31.064 16.5 30.6542 16.3885 30.2975 16.1925C30.0182 16.9949 29.5898 17.7276 29.0455 18.3573ZM29.6003 38.7573C30.207 38.9157 30.8435 39 31.4998 39C35.6418 39 38.9998 35.6422 38.9998 31.5V23.5833C38.9998 21.9725 37.694 20.6667 36.0832 20.6667H32.1188C32.6903 21.3587 33.0625 22.2213 33.1478 23.1667H36.0832C36.3132 23.1667 36.4998 23.3532 36.4998 23.5833V31.5C36.4998 34.199 34.3613 36.3985 31.6862 36.4965C31.1222 37.3625 30.4158 38.1272 29.6003 38.7573Z" fill="currentColor"/>
</svg>

    <h2 class="text-xl font-semibold mb-3 text-gray-800 text-contrast">Ética</h2>
    <p class="textContainer text-gray-700 text-base flex-1 text-contrast bg-contrast">
    Agimos alinhados à nossa missão e visão, atuando contra atitudes antiéticas ou desvios de conduta. Tomamos decisões com foco no longo prazo e consideramos os impactos em nossos stakeholders.
    </p>
  </div>

  <!-- Card 3 -->
  <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col text-contrast bg-contrast">
    <svg width="48" height="48" viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M37.7502 7.3317C39.361 7.3317 40.6668 8.63755 40.6668 10.2484V15.3195C40.6668 17.0265 39.7183 18.592 38.2053 19.3822L27.7357 24.8495C30.4623 26.219 32.3335 29.0413 32.3335 32.3007C32.3335 36.903 28.6025 40.634 24.0002 40.634C19.3978 40.634 15.6668 36.903 15.6668 32.3007C15.6668 29.0413 17.538 26.219 20.2647 24.8495L9.79505 19.3822C8.28205 18.592 7.3335 17.0265 7.3335 15.3195V10.2484C7.3335 8.63755 8.63933 7.3317 10.2502 7.3317H37.7502ZM24.0002 26.4673C20.7785 26.4673 18.1668 29.079 18.1668 32.3007C18.1668 35.5223 20.7785 38.134 24.0002 38.134C27.2218 38.134 29.8335 35.5223 29.8335 32.3007C29.8335 29.079 27.2218 26.4673 24.0002 26.4673ZM29.8335 9.83003H18.1668V20.9333L23.8073 23.8798C23.9282 23.943 24.0722 23.943 24.193 23.8798L29.8335 20.9317V9.83003ZM15.6668 9.83003L10.2502 9.8317C10.02 9.8317 9.8335 10.0182 9.8335 10.2484V15.3195C9.8335 16.0954 10.2646 16.807 10.9524 17.1662L15.6668 19.6267V9.83003ZM37.7502 9.8317L32.3335 9.83003V19.6267L37.048 17.1662C37.7357 16.807 38.1668 16.0954 38.1668 15.3195V10.2484C38.1668 10.0182 37.9803 9.8317 37.7502 9.8317Z" fill="currentColor333"/>
</svg>

    <h2 class="text-xl font-semibold mb-3 text-gray-800 text-contrast bg-contrast">Qualidade e eficiência </h2>
    <p class="textContainer text-gray-700 text-base flex-1 text-contrast bg-contrast">
       Garantimos as melhores entregas ao tomar decisões baseadas em dados, informações relevantes e na troca de conhecimento. Criamos soluções com etapas lógicas e somos disciplinados na execução, realizando uma gestão de risco contínua. 
   </p>
  </div>

  <!-- Card 4 -->
  <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col text-contrast bg-contrast">
    <svg width="48" height="48" viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M24.3815 13.4039L25.9025 16.4917L29.309 16.9839C29.6578 17.0343 29.7973 17.463 29.5448 17.709L27.081 20.1098L27.6627 23.5022C27.7222 23.8495 27.3575 24.1143 27.0457 23.95L24.0003 22.346L20.9548 23.95C20.6429 24.1143 20.2781 23.8493 20.3379 23.5018L20.9225 20.1098L18.4558 17.7092C18.2031 17.4633 18.3425 17.0343 18.6915 16.9839L22.098 16.4917L23.619 13.4039C23.7748 13.0876 24.2258 13.0876 24.3815 13.4039ZM35.6668 19C35.6668 12.5567 30.4435 7.33333 24.0002 7.33333C17.5568 7.33333 12.3335 12.5567 12.3335 19C12.3335 22.1783 13.6044 25.0598 15.6658 27.1638L15.6682 39.417L15.6797 39.5912C15.8014 40.4955 16.8585 40.9878 17.6379 40.439L23.9987 35.9595L30.3627 40.4392L30.5118 40.53C31.3212 40.951 32.3322 40.3702 32.3322 39.417L32.3345 27.1638C34.3958 25.0598 35.6668 22.1783 35.6668 19ZM29.8325 29.1065L29.8322 37.0085L24.7178 33.4087L24.5498 33.3088C24.1445 33.1095 23.6563 33.1428 23.2787 33.4088L18.1682 37.0078L18.1678 29.1065C19.8836 30.0987 21.8755 30.6667 24.0002 30.6667C26.1248 30.6667 28.1167 30.0987 29.8325 29.1065ZM14.8335 19C14.8335 13.9374 18.9375 9.83333 24.0002 9.83333C29.0628 9.83333 33.1668 13.9374 33.1668 19C33.1668 24.0627 29.0628 28.1667 24.0002 28.1667C18.9375 28.1667 14.8335 24.0627 14.8335 19Z" fill="currentColor"/>
</svg>


    <h2 class="text-xl font-semibold mb-3 text-gray-800 text-contrast bg-contrast">Compromisso com a verdade e transparência</h2>
    <p class="textContainer text-gray-700 text-base flex-1 text-contrast bg-contrast">
        Adotamos a perspectiva de nossos clientes para entender suas necessidades e antecipar soluções que gerem valor. Estabelecemos relações de confiança e consultivas, esclarecendo dúvidas de forma transparente e mantendo-os informados. Formamos parcerias com outras áreas para otimizar e agilizar os resultados, considerando os impactos para o cliente.
    </p>
  </div>

  <!-- Card 5 -->
  <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col text-contrast bg-contrast">
    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.7487 29.7007L31.1767 15.5741C31.5218 15.1064 32.1603 14.9674 32.6688 15.2492C33.1263 15.5029 33.3508 16.0265 33.2355 16.5229L33.1842 16.6869L26.7342 33.0187C26.0342 34.791 24.0298 35.6603 22.2575 34.9603C22.1183 34.9053 21.983 34.8415 21.8522 34.769C20.1851 33.8448 19.5827 31.7443 20.5068 30.0772L20.6217 29.885L20.7487 29.7007ZM27.0833 25.3288L22.76 31.1853L22.6933 31.2892C22.4387 31.7487 22.6047 32.3277 23.0642 32.5823L23.1758 32.6352C23.6152 32.8087 24.1063 32.632 24.3407 32.239L24.409 32.1003L27.0833 25.3288ZM24.1673 22.1188L22.123 24.8857C21.6162 25.0515 21.1248 25.2938 20.6654 25.6155C19.2323 26.619 18.3787 28.2105 18.3056 29.9262C18.2762 30.6158 17.6932 31.1512 17.0035 31.1218C16.3137 31.0923 15.7784 30.5093 15.8078 29.8197C15.9137 27.3347 17.1541 25.0222 19.2314 23.5677C20.7325 22.5167 22.4677 22.0495 24.1673 22.1188ZM31.1125 26.7047C31.5778 27.6813 31.8385 28.7368 31.8835 29.815C31.9123 30.5047 31.3765 31.0872 30.6868 31.116C30.2322 31.135 29.824 30.9087 29.5905 30.5547L31.1125 26.7047ZM27.3893 17.7556L25.7752 19.9402C23.119 19.4388 20.2709 19.9671 17.8817 21.64C15.9016 23.0265 14.5016 25.015 13.8506 27.2903C13.6607 27.954 12.9687 28.3382 12.305 28.1482C11.6413 27.9583 11.2572 27.2663 11.447 26.6027C12.2543 23.7812 13.9937 21.3105 16.4478 19.5921C19.7596 17.2732 23.7823 16.7272 27.3893 17.7556ZM33.2387 21.3188C33.658 21.7632 34.0498 22.2442 34.4107 22.7595C35.234 23.9353 35.8475 25.2213 36.2387 26.574C36.4305 27.2372 36.0483 27.9303 35.3852 28.1222C34.722 28.3138 34.029 27.9318 33.8372 27.2687C33.5222 26.1793 33.0278 25.1433 32.3628 24.1933L32.194 23.9638L33.2387 21.3188ZM30.6348 13.7537L30.4882 13.8438C30.2842 13.9804 30.0953 14.1445 29.9275 14.3346L29.7668 14.5335L28.8653 15.755C24.3962 14.2016 19.27 14.7433 15.0981 17.6645C12.5937 19.4181 10.718 21.8303 9.63465 24.6175C9.38455 25.261 8.66019 25.5798 8.01672 25.3297C7.37327 25.0797 7.05439 24.3552 7.30449 23.7118C8.5656 20.4672 10.7514 17.6562 13.6642 15.6167C18.8173 12.0084 25.2213 11.5191 30.6348 13.7537ZM35.0162 16.3568C36.2743 17.3757 37.412 18.5845 38.3862 19.9758C39.2047 21.1448 39.873 22.3933 40.3843 23.7C40.6358 24.3428 40.3187 25.068 39.6757 25.3195C39.0328 25.5712 38.3077 25.2538 38.0562 24.611C37.617 23.4888 37.0428 22.4158 36.3383 21.4098C35.6955 20.4917 34.9698 19.6662 34.1785 18.9361L34.8138 17.3305C34.9397 17.0118 35.0055 16.6828 35.0162 16.3568Z" fill="currentColor"/>
</svg>


    <h2 class="text-xl font-semibold mb-3 text-gray-800 text-contrast bg-contrast">Prosperidade e oportunidade para os outros</h2>
    <p class="textContainer text-gray-700 text-base flex-1 text-contrast bg-contrast">
    Somos protagonistas de nossas carreiras e aproveitamos as oportunidades de desenvolvimento disponíveis. Buscamos novos conhecimentos ao enfrentar desafios e valorizamos a diversidade de opiniões, encarando os feedbacks como fontes de aprendizado.
   </p>
  </div>

  <!-- Card 6 -->
  <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col text-contrast bg-contrast">
   <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M35.6667 16.5C35.6667 17.3667 35.5463 18.2053 35.3215 19H38.0227C39.483 19 40.6667 20.1837 40.6667 21.644V29.8333C40.6667 35.8165 35.8165 40.6667 29.8333 40.6667C27.2922 40.6667 24.9555 39.7918 23.1078 38.3268L21.134 40.3005C20.6459 40.7887 19.8545 40.7887 19.3663 40.3005C18.8781 39.8123 18.8781 39.021 19.3663 38.5328L21.34 36.559C20.6822 35.7293 20.1434 34.8012 19.7493 33.8002C19.1033 33.9312 18.4347 34 17.75 34C12.2272 34 7.75 29.5228 7.75 24V16.5227C7.75 15.1295 8.87947 14 10.2727 14H17.6783C18.7666 10.1525 22.304 7.33333 26.5 7.33333H33.2652C34.5915 7.33333 35.6667 8.40853 35.6667 9.73484V16.5ZM20.2037 14.3032C23.028 15.0157 25.3745 16.9297 26.6675 19.4699C27.6688 19.1644 28.732 19 29.8333 19H32.682C32.9945 18.228 33.1667 17.3841 33.1667 16.5V9.83333H26.5C23.5877 9.83333 21.1117 11.7006 20.2037 14.3032ZM24.891 36.5435C26.2738 37.5637 27.9832 38.1667 29.8333 38.1667C34.4357 38.1667 38.1667 34.4357 38.1667 29.8333V21.644C38.1667 21.5645 38.1022 21.5 38.0227 21.5H29.8333C25.231 21.5 21.5 25.231 21.5 29.8333C21.5 31.6837 22.103 33.393 23.1233 34.7758L30.1997 27.6995C30.6878 27.2113 31.4793 27.2113 31.9673 27.6995C32.4555 28.1877 32.4555 28.979 31.9673 29.4672L24.891 36.5435ZM19 29.8333C19 28.846 19.1321 27.8897 19.3795 26.9808L14.7826 22.3838C14.2944 21.8957 14.2944 21.1043 14.7826 20.6161C15.2708 20.128 16.0622 20.128 16.5504 20.6161L20.4134 24.4792C21.3575 22.8218 22.7263 21.4378 24.3718 20.4754C23.1102 18.1099 20.6181 16.5 17.75 16.5H10.2727C10.2673 16.5 10.2643 16.5013 10.2643 16.5013C10.2643 16.5013 10.2596 16.5037 10.2566 16.5066C10.2537 16.5096 10.2513 16.5143 10.2513 16.5143C10.2513 16.5143 10.25 16.5173 10.25 16.5227V24C10.25 28.1422 13.6079 31.5 17.75 31.5C18.2141 31.5 18.6684 31.4578 19.1092 31.3772C19.0372 30.8728 19 30.3575 19 29.8333Z" fill="currentColor"/>
</svg>

    <h2 class="text-xl font-semibold mb-3 text-gray-800 text-contrast bg-contrast">Responsabilidade socioambiental</h2>
    <p class="textContainer text-gray-700 text-base flex-1 text-contrast bg-contrast">
        Estamos comprometidos com nosso meio ambiente, desenvolvendo nossas atividades de forma a não causar danos à natureza e auxiliando outras instituições por meio das nossas soluções automatizadas. Internamente, mantemos um compromisso com a utilização de recursos de maneira sustentável e consciente.
  </p>
  </div>
</div>

<div class="container-x bg-[#F2F2F2] text-[#333333] flex flex-col items-center justify-center py-10 mt-20 space-y-5 gap-3 text-contrast bg-contrast">
 
 
  <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast">
<path d="M8 15.3333C8 14.2288 8.89544 13.3333 10 13.3333C17.1024 13.3333 24.0213 10.8174 30.8 5.73331C31.5112 5.19998 32.4888 5.19998 33.2 5.73331C39.9787 10.8174 46.8976 13.3333 54 13.3333C55.1045 13.3333 56 14.2288 56 15.3333V29.3333C56 29.8168 55.9896 30.2957 55.9688 30.7698C54.8811 29.6701 53.5219 28.8394 52 28.3864V17.2745C45.1272 16.8689 38.4512 14.3688 32 9.8075C25.5489 14.3688 18.8729 16.8689 12 17.2745V29.3333C12 40.6816 18.5423 49.0104 32 54.5117C32.9213 54.1352 33.8101 53.7453 34.6667 53.3421V57.3333C34.6667 57.4645 34.6704 57.5946 34.6779 57.724C34.0435 57.9989 33.3952 58.2666 32.7331 58.5274C32.2619 58.713 31.7381 58.713 31.2669 58.5274C15.8868 52.4685 8 42.6698 8 29.3333V15.3333ZM42.6667 40V37.3333C42.6667 33.6514 45.6515 30.6666 49.3333 30.6666C53.0152 30.6666 56 33.6514 56 37.3333V40H57.3333C59.5424 40 61.3333 41.7909 61.3333 44V57.3333C61.3333 59.5424 59.5424 61.3333 57.3333 61.3333H41.3333C39.1243 61.3333 37.3333 59.5424 37.3333 57.3333V44C37.3333 41.7909 39.1243 40 41.3333 40H42.6667ZM46.6667 37.3333V40H52V37.3333C52 35.8605 50.8061 34.6666 49.3333 34.6666C47.8605 34.6666 46.6667 35.8605 46.6667 37.3333ZM52 50.6666C52 49.1938 50.8061 48 49.3333 48C47.8605 48 46.6667 49.1938 46.6667 50.6666C46.6667 52.1394 47.8605 53.3333 49.3333 53.3333C50.8061 53.3333 52 52.1394 52 50.6666Z" fill="currentColor"/>
</svg>




  <h1 class="text-4xl font-normal text-center text-contrast bg-contrast ">Política de Sistema de Gestão Integrado - SGI</h1>
  <p class="textContainer text-center font-medium text-md text-contrast bg-contrast">A TECSHARE, uma empresa de tecnologia, que atua no fornecimento de Serviços de Desenvolvimento de Soluções de Softwares, com a sede localizada na cidade de Nova Lima/MG e, filial em São Paulo/SP, com atuação no território brasileiro, define sua Política de Gestão Integrada com o compromisso de:</p>

    <div  class="grid grid-cols-1 lg:grid-cols-2 gap-8 text-contrast bg-contrast">
        <div class="bg-white  rounded border  border-[#F2F2F2] p-4 text-contrast bg-contrast">
            <p class="textContainer text-[16px] ">•A Política de Segurança da Informação e Serviços da <strong>TECSHARE</strong> tem como principais metas oferecer um serviço confiável, com garantia de qualidade e segurança da informação para a entrega e operação dos serviços contratados, com objetivo de manter, por meios dos requisitos técnicos e legais, de clientes, parceiros a confidencialidade, integridade e disponibilidade durante toda a prestação do serviço, monitorando constantemente.</p>
        </div>

        <div class="bg-white rounded border  border-[#F2F2F2] p-4 text-contrast bg-contrast">
            
            <p class="textContainer  text-[16px text-contrast bg-contrast]">•A Política de Segurança da Informação e Serviços da <strong>TECSHARE</strong>, assegura a proteção dos seus ativos, pessoas, informação, sistemas, aplicação e mapeamento de seus principais processos críticos do negócio de acordo com as estratégias da empresa, legislação vigente e requisitos contratuais, com acompanhamento constante</p>
        </div>
    </div>

     <button class="border border-[#808080] p-4 ">
          LEIA MAIS SOBRE NOSSA POLÍTICA DE SEGURANÇA
    </button>



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
