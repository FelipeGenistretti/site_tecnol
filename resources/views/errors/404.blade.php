@extends('layouts.app')


@section('title','404')

@section('content')

<div class="grid grid-cols-1 lg:grid-cols-2 mt-12 mb-12 pt-12 pb-12 container-x">

    <div>
        <h1 class="text-[#2A687F] text-[60px] py-5 text-center lg:text-start"> <strong>Página Não Encontrada</strong></h1>
        <p">A página que você está procurando pode ter sido movida, excluída, ou o link que você usou <br> pode estar incorreto.</p>
        <p>Não se preocupe, estamos aqui para ajudar você a voltar ao caminho certo!</p>
        <h1 class="text-[#F15A29] text-[30px] py-4">O que fazer agora?</h1>

        <p class="my-1"><Strong>Verifique o endereço (URL):</Strong> Se você digitou o endereço, confira se não há erros de digitação.</p>
        <p><Strong>Use a Busca:</Strong> Digite o que você estava procurando na barra de pesquisa abaixo.</p>
        <input type="text" name="" id="">
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