@extends('layouts.app')


@section('title','404')

@section('content')

<div class="grid grid-cols-1 lg:grid-cols-2 mt-12 mb-12 pt-12 pb-12 container-x bg-contrast text-constrast">

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
        class="text-contrast bg-contrast w-full border border-gray-300 rounded-lg py-2 pl-3 pr-12 focus:outline-none focus:ring-2 focus:ring-gray-400"
        placeholder="Pesquisar..."
    >

    <button class="text contrast bg-contrast absolute right-2 top-1/2 -translate-y-1/2 bg-transparent text-black px-2">
        <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-contrast bg-contrast">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M9.5 17A7.5 7.5 0 109.5 2a7.5 7.5 0 000 15z" />
        </svg>
    </button>
</div> 


        <p><Strong>Volte para a Página Inicial:</Strong> Clique no link abaixo para recomeçar a navegação</p>
        <button class="flex my-4 gap-2" >
            <img src="{{ asset('./home-icon.png') }}" alt="">
            <p class="">INCIAL</p>
        </button>
        <p><Strong>Acesse as Principais Seções:</Strong> Talvez o que você procura esteja em uma destas áreas.</p>
    
        <div class="flex gap-12 my-6">
        
        <button class="flex">
        <p>QUEM SOMOS</p>
        <img src="{{ asset('./next-page.png') }}" alt="">
        </button>

         <button class="flex">
        <p>SAFE REGISTER CAR</p>
        <img src="{{ asset('./next-page.png') }}" alt="">
        </button>
        
        <button class="flex">
        <p>COMPLIANCE</p>
        <img src="{{ asset('./next-page.png') }}" alt="">
        </button>
        
        <button class="flex">
        <p>CONTATO</p>
        <img src="{{ asset('./next-page.png') }}" alt="">
        </button>
        

        </div>


      
        
  

        <p>Agradecemos sua compreensão!</p>


    </div>

    <div>
        <img src="{{ asset('/404.png') }}" alt="" >


    </div>


</div>

@endsection