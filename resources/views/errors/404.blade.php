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


<div id="searchContainer404" class="relative w-full max-w-sm m-4">
  <input
    type="text"
    id="searchInput404"
    placeholder="Pesquisar..."
    class="w-full border border-gray-300 rounded-lg py-2 pl-3 pr-10 text-sm focus:outline-none focus:ring-2 focus:ring-[#F15A29] text-contrast bg-contrast"
  />
  <button
    type="button"
    class="absolute right-2 top-1/2 -translate-y-1/2 text-gray-600 hover:text-[#F15A29]"
  >
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M9.5 17A7.5 7.5 0 109.5 2a7.5 7.5 0 000 15z" />
    </svg>
  </button>

  <!-- dropdown -->
  <div
    id="searchResults404"
    class="absolute top-full left-0 w-full bg-white border border-gray-200 rounded-md mt-1 hidden z-50 shadow-md max-h-60 overflow-y-auto"
  ></div>
</div>
 
  <div
    id="searchResults404"
    class="absolute top-full left-0 w-full bg-white border border-gray-200 rounded-md mt-1 hidden z-50 shadow-md max-h-60 overflow-y-auto"
  ></div>
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



<script>
document.addEventListener('DOMContentLoaded', () => {
  const rotas = {
    'Início': '/',
    'Quem somos': '/quem-somos',
    'Safe Data Analytics - SDA': '/safe-register-car',
    'Tecnohub': '/tecnohub',
    'Serviços': '/veiculos',
    'Compliance': '/compliance',
    'Canal de denúncia': '/canal-denuncia',
    'Solicitação do titular': '/solicitacao-titular',
    'Segurança': '/seguranca',
    'Contato': '/fale-conosco',
    'Trabalhe conosco': '/trabalhe-conosco'
  };

  const input = document.getElementById('searchInput404');
  const results = document.getElementById('searchResults404');
  const container = document.getElementById('searchContainer404');

  input.addEventListener('input', (e) => {
    const valor = e.target.value.toLowerCase().trim();
    results.innerHTML = '';

    if (!valor) {
      results.classList.add('hidden');
      return;
    }

    const filtrados = Object.keys(rotas).filter(item =>
      item.toLowerCase().includes(valor)
    );

    if (filtrados.length > 0) {
      filtrados.forEach(item => {
        const link = document.createElement('a');
        link.href = rotas[item];
        link.textContent = item;
        link.className = 'block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer';
        results.appendChild(link);
      });
      results.classList.remove('hidden');
    } else {
      results.innerHTML = '<div class="px-3 py-2 text-sm text-gray-500">Nenhum resultado encontrado</div>';
      results.classList.remove('hidden');
    }
  });

  document.addEventListener('click', (e) => {
    if (!container.contains(e.target)) {
      results.classList.add('hidden');
    }
  });
});
</script>