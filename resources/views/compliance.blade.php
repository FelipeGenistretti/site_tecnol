@extends('layouts.app')

@section('title',' compliance TecShare')

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

   <div class=" titulo flex items-center h-[128px]  bg-bgSecondary justify-center lg:justify-start h-[]  text-contrast bg-contrast">
  <h1 class=" text-[38px] text-textPrimary container-x  text-contrast bg-contrast">Compliance</h1>
    </div>


  <div class="grid grid-cols-1 lg:grid-cols-2  container-x my-8 lg:my-12  text-contrast bg-contrast items-center">
        <div class= "p-4  lg:mt-12">
            <h1 class= "text-[40px]  text-textPrimary text-contrast">Transparência e conformidade</h1>
            <p class="text-lg  text-textPrimary textContainer  text-contrast bg-contrast">Na <strong>Tecshare</strong>, a transparência, a conformidade com a legislação e o compromisso com princípios éticos e melhores experiências de mercado são práticas diárias e fundamentais para o futuro sustentável dos negócios.<br> <br>

O nosso foco é a prevenção e o combate a fraudes, corrupções e quaisquer desvios que possam comprometer nosso código de conduta e/ou as normas em vigor.</p>
       
          <button onclick="downloadFile()" class="bts-hover button-secundary-contrast flex gap-3 items-center justify-center lg:justify-start p-2 px-6 rounded border border-[#B3B3B3] cursor-pointer mt-8 w-full lg:w-[350px]">

            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast bg-contrast">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13 4L13 12.0858L15.2929 9.79289L16.7071 11.2071L12 15.9142L7.29289 11.2071L8.70711 9.79289L11 12.0858L11 4H13ZM2 19.9L2 11H4L4 19L20 19L20 11H22L22 19.9C22 20.5075 21.5075 21 20.9 21L3.1 21C2.49248 21 2 20.5075 2 19.9Z" fill="currentColor"/>
</svg>


  
  <span class="p-2 whitespace-nowrap ">Baixe nossa política de compliance</span>
