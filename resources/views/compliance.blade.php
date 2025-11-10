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


<div class="bg-contrast text-contrast">             



<div class="grid grid-cols-1 lg:grid-cols-3 gap-10 container-x mb-12  text-contrast bg-contrast">


      <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col  text-contrast bg-contrast input-contrast">

  <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast bg-contrast">
<path d="M22.0153 5.17025C21.19 3.49793 18.8053 3.49795 17.98 5.17025L14.0501 13.1331L5.26257 14.41C3.41707 14.6782 2.68017 16.9462 4.01559 18.2478L10.3743 24.446L8.87322 33.1982C8.55797 35.0362 10.4872 36.4378 12.1379 35.57L19.9977 31.4378L27.8575 35.57C29.5082 36.4378 31.4373 35.0362 31.1222 33.1982L29.621 24.446L35.9798 18.2478C37.3152 16.9462 36.5783 14.6782 34.7328 14.41L25.9453 13.1331L22.0153 5.17025ZM16.2338 14.3574L19.9977 6.7309L23.7617 14.3574C24.0893 15.0215 24.7228 15.4817 25.4557 15.5882L33.872 16.8112L27.7818 22.7477C27.2517 23.2645 27.0097 24.0092 27.1348 24.7392L28.5725 33.1215L21.0447 29.1638C20.3892 28.8192 19.6062 28.8192 18.9507 29.1638L11.4229 33.1215L12.8606 24.7392C12.9857 24.0092 12.7438 23.2645 12.2135 22.7477L6.12336 16.8112L14.5397 15.5882C15.2725 15.4817 15.9061 15.0215 16.2338 14.3574ZM1.94096 6.3017C1.50969 6.84077 1.59709 7.62738 2.13617 8.05865L6.30284 11.392C6.84191 11.8233 7.62852 11.7359 8.05979 11.1968C8.49106 10.6577 8.40366 9.87108 7.86457 9.43982L3.69791 6.10648C3.15882 5.67522 2.37221 5.76262 1.94096 6.3017ZM38.0598 30.3635C38.4912 29.8243 38.4037 29.0377 37.8647 28.6065L33.698 25.2732C33.1588 24.8418 32.3723 24.9293 31.941 25.4683C31.5097 26.0075 31.5972 26.794 32.1362 27.2253L36.3028 30.5587C36.842 30.9898 37.6285 30.9025 38.0598 30.3635ZM2.13617 28.6065C1.59709 29.0377 1.50969 29.8243 1.94096 30.3635C2.37221 30.9025 3.15882 30.9898 3.69791 30.5587L7.86457 27.2253C8.40366 26.794 8.49106 26.0075 8.05979 25.4683C7.62852 24.9293 6.84191 24.8418 6.30284 25.2732L2.13617 28.6065ZM38.0598 6.3017C38.4912 6.84077 38.4037 7.62738 37.8647 8.05865L33.698 11.392C33.1588 11.8233 32.3723 11.7359 31.941 11.1968C31.5097 10.6577 31.5972 9.87108 32.1362 9.43982L36.3028 6.10648C36.842 5.67522 37.6285 5.76262 38.0598 6.3017Z" fill="currentColor "/>
</svg>



    <h2 class="text-xl font-semibold mb-3 text-gray-800  text-contrast bg-contrast">Compromisso de alta direção.</h2>
    <p class="text-gray-700 text-base flex-1 textContainer  text-contrast bg-contrast">
        O compromisso de agregar valor.
    </p>
  </div>

    <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col  text-contrast bg-contrast input-contrast">

      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast bg-constrast">
