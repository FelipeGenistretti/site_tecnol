@extends('layouts.app')

@section('title','TecShare-Segurança')

@section('content')

{{-- Carregamento- --}}
<div id="skeleton" class="container-x py-10 animate-pulse">
    
    {{-- Título --}}
    <div class="h-10 w-56 bg-gray-300 rounded mb-8"></div>
    
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

    {{-- Botões --}}
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 mt-12">
        <div class="h-[60px] bg-gray-300 rounded"></div>
        <div class="h-[60px] bg-gray-300 rounded"></div>
        <div class="h-[60px] bg-gray-300 rounded"></div>
        <div class="h-[60px] bg-gray-300 rounded"></div>
    </div>
</div>

{{-- Conteúdo real --}}
<div id="content-real" class="hidden">

    <div class="flex items-center py-12 bg-bgSecondary justify-center lg:justify-start">
        <h1 class="text-[38px] text-textPrimary container-x">Segurança</h1>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 container-x py-10">
        <div class="p-4">
            <h1 class="text-[42px] lg:text-start text-center">Gestão de segurança da <br> informação e serviços</h1>
            <p class="py-3 textContainer">A TECNOL, reforçando o nosso compromisso com a Segurança da Informação, assegura através da norma ISO 27001 que seus processos de governança de segurança da informação estão com conformidade com os requisitos da norma e cerifica esse escopo conforme atestado pela<strong>  QMS CERTIFICATION.</strong></p>

            <p class="py-3 textContainer">Assim sendo, a TECNOL definiu sua <strong>Política de Gestão</strong> Integrada com o compromisso de:Oferecer um serviço confiável, com garantia de qualidade e segurança da informação, para a entrega e operação dos serviços contratados, com objetivo de manter, por meios dos requisitos técnicos legais, a segurança e o sigilo dos dados da empresa, dos clientes, parceiros e fornecedores, a confidencialidade, integridade e disponibilidade durante toda a prestação do serviço, por meio de monitoramento constantemente.</p>

            <p class="py-3 textContainer">A <strong>Política de Segurança da Informação</strong> e Serviços da TECNOL, assegura a proteção dos seus ativos, pessoas, dados, informações, sistemas, aplicação e mapeamento de seus principais processos críticos do negócio, de acordo com as estratégias da empresa, além de assegurar a privacidade e proteção de dados pessoais das pessoas com quem se relaciona, efetuando o tratamento de dados em conformidade com a legislação vigente, em especial a <strong> ISO/IEC 27001, a LGPD, a GDPR e o Marco Civil da Internet,</strong> bem como em cumprimento a requisitos contratuais vigentes, por meio de monitoramento constantemente.</p>

            <p class="py-3 textContainer" >Nós, da TECNOL, sempre priorizamos a confidencialidade, a integridade e disponibilidade dos dados de nossos clientes e parceiros comerciais através dos melhores requisitos técnicos e legais em todo o nosso atendimento.</p>

            <p class="py-3 textContainer">Assim, reforçamos nosso compromisso integral com a segurança da informação interna e de todos os nossos clientes.</p>
        </div>

        <div>
            <img src="{{ asset('/seguranca-1.png')  }}" alt="" class="mt-12">
        </div>
    </div>

    <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-4 container-x py-12 gap-4">
        <div>
            <button class="flex items-center justify-center lg:justify-start gap-3 w-full p-3 px-6 rounded border border-[#B3B3B3] cursor-pointer h-[60px]">
                <img src="{{ asset('/download-black.png') }}" alt="Ícone de download" class="w-5 h-5">
                <span class="text-[13px] text-center lg:text-left">POLÍTICA DO SISTEMA DE GESTÃO INTEGRADO - SGI</span>
            </button>
        </div>

        <div>
            <button class="flex items-center justify-center lg:justify-start gap-3 w-full p-3 px-6 rounded border border-[#B3B3B3] cursor-pointer h-[60px]">
                <img src="{{ asset('/download-black.png') }}" alt="Ícone de download" class="w-5 h-5">
                <span class="text-[13px] text-center lg:text-left">POLÍTICA DE SEGURANÇA E INFORMAÇÕES - POSIC</span>
            </button>
        </div>

        <div>
            <button class="flex items-center justify-center lg:justify-start gap-3 w-full p-3 px-6 rounded border border-[#B3B3B3] cursor-pointer h-[60px]">
                <img src="{{ asset('/download-black.png') }}" alt="Ícone de download" class="w-5 h-5">
                <span class="text-[13px] text-center lg:text-left">TERMOS DE USO E POLÍTICA DE PRIVACIDADE</span>
            </button>
        </div>

        <div>
            <button class="flex items-center justify-center lg:justify-start gap-3  w-full  p-3 px-6 rounded border border-[#B3B3B3] cursor-pointer h-[60px] lg:w-[220px]">
                <img src="{{ asset('/download-black.png') }}" alt="Ícone de download" class="w-5 h-5">
                <span class="text-sm text-center lg:text-left">QMS CERTIFICATION</span>
            </button>
        </div>
    </div>

</div>

<x-back-to-top/>

{{-- Script pra trocar skeleton pelo conteúdo real --}}
<script>
    window.addEventListener("load", () => {
        const skeleton = document.getElementById('skeleton');
        const content = document.getElementById('content-real');

        skeleton.classList.add('hidden');
        content.classList.remove('hidden');
    });
</script>


@endsection
