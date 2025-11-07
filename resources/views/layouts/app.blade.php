<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title','TecShare')</title>
</head>
<body>
    
    <x-header/>

    <main class="pt-[120px] font-ibm">
        @yield('content')
    </main>

 <footer class="bg-bgPrimary bg-contrast">
    <div class="container-x">
        
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-4 gap-5 text-white py-12 place-items-center lg:place-items-start">
            <!-- Coluna 1 -->
            <div class="mt-3 mb-3 text-center  md:place-self-start md:justify-self-center lg:justify-self-start">
                <img src="{{ asset('/logo.png') }}" alt="logo" class="h-10 mb-4">
                <ul>
                    <li class="text-lg text-contrast">Registro</li>
                    <li class="text-lg" style="color:#FAC8B8 text-contrast">Rápido</li>
                    <li class="text-lg" style="color:#FAC8B8">Fácil &</li>
                    <li class="text-lg" style="color:#FAC8B8">Seguro</li>
                </ul>
            </div>

            <!-- Coluna 2 -->
            <div class="text-center lg:text-left">
                <h1 class="text-2xl mt-3 mb-3 text-contrast">Mapa do site</h1>
                <ul>
                    <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start"><img src="/arrowToRightFooter.png" alt=""><a href="{{ route('home') }}">Página inicial</a></li>
                    <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start"><img src="/arrowToRightFooter.png" alt=""><a href="{{ route('quem-somos') }}">Quem somos</a></li>
                    <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start"><img src="/arrowToRightFooter.png" alt=""><a href="{{ route('quem-somos') }}#trabalheConosco">Trabalhe conosco</a></li>
                    <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start"><img src="/arrowToRightFooter.png" alt=""><a href="{{ route('safe-register-car') }}">Safe Register Car</a></li>
                    <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start"><img src="/arrowToRightFooter.png" alt=""><a href="{{route('safe-register-car')}}#ondeoperamos">Onde operamos</a></li>
                    <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start"><img src="/arrowToRightFooter.png" alt=""><a href="{{ route('pre-registro') }}">Pré-cadastro</a></li>
                    <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start"><img src="/arrowToRightFooter.png" alt=""><a href="{{ route('compliance') }}">Compliance</a></li>
                    <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start"><img src="/arrowToRightFooter.png" alt=""><a href="{{ route('canal-denuncia') }}">Canal de denúncia</a></li>
                    <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start"><img src="/arrowToRightFooter.png" alt=""><a href="{{ route('solicitacao-titular') }}">Solicitação de titular</a></li>
                    <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start"><img src="/arrowToRightFooter.png" alt=""><a href="{{ route('seguranca') }}">Segurança</a></li>
                    <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start"><img src="/arrowToRightFooter.png" alt=""><a href="{{ 'privacidade' }}">Privacidade</a></li>
                    <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start"><img src="/arrowToRightFooter.png" alt=""><a href="{{ 'qualidade' }}">Qualidade</a></li>
                    <li class="text-sm mt-1 mb-1 flex items-center text-contrast text-md justify-center lg:justify-start"><img src="/arrowToRightFooter.png" alt=""><a href="#faleConosco">Contato</a></li>
                </ul>
            </div>

            <!-- Coluna 3 -->
            <div class="text-center lg:text-left">
                <h1 class="text-2xl mt-3 mb-3 text-contrast">Endereços</h1>

                <h3 class="font-semibold text-contrast">Matriz</h3>
                <p class="text-contrast">
                    Rua Senador Milton Campos, 35, 7º andar<br>
                    Vila da Serra, Nova Lima - MG<br>
                    CEP 34006-050
                </p>

                <h3 class="text-lg mt-4 mb-1 font-bold text-contrast">Filial</h3>
                <p class="text-contrast">
                    Av. Dr Chucri Zaidan, 1240, 16º andar<br>
                    Chácara Santo Antônio, São Paulo - SP<br>
                    CEP 04711-130
                </p>

                <h3 class="text-lg mt-4 mb-1 font-bold text-contrast">Contatos</h3>
                <p class="text-contrast">(31) 3324-6460</p>
                <p class="text-contrast">0800 590 4004</p>
            </div>

            <!-- Coluna 4 -->
    <div class="lg:text-left text-left lg:place-self-start lg:justify-self-end ">
    <h1 class="text-2xl mt-3 mb-3 text-contrast">Certificações</h1>

    <div class="grid grid-cols-2 lg:grid-cols-2 gap-2 lg:gap-4 justify-items-start">
        <img src="{{ asset('/ISO.png') }}" alt="" class="mb-3 p-0">
        <img src="{{ asset('/37301.png') }}" alt="" class="mb-3 p-0">
        <img src="{{ asset('/9001.png') }}" alt="" class="m-0 p-0">
        <img src="{{ asset('/ISO.png') }}" alt="" class="m-0 p-0">
    </div>
</div>
        

        </div>


        <hr class="border-t border-blue-400 w-screen relative left-1/2 right-1/2 -ml-[50vw]">


       


        <!-- Linha final -->
        <div class="grid lg:grid-cols-2 sm:grid-cols-1 text-white  ">
            

            <div class="flex items-center gap-2 justify-center lg:justify-start mt-5 lg:mt-0">
                <p class="text-sm text-contrast">@ 2025 Tecnol. Todos os direitos reservados</p>
            </div>
            
            <div class="flex items-center justify-center lg:justify-end gap-2 m-10">
                <h1 class="text-contrast">Siga-nos :</h1>

                <a href="#" class="hover:text-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
                    </svg>
                </a>    
                    
                <a href="#" class="hover:text-pink-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6">
                        <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm0 2h10c1.66 0 3 1.34 3 3v10c0 1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3zm8 1a1 1 0 110 2 1 1 0 010-2zm-5 2a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6z"/>
                    </svg>
                </a>

                <a href="#" class="hover:text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6">
                        <path d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11 19h-3v-9h3v9zm-1.5-10.29c-.97 0-1.75-.79-1.75-1.76s.78-1.76 1.75-1.76 1.75.79 1.75 1.76-.78 1.76-1.75 1.76zm13.5 10.29h-3v-4.5c0-1.08-.02-2.47-1.5-2.47-1.5 0-1.73 1.17-1.73 2.38v4.59h-3v-9h2.88v1.23h.04c.4-.76 1.37-1.56 2.82-1.56 3.02 0 3.58 1.99 3.58 4.58v5.75z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>


    <script>
        // elementos
        const LogoNavBar = document.getElementById('logo-navbar')
        const MenuElement = document.getElementById('mobile-menu')
        const backbutton = document.getElementById('back-button')
        const hamburguer = document.getElementById('menu-btn')
        const lupamobile = document.getElementById('lupa-mobile')

        // estado inicial
        MenuElement.classList.add('hidden')
        backbutton.classList.add('hidden')

        function OpenMobileMenu() {
            MenuElement.classList.remove('hidden')
            hamburguer.classList.add('hidden')
            backbutton.classList.remove('hidden')
            LogoNavBar.classList.add('hidden')
            lupamobile.classList.add('hidden')
        }

        // função pra voltar
        backbutton.addEventListener('click', () => {
            MenuElement.classList.add('hidden')
            hamburguer.classList.remove('hidden')
            backbutton.classList.add('hidden')
            LogoNavBar.classList.remove('hidden')
            lupamobile.classList.remove('hidden')
        })
    </script>

    <x-vlibras/>
    @stack('scripts')
</body>
</html>