<path d="M12.5 15C15.2614 15 17.5 12.7614 17.5 10C17.5 7.23858 15.2614 5 12.5 5C9.73858 5 7.5 7.23858 7.5 10C7.5 12.7614 9.73858 15 12.5 15ZM12.5 12.5C11.1193 12.5 10 11.3807 10 10C10 8.61928 11.1193 7.5 12.5 7.5C13.8807 7.5 15 8.61928 15 10C15 11.3807 13.8807 12.5 12.5 12.5ZM5 19.5833C5 17.9725 6.30583 16.6667 7.91667 16.6667H17.0833C18.6942 16.6667 20 17.9725 20 19.5833V27.5C20 31.6422 16.6421 35 12.5 35C8.35787 35 5 31.6422 5 27.5V19.5833ZM7.91667 19.1667C7.68655 19.1667 7.5 19.3532 7.5 19.5833V27.5C7.5 30.2615 9.73858 32.5 12.5 32.5C15.2614 32.5 17.5 30.2615 17.5 27.5V19.5833C17.5 19.3532 17.3135 19.1667 17.0833 19.1667H7.91667ZM17.5455 14.3573C18.2705 14.7665 19.1078 15 19.9998 15C22.7612 15 24.9998 12.7614 24.9998 10C24.9998 7.23858 22.7612 5 19.9998 5C19.1078 5 18.2705 5.23352 17.5455 5.64273C18.0898 6.27243 18.5182 7.00508 18.7975 7.80753C19.1542 7.6115 19.564 7.5 19.9998 7.5C21.3805 7.5 22.4998 8.61928 22.4998 10C22.4998 11.3807 21.3805 12.5 19.9998 12.5C19.564 12.5 19.1542 12.3885 18.7975 12.1925C18.5182 12.9949 18.0898 13.7276 17.5455 14.3573ZM18.1003 34.7573C18.707 34.9157 19.3435 35 19.9998 35C24.1418 35 27.4998 31.6422 27.4998 27.5V19.5833C27.4998 17.9725 26.194 16.6667 24.5832 16.6667H20.6188C21.1903 17.3587 21.5625 18.2213 21.6478 19.1667H24.5832C24.8132 19.1667 24.9998 19.3532 24.9998 19.5833V27.5C24.9998 30.199 22.8613 32.3985 20.1862 32.4965C19.6222 33.3625 18.9158 34.1272 18.1003 34.7573ZM25.0455 14.3573C25.7705 14.7665 26.6078 15 27.4998 15C30.2612 15 32.4998 12.7614 32.4998 10C32.4998 7.23858 30.2612 5 27.4998 5C26.6078 5 25.7705 5.23352 25.0455 5.64273C25.5898 6.27243 26.0182 7.00508 26.2975 7.80753C26.6542 7.6115 27.064 7.5 27.4998 7.5C28.8805 7.5 29.9998 8.61928 29.9998 10C29.9998 11.3807 28.8805 12.5 27.4998 12.5C27.064 12.5 26.6542 12.3885 26.2975 12.1925C26.0182 12.9949 25.5898 13.7276 25.0455 14.3573ZM25.6003 34.7573C26.207 34.9157 26.8435 35 27.4998 35C31.6418 35 34.9998 31.6422 34.9998 27.5V19.5833C34.9998 17.9725 33.694 16.6667 32.0832 16.6667H28.1188C28.6903 17.3587 29.0625 18.2213 29.1478 19.1667H32.0832C32.3132 19.1667 32.4998 19.3532 32.4998 19.5833V27.5C32.4998 30.199 30.3613 32.3985 27.6862 32.4965C27.1222 33.3625 26.4158 34.1272 25.6003 34.7573Z" fill="currentColor"/>
</svg>




 
    <h2 class="text-xl font-semibold mb-3 text-gray-800  text-contrast bg-contrast">Instância responsável.</h2>
    <p class="text-gray-700 text-base flex-1 textContainer  text-contrast bg-contrast">
        Equipe bem estruturada
    </p>
  </div>

 <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col  text-contrast bg-contrast input-contrast">
   
  <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-constrast bg-contrast">
<path d="M33.7497 3.3317C35.3605 3.3317 36.6663 4.63755 36.6663 6.24837V11.3195C36.6663 13.0265 35.7178 14.592 34.2048 15.3822L23.7352 20.8495C26.4618 22.219 28.333 25.0413 28.333 28.3007C28.333 32.903 24.602 36.634 19.9997 36.634C15.3973 36.634 11.6663 32.903 11.6663 28.3007C11.6663 25.0413 13.5375 22.219 16.2643 20.8495L5.79456 15.3822C4.28156 14.592 3.33301 13.0265 3.33301 11.3195V6.24837C3.33301 4.63755 4.63884 3.3317 6.24967 3.3317H33.7497ZM19.9997 22.4673C16.778 22.4673 14.1663 25.079 14.1663 28.3007C14.1663 31.5223 16.778 34.134 19.9997 34.134C23.2213 34.134 25.833 31.5223 25.833 28.3007C25.833 25.079 23.2213 22.4673 19.9997 22.4673ZM25.833 5.83003H14.1663V16.9333L19.8068 19.8798C19.9277 19.943 20.0717 19.943 20.1925 19.8798L25.833 16.9317V5.83003ZM11.6663 5.83003L6.24967 5.8317C6.01956 5.8317 5.83301 6.01825 5.83301 6.24837V11.3195C5.83301 12.0954 6.26416 12.807 6.95189 13.1662L11.6663 15.6267V5.83003ZM33.7497 5.8317L28.333 5.83003V15.6267L33.0475 13.1662C33.7352 12.807 34.1663 12.0954 34.1663 11.3195V6.24837C34.1663 6.01825 33.9798 5.8317 33.7497 5.8317Z" fill="currentColor"/>
</svg>



    <h2 class="text-xl font-semibold mb-3 text-gray-800  text-contrast bg-contrast">Análise de perfil e risco.</h2>
    <p class="text-gray-700 text-base flex-1 textContainer  text-contrast bg-contrast">
        Soluções pensadas no cliente.
    </p>
  </div>
  </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-10 container-x pb-12  text-contrast bg-contrast">
    <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col lg:w-[525px] lg:justify-self-end  text-contrast bg-contrast input-contrast">

      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast bg-contrast">
