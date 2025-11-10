@extends('layouts.app')


@section('title','404')

@section('content')

<div class="grid grid-cols-1 lg:grid-cols-2   pt-12 pb-12 container-x bg-contrast text-constrast">

    <div>
        <h1 class="text-[#2A687F] text-[60px] py-5 text-center lg:text-start bg-costrast text-contrast"> <strong>Página Não Encontrada</strong></h1>
        <p">A página que você está procurando pode ter sido movida, excluída, ou o link que você usou <br> pode estar incorreto.</p>
        <p>Não se preocupe, estamos aqui para ajudar você a voltar ao caminho certo!</p>
        <h1 class="text-[#F15A29] text-[30px] py-4">O que fazer agora?</h1>

        <p class="my-1"><Strong>Verifique o endereço (URL):</Strong> Se você digitou o endereço, confira se não há erros de digitação.</p>
        <p><Strong>Use a Busca:</Strong> Digite o que você estava procurando na barra de pesquisa abaixo.</p>


           <div class="relative w-full max-w-sm m-4 w-ful text-constrast bg-constrast">
    <input 
        type="text" 
        class="input-contrast text-contrast bg-contrast w-full border border-gray-300 rounded-lg py-2 pl-3 pr-12 focus:outline-none focus:ring-2 focus:ring-gray-400"
        placeholder="Pesquisar..."
    >

    <button class="text contrast bg-contrast absolute right-2 top-1/2 -translate-y-1/2 bg-transparent text-black px-2">
        <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-contrast bg-contrast">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M9.5 17A7.5 7.5 0 109.5 2a7.5 7.5 0 000 15z" />
        </svg>
    </button>
</div> 


        <p><Strong>Volte para a Página Inicial:</Strong> Clique no link abaixo para recomeçar a navegação</p>
        <button class="flex my-4 gap-2" onclick="window.location.href='{{ route('home') }}'" >

            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast bg-contrast">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0006 1.7738L21.4515 8.48085C22.2858 9.07298 21.8669 10.3871 20.8438 10.3871H20.7149V20.9C20.7149 21.5075 20.2224 22 19.6149 22H4.38633C3.77882 22 3.28633 21.5075 3.28633 20.9V10.3871H3.15746C2.13434 10.3871 1.71541 9.07298 2.54978 8.48085L12.0006 1.7738ZM5.28633 8.99124V20H18.7149V8.99124L12.0006 4.22627L5.28633 8.99124ZM14.572 17.1875V19.1875H9.42919V17.1875H14.572Z" fill="currentColor"/>
</svg>



            <p class="">INCIAL</p>
        </button>
        <p><Strong>Acesse as Principais Seções:</Strong> Talvez o que você procura esteja em uma destas áreas.</p>
    
        <div class="flex gap-12 my-6">
        
        <button class="flex items-center" onclick="window.location.href='{{ route('quem-somos') }}'">
        <p class="whitespace-nowrap">QUEM SOMOS</p>
         <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast bg-contrast">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.5859 12L8.29297 17.2929L9.70718 18.7072L16.4143 12L9.70718 5.29294L8.29297 6.70715L13.5859 12Z" fill="currentColor"/>
        </svg>
        </button>

         <button class="flex items-center" onclick="window.location.href='{{ route('safe-register-car') }}'">
        <p class="whitespace-nowrap">SAFE REGISTER CAR</p>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast bg-contrast">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.5859 12L8.29297 17.2929L9.70718 18.7072L16.4143 12L9.70718 5.29294L8.29297 6.70715L13.5859 12Z" fill="currentColor"/>
        </svg>   

        
        </button>
        
        <button class="flex items-center" onclick="window.location.href='{{ route('compliance') }}'" >
        <p>COMPLIANCE</p>
           <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast bg-contrast">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.5859 12L8.29297 17.2929L9.70718 18.7072L16.4143 12L9.70718 5.29294L8.29297 6.70715L13.5859 12Z" fill="currentColor"/>
        </svg>
        
        </button>
        
        <button class="flex items-center" onclick="window.location.href='{{ route('home') }}#faleConosco'">
        <p>CONTATO</p>
           <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast bg-contrast">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.5859 12L8.29297 17.2929L9.70718 18.7072L16.4143 12L9.70718 5.29294L8.29297 6.70715L13.5859 12Z" fill="currentColor"/>
        </svg>
        
        </button>
        

        </div>


      
        
  

        <p>Agradecemos sua compreensão!</p>


    </div>

    <div>
        <img src="{{ asset('/404.png') }}" alt="" >


    </div>


</div>

@endsection