</button>
</div>

         <div class = "p-4 mt-4 lg:mt-12  text-contrast bg-contrast">
            <img class="h- rounded" src="{{ asset('/c-img-1.png') }}" alt="">

        </div>
    </div>
      



 <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 container-x bg-[#F2F2F2] text-[#333333] py-8  text-contrast bg-contrast items-center">

        
        <div class = "p-4 mt-4 lg:mt-12">
            <img class=" rounded" src="{{ asset('/c-img-2.png') }}" alt="">

        </div>

          <div class= "py-2 lg:py-[55px]">
            <h1 class= "text-[35px] text-center lg:text-start" >Política de Antissuborno</h1>
            <br>
            <p>Estamos empenhados em manter a integridade e a confiança em todos os nossos relacionamentos – seja com clientes, parceiros, colaboradores ou órgãos reguladores.</p>
</p>
<br>
        
            

            <p>Para reforçar esse compromisso, o nosso programa de Compliance inclui uma Política do Sistema de Antissuborno e ações contínuas para promover um ambiente ético e transparente, consolidando a confiança com nossos stakeholders e fortalecendo a governança corporativa.</p>
        
           <button onclick="downloadFile()" class="bts-hover button-secundary-contrast flex items-center gap-3 justify-center lg:justify-start p-3 px-6 rounded border border-[#808080] cursor-pointer mt-8 w-full lg:w-[500px]">
      
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast bg-contrast">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13 4L13 12.0858L15.2929 9.79289L16.7071 11.2071L12 15.9142L7.29289 11.2071L8.70711 9.79289L11 12.0858L11 4H13ZM2 19.9L2 11H4L4 19L20 19L20 11H22L22 19.9C22 20.5075 21.5075 21 20.9 21L3.1 21C2.49248 21 2 20.5075 2 19.9Z" fill="currentColor"/>
</svg>


      <span class="text-[15px] whitespace-nowrap "> BAIXAR POLÍTICA DO SISTEMA DE ANTISSUBORNO</span>
    </button>

        </div>
        
    </div>



            <div class="flex items-center justify-center m-8">
            <h1 class="text-[40px]"> Nossos pilares</h1>
             </div>


<div class="bg-contrast text-contrast">             



<div class="grid grid-cols-1 lg:grid-cols-3 gap-10 container-x mb-12  text-contrast bg-contrast">


      <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col  text-contrast bg-contrast input-contrast card-hover">

    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#411F56]">
    <path d="M23 39H24.934C25.3834 40.1238 25.9686 41.121 26.6306 42H7.5C6.67158 42 6 41.3284 6 40.5V13.4649C4.8044 12.7733 4 11.4806 4 10C4 7.79086 5.79086 6 8 6H40C42.2092 6 44 7.79086 44 10C44 11.4806 43.1956 12.7733 42 13.4649V23.1448C40.812 22.6472 39.7872 22.0062 39 21.4292V14H9V39H12V29.5C12 28.6716 12.6716 28 13.5 28H21.5C22.3284 28 23 28.6716 23 29.5V39ZM7 10C7 10.5523 7.44772 11 8 11H40C40.5522 11 41 10.5523 41 10C41 9.44772 40.5522 9 40 9H8C7.44772 9 7 9.44772 7 10ZM15 31V39H20V31H15ZM13.5 16C12.6716 16 12 16.6716 12 17.5V24.5C12 25.3284 12.6716 26 13.5 26H24.1682C24.574 24.8424 25.6612 24.0676 26.8192 23.9628C28.0932 23.8474 29.283 23.4746 30.333 23H15V19H33V21.4298C33.3624 21.1644 33.6746 20.9124 33.929 20.6942C34.5204 20.1872 35.2602 19.9337 36 19.9336V17.5C36 16.6716 35.3284 16 34.5 16H13.5ZM36.7708 22.2126C38.133 23.381 41.1874 25.6094 45.0012 25.9546C45.5512 26.0044 46.0002 26.4478 46.0002 27V34C46.0002 42.445 37.8138 45.432 36.2554 45.924C36.0888 45.9766 35.913 45.9766 35.7464 45.924C34.188 45.432 26.001 42.445 26.001 34L26.0006 27C26.0006 26.4478 26.4496 26.0044 26.9996 25.9546C30.8128 25.6092 33.8684 23.3808 35.231 22.2124C35.6648 21.8406 36.337 21.8406 36.7708 22.2126Z" fill="currentColor"/>
    </svg>




    <h2 class="text-xl font-semibold mb-3 text-gray-800  text-contrast bg-contrast">Compromisso de alta direção.</h2>
    <p class="text-gray-700 text-base flex-1 textContainer  text-contrast bg-contrast">
        
    O compromisso de agregar valor.
    </p>
  </div>

    <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col  text-contrast bg-contrast input-contrast card-hover">

    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#411F56]">
    <path d="M29.508 20C31.0936 20 32.4328 21.0542 32.8632 22.5H31.5C30.681 22.5 29.9038 22.679 29.2056 23H18.5039C18.2277 23 18.0039 23.2238 18.0039 23.5V32.998C18.0039 35.6092 19.6715 37.8312 22 38.6566V41.7756C17.9938 40.864 15.0039 37.2802 15.0039 32.998V23.5C15.0039 21.567 16.5709 20 18.5039 20H29.508ZM38.5 22.5C41.5298 22.5 43.9872 24.9496 44 27.9764V23.5C44 21.567 42.433 20 40.5 20L33.7494 19.9981C34.3338 20.7052 34.7448 21.5608 34.9174 22.5H38.5ZM7.5 20L14.2626 19.9981C13.5758 20.829 13.1285 21.865 13.0262 23.0004L7.5 23C7.22386 23 7 23.2238 7 23.5V29.9976C7 32.7604 9.23968 35 12.0025 35C12.4025 35 12.7915 34.953 13.1643 34.8644C13.3337 35.8722 13.6431 36.8334 14.0697 37.728C13.4115 37.906 12.718 38 12.0025 38C7.58284 38 4 34.4172 4 29.9976V23.5C4 21.567 5.567 20 7.5 20ZM24 6C27.3138 6 30 8.6863 30 12C30 15.3137 27.3138 18 24 18C20.6862 18 18 15.3137 18 12C18 8.6863 20.6862 6 24 6ZM24 9C22.3432 9 21 10.3431 21 12C21 13.6569 22.3432 15 24 15C25.6568 15 27 13.6569 27 12C27 10.3431 25.6568 9 24 9ZM37 8C39.7614 8 42 10.2386 42 13C42 15.7614 39.7614 18 37 18C34.2386 18 32 15.7614 32 13C32 10.2386 34.2386 8 37 8ZM37 11C35.8954 11 35 11.8954 35 13C35 14.1046 35.8954 15 37 15C38.1046 15 39 14.1046 39 13C39 11.8954 38.1046 11 37 11ZM11 8C13.7614 8 16 10.2386 16 13C16 15.7614 13.7614 18 11 18C8.23858 18 6 15.7614 6 13C6 10.2386 8.23858 8 11 8ZM11 11C9.89544 11 9 11.8954 9 13C9 14.1046 9.89544 15 11 15C12.1046 15 13 14.1046 13 13C13 11.8954 12.1046 11 11 11ZM28 30H27C25.3432 30 24 31.3432 24 33V36H29V35.5C29 34.6716 29.6716 34 30.5 34C31.3284 34 32 34.6716 32 35.5V36H38V35.5C38 34.6716 38.6716 34 39.5 34C40.3284 34 41 34.6716 41 35.5V36H46V33C46 31.3432 44.6568 30 43 30H42V28C42 26.067 40.433 24.5 38.5 24.5H31.5C29.567 24.5 28 26.067 28 28V30ZM31 28C31 27.7238 31.2238 27.5 31.5 27.5H38.5C38.7762 27.5 39 27.7238 39 28V30H31V28ZM24 43V39H29V40.5C29 41.3284 29.6716 42 30.5 42C31.3284 42 32 41.3284 32 40.5V39H38V40.5C38 41.3284 38.6716 42 39.5 42C40.3284 42 41 41.3284 41 40.5V39H46V43C46 44.6568 44.6568 46 43 46H27C25.3432 46 24 44.6568 24 43Z" fill="currentColor"/>
    </svg>
 
    <h2 class="text-xl font-semibold mb-3 text-gray-800  text-contrast bg-contrast">Instância responsável.</h2>
    <p class="text-gray-700 text-base flex-1 textContainer  text-contrast bg-contrast">
        Equipe bem estruturada
    </p>
  </div>

 <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col  text-contrast bg-contrast input-contrast card-hover">
   
    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#411F56]">
    <path d="M33.4978 4L42.6054 4.00104L42.806 4.02888L43.0036 4.0841L43.1242 4.1352C43.2826 4.20492 43.431 4.3063 43.5616 4.43672L43.643 4.5248L43.73 4.63756L43.8384 4.8178L43.9158 4.99844L43.954 5.1266L43.9812 5.2546L44 5.443L44.0008 14.5078C44.0008 15.3362 43.3294 16.0078 42.5008 16.0078C41.7416 16.0078 41.114 15.4435 41.0146 14.7113L41.0008 14.5078L41 9.118L28.1214 21.9994C27.5888 22.532 26.7554 22.5804 26.1682 22.1448L26 21.9996L19.9394 16.1785L8.56066 27.5572C7.97488 28.143 7.02512 28.143 6.43934 27.5572C5.9068 27.0246 5.8584 26.1914 6.2941 25.6042L6.43934 25.4358L18.8787 12.9965C19.4112 12.464 20.2446 12.4156 20.8318 12.8513L21 12.9965L27.0606 18.8175L38.876 7H33.4978C32.7384 7 32.1108 6.4357 32.0116 5.70354L31.9978 5.5C31.9978 4.7406 32.5622 4.11302 33.2944 4.0137L33.4978 4ZM7.5 34C8.32842 34 9 34.6716 9 35.5V42.5C9 43.3284 8.32842 44 7.5 44C6.67158 44 6 43.3284 6 42.5V35.5C6 34.6716 6.67158 34 7.5 34ZM19 27.5C19 26.6716 18.3284 26 17.5 26C16.6716 26 16 26.6716 16 27.5V42.5C16 43.3284 16.6716 44 17.5 44C18.3284 44 19 43.3284 19 42.5V27.5ZM27.5 30C28.3284 30 29 30.6716 29 31.5V42.5C29 43.3284 28.3284 44 27.5 44C26.6716 44 26 43.3284 26 42.5V31.5C26 30.6716 26.6716 30 27.5 30ZM39 21.5C39 20.6716 38.3284 20 37.5 20C36.6716 20 36 20.6716 36 21.5V42.5C36 43.3284 36.6716 44 37.5 44C38.3284 44 39 43.3284 39 42.5V21.5Z" fill="currentColor"/>
    </svg>

    <h2 class="text-xl font-semibold mb-3 text-gray-800  text-contrast bg-contrast">Análise de perfil e riscos.</h2>
    <p class="text-gray-700 text-base flex-1 textContainer  text-contrast bg-contrast">
        Soluções pensadas no cliente.
    </p>
  </div>
  </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-10 container-x pb-12  text-contrast bg-contrast">
    <div class="card-hover bg-gray-100 rounded-lg p-8 shadow-md flex flex-col lg:w-[525px] lg:justify-self-end  text-contrast bg-contrast input-contrast">

    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#411F56]">
    <path d="M39.5 8C41.9852 8 44 10.0147 44 12.5V23.5156C43.1012 22.914 42.088 22.47 41 22.223V12.5C41 11.6716 40.3284 11 39.5 11H8.5C7.67158 11 7 11.6716 7 12.5V35.5092C7 36.3376 7.67158 37.0092 8.5 37.0092H32V40.0092H8.5C6.01472 40.0092 4 37.9944 4 35.5092V12.5C4 10.0147 6.01472 8 8.5 8H39.5ZM26.5046 25.9922H31.5208C30.918 26.8908 30.4728 27.904 30.2248 28.9922H26.5046C25.6762 28.9922 25.0046 28.3208 25.0046 27.4922C25.0046 26.7328 25.5688 26.1052 26.301 26.006L26.5046 25.9922ZM19.5 25C20.3284 25 21 25.6716 21 26.5V27.4854L20.9842 27.7026C20.6586 29.9284 18.7953 31.0018 15.9999 31.0018C13.2043 31.0018 11.341 29.9274 11.0157 27.7002L11 27.4836V26.5C11 25.6716 11.6716 25 12.5 25H19.5ZM16 17.0044C17.6568 17.0044 18.9999 18.3475 18.9999 20.0044C18.9999 21.6612 17.6568 23.0042 16 23.0042C14.3432 23.0042 13.0001 21.6612 13.0001 20.0044C13.0001 18.3475 14.3432 17.0044 16 17.0044ZM26.5046 19H35.5C36.3284 19 37 19.6716 37 20.5C37 21.2594 36.4356 21.887 35.7036 21.9864L35.5 22H26.5046C25.6762 22 25.0046 21.3284 25.0046 20.5C25.0046 19.7406 25.5688 19.113 26.301 19.0137L26.5046 19ZM46 31C46 34.866 42.866 38 39 38C35.134 38 32 34.866 32 31C32 27.134 35.134 24 39 24C42.866 24 46 27.134 46 31ZM34 38.4844V44.5718C34 45.8368 35.5296 46.4704 36.424 45.5758L39 43L41.576 45.5758C42.4704 46.4704 44 45.8368 44 44.5718V38.4844C42.57 39.4416 40.8502 40 39 40C37.1498 40 35.43 39.4416 34 38.4844Z" fill="currentColor"/>
    </svg>





    <h2 class="text-xl font-semibold mb-3 text-gray-800  text-contrast bg-contrast">Regras e instrumentos</h2>
    <p class="text-gray-700 text-base flex-1 textContainer  text-contrast bg-contrast">
        Políticas e procedimentos para <br> mitigar os riscos.
  </div>

   <div class="card-hover bg-gray-100 rounded-lg p-8 shadow-md flex flex-col lg:w-[525px]  text-contrast bg-contrast input-contrast">


      <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast text-[#411F56]">
      <path d="M24 32C26.7614 32 29 29.7614 29 27C29 24.2386 26.7614 22 24 22C21.2386 22 19 24.2386 19 27C19 29.7614 21.2386 32 24 32ZM24 16C17.9249 16 13 20.9248 13 27C13 33.0752 17.9249 38 24 38C30.0752 38 35 33.0752 35 27C35 20.9248 30.0752 16 24 16ZM16 27C16 22.5818 19.5817 19 24 19C28.4182 19 32 22.5818 32 27C32 31.4182 28.4182 35 24 35C19.5817 35 16 31.4182 16 27ZM4 7.5C4 5.56702 5.56702 4 7.5 4H40.5C42.433 4 44 5.56702 44 7.5V10.5C44 11.8962 43.1824 13.1015 42 13.6632V26C42 35.9412 33.9412 44 24 44C14.0589 44 6 35.9412 6 26V13.6632C4.8175 13.1015 4 11.8962 4 10.5V7.5ZM9 14V26C9 34.2844 15.7157 41 24 41C32.2844 41 39 34.2844 39 26V14H9ZM7.5 7C7.22386 7 7 7.22386 7 7.5V10.5C7 10.7761 7.22386 11 7.5 11H40.5C40.7762 11 41 10.7761 41 10.5V7.5C41 7.22386 40.7762 7 40.5 7H7.5Z" fill="currentColor"/>
      </svg>


    <h2 class="text-xl font-semibold mb-3 text-gray-800  text-contrast bg-contrast">Monitoramento contínuo</h2>
    <p class="text-gray-700 text-base flex-1 textContainer  text-contrast bg-contrast">
        Análise e avaliação <br> para assegurar resultados valídos
    </p>
  </div>
</div>

</div>

</div>




<div class="grid grid-cols-1 lg:grid-cols-2  text-contrast bg-contrast">
      <div class="bg-[#F2F2F2] text-center  flex flex-col items-center justify-center px-6   text-contrast bg-contrast p-12">
    <h1 class="text-[45px] font-semibold mb-4">Código de conduta e ética</h1>
    <p class="text-gray-700 textContainer container-x text-contrast bg-contrast">
      Para fortalecer a transparência e a equidade entre os nossos colaboradores, fornecedores, clientes e parceiros de negócios, tornamos público o nosso Código de Conduta.
    </p>

    <button onclick="downloadFile()" class="bts-hover button-secundary-contrast flex items-center gap-3 p-3 px-6 rounded border border-[#B3B3B3] cursor-pointer mt-8">

      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-constrast bg-contrast">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13 4L13 12.0858L15.2929 9.79289L16.7071 11.2071L12 15.9142L7.29289 11.2071L8.70711 9.79289L11 12.0858L11 4H13ZM2 19.9L2 11H4L4 19L20 19L20 11H22L22 19.9C22 20.5075 21.5075 21 20.9 21L3.1 21C2.49248 21 2 20.5075 2 19.9Z" fill="currentColor"/>
</svg>

      

      
      
      
      <span>BAIXAR CÓDIGO DE CONDUTA</span>
    </button>
  </div >
    
       <div class="container-x bg-gradient-to-b from-[#411F56] to-[#7D24B4] bg-contrast text-center  text-contrast  flex flex-col items-center justify-center px-6 text-white p-12">
    <h1 class="text-[45px] font-semibold mb-4  text-contrast bg-contrast">Canal de denúncia</h1>
    <p class="textContainer  text-contrast bg-contrast">
        Contamos com um Canal de Denúncia sigiloso e imparcial, hospedado fora dos sistemas da TECSHARE, administrado com total garantia de confidencialidade pela empresa. 
    </p>

    
    <button class="button-contrast flex items-center gap-3 justify-center lg:justify-start p-3 px-6 rounded border bg-[#411F56] cursor-pointer mt-8 w-full lg:w-[350px]">
  
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast bg-contrast">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13 4L13 12.0858L15.2929 9.79289L16.7071 11.2071L12 15.9142L7.29289 11.2071L8.70711 9.79289L11 12.0858L11 4H13ZM2 19.9L2 11H4L4 19L20 19L20 11H22L22 19.9C22 20.5075 21.5075 21 20.9 21L3.1 21C2.49248 21 2 20.5075 2 19.9Z" fill="currentColor"/>
</svg>
<a href="{{ route('canal-denuncia') }}">
  
  <span>ACESSAR CANAL DE DENÚNCIA</span>
</a>
      

</button>

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




    <x-back-to-top/>

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
        const skeleton = document.getElementById('skeleton');
        const content = document.getElementById('content-real');

        skeleton.classList.add('hidden');
        content.classList.remove('hidden');
    });

        window.addEventListener("load", () => {
     document.getElementById('pdfModal').style.display = 'none';

        const skeleton = document.getElementById('skeleton');
        const content = document.getElementById('content-real');

        skeleton.classList.add('hidden');
        content.classList.remove('hidden');
    });




</script>

@endsection