<path d="M20.381 9.4039L21.902 12.4917L25.3085 12.9839C25.6573 13.0343 25.7968 13.463 25.5443 13.709L23.0805 16.1098L23.6622 19.5022C23.7217 19.8495 23.357 20.1143 23.0452 19.95L19.9998 18.346L16.9543 19.95C16.6424 20.1143 16.2776 19.8493 16.3374 19.5018L16.922 16.1098L14.4553 13.7092C14.2026 13.4633 14.342 13.0343 14.691 12.9839L18.0975 12.4917L19.6185 9.4039C19.7743 9.08758 20.2253 9.08758 20.381 9.4039ZM31.6663 15C31.6663 8.55668 26.443 3.33333 19.9997 3.33333C13.5564 3.33333 8.33301 8.55668 8.33301 15C8.33301 18.1783 9.60394 21.0598 11.6653 23.1638L11.6677 35.417L11.6792 35.5912C11.8009 36.4955 12.858 36.9878 13.6374 36.439L19.9982 31.9595L26.3622 36.4392L26.5113 36.53C27.3207 36.951 28.3317 36.3702 28.3317 35.417L28.334 23.1638C30.3953 21.0598 31.6663 18.1783 31.6663 15ZM25.832 25.1065L25.8317 33.0085L20.7173 29.4087L20.5493 29.3088C20.144 29.1095 19.6558 29.1428 19.2782 29.4088L14.1677 33.0078L14.1673 25.1065C15.8831 26.0987 17.875 26.6667 19.9997 26.6667C22.1243 26.6667 24.1162 26.0987 25.832 25.1065ZM10.833 15C10.833 9.93738 14.9371 5.83333 19.9997 5.83333C25.0623 5.83333 29.1663 9.93738 29.1663 15C29.1663 20.0627 25.0623 24.1667 19.9997 24.1667C14.9371 24.1667 10.833 20.0627 10.833 15Z" fill="currentColor"/>
</svg>




    <h2 class="text-xl font-semibold mb-3 text-gray-800  text-contrast bg-contrast">Regras e instrumentos</h2>
    <p class="text-gray-700 text-base flex-1 textContainer  text-contrast bg-contrast">
        Políticas e procedimentos para <br> mitigar os riscos.
  </div>

   <div class="bg-gray-100 rounded-lg p-8 shadow-md flex flex-col lg:w-[525px]  text-contrast bg-contrast input-contrast">


    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast bg-contrast">
<path d="M16.7492 25.7007L27.1772 11.5741C27.5223 11.1064 28.1608 10.9674 28.6693 11.2492C29.1268 11.5029 29.3513 12.0265 29.236 12.5229L29.1847 12.6869L22.7347 29.0187C22.0347 30.791 20.0303 31.6603 18.258 30.9603C18.1188 30.9053 17.9835 30.8415 17.8527 30.769C16.1856 29.8448 15.5832 27.7443 16.5073 26.0772L16.6221 25.885L16.7492 25.7007ZM23.0838 21.3288L18.7605 27.1853L18.6938 27.2892C18.4392 27.7487 18.6052 28.3277 19.0647 28.5823L19.1763 28.6352C19.6157 28.8087 20.1068 28.632 20.3412 28.239L20.4095 28.1003L23.0838 21.3288ZM20.1678 18.1188L18.1235 20.8857C17.6167 21.0515 17.1253 21.2938 16.6658 21.6155C15.2328 22.619 14.3792 24.2105 14.306 25.9262C14.2766 26.6158 13.6937 27.1512 13.0039 27.1218C12.3142 27.0923 11.7789 26.5093 11.8083 25.8197C11.9142 23.3347 13.1546 21.0222 15.2319 19.5677C16.733 18.5167 18.4682 18.0495 20.1678 18.1188ZM27.113 22.7047C27.5783 23.6813 27.839 24.7368 27.884 25.815C27.9128 26.5047 27.377 27.0872 26.6873 27.116C26.2327 27.135 25.8245 26.9087 25.591 26.5547L27.113 22.7047ZM23.3898 13.7556L21.7757 15.9402C19.1195 15.4388 16.2713 15.9671 13.8822 17.64C11.9021 19.0265 10.502 21.015 9.85109 23.2903C9.66119 23.954 8.96921 24.3382 8.30547 24.1482C7.64176 23.9583 7.25764 23.2663 7.44752 22.6027C8.25476 19.7812 9.99419 17.3105 12.4483 15.5921C15.7601 13.2732 19.7828 12.7272 23.3898 13.7556ZM29.2392 17.3188C29.6585 17.7632 30.0503 18.2442 30.4112 18.7595C31.2345 19.9353 31.848 21.2213 32.2392 22.574C32.431 23.2372 32.0488 23.9303 31.3857 24.1222C30.7225 24.3138 30.0295 23.9318 29.8377 23.2687C29.5227 22.1793 29.0283 21.1433 28.3633 20.1933L28.1945 19.9638L29.2392 17.3188ZM26.6353 9.75374L26.4887 9.84383C26.2847 9.98043 26.0958 10.1445 25.928 10.3346L25.7673 10.5335L24.8658 11.755C20.3967 10.2016 15.2705 10.7433 11.0986 13.6645C8.59416 15.4181 6.71844 17.8303 5.63514 20.6175C5.38504 21.261 4.66067 21.5798 4.01721 21.3297C3.37376 21.0797 3.05487 20.3552 3.30497 19.7118C4.56609 16.4672 6.75189 13.6562 9.66464 11.6167C14.8178 8.00836 21.2218 7.51914 26.6353 9.75374ZM31.0167 12.3568C32.2748 13.3757 33.4125 14.5845 34.3867 15.9758C35.2052 17.1448 35.8735 18.3933 36.3848 19.7C36.6363 20.3428 36.3192 21.068 35.6762 21.3195C35.0333 21.5712 34.3082 21.2538 34.0567 20.611C33.6175 19.4888 33.0433 18.4158 32.3388 17.4098C31.696 16.4917 30.9703 15.6662 30.179 14.9361L30.8143 13.3305C30.9402 13.0118 31.006 12.6828 31.0167 12.3568Z" fill="currentColor"/>
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
      <div class="bg-[#F2F2F2] text-center flex flex-col items-center justify-center px-6 p-10  text-contrast bg-contrast">
    <h1 class="text-[45px] font-semibold mb-4">Código de conduta e ética</h1>
    <p class="text-gray-700 textContainer  text-contrast bg-contrast">
      Para fortalecer a transparência e a equidade entre os nossos colaboradores, fornecedores, clientes e parceiros de negócios, tornamos público o nosso Código de Conduta.
    </p>

    <button class="button-secundary-contrast flex items-center gap-3 p-3 px-6 rounded border border-[#B3B3B3] cursor-pointer mt-8">

      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-constrast bg-contrast">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13 4L13 12.0858L15.2929 9.79289L16.7071 11.2071L12 15.9142L7.29289 11.2071L8.70711 9.79289L11 12.0858L11 4H13ZM2 19.9L2 11H4L4 19L20 19L20 11H22L22 19.9C22 20.5075 21.5075 21 20.9 21L3.1 21C2.49248 21 2 20.5075 2 19.9Z" fill="currentColor"/>
</svg>

      

      
      
      
      <span>BAIXE NOSSO CÓDIGO DE CONDUTA</span>
    </button>
  </div>
    
       <div class="bg-gradient-to-b from-[#004A65] to-[#006C94] bg-contrast text-center  text-contrast  flex flex-col items-center justify-center px-6 text-white p-10">
    <h1 class="text-[45px] font-semibold mb-4  text-contrast bg-contrast">Canal de denúncia</h1>
    <p class="textContainer  text-contrast bg-contrast">
        Contamos com um Canal de Denúncia sigiloso e imparcial, hospedado fora dos sistemas da TECNOL, administrado com total garantia de confidencialidade.
    </p>

    
    <button class="button-contrast flex items-center gap-3 justify-center lg:justify-start p-3 px-6 rounded border bg-[#F15A29] cursor-pointer mt-8 w-full lg:w-[350px]">
  
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast bg-contrast">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13 4L13 12.0858L15.2929 9.79289L16.7071 11.2071L12 15.9142L7.29289 11.2071L8.70711 9.79289L11 12.0858L11 4H13ZM2 19.9L2 11H4L4 19L20 19L20 11H22L22 19.9C22 20.5075 21.5075 21 20.9 21L3.1 21C2.49248 21 2 20.5075 2 19.9Z" fill="currentColor"/>
</svg>

      

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