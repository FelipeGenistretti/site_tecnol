@vite(['resources/css/app.css', 'resources/js/app.js'])

<body class="container-x flex justify-center min-h-screen bg-gray-100 py-10">

    <div class="w-[650px] min-h-[1396px] bg-white shadow-md rounded-md overflow-hidden ">

        <!-- Banner -->
        <div class="bg-[#FDFCFC] h-[358px] flex items-center justify-center">
            <img src="{{ asset('email-trabalheconsco.png') }}" alt="Logo Trabalhe Conosco" class="w-[350px] h-[350px] object-contain">
        </div>

        <!-- Conteúdo -->
        <div class="p-6 text-[#333] space-y-3">
            <h1 class="text-[32px] text-center font-semibold">Trabalhe Conosco</h1>
            <br>
            <p class="text-[25px]">Contato via site.</p>
            <br>

            <p>Nome: <strong>{{ $data['nome'] }}</strong></p>
            <p>E-mail: <strong>{{ $data['email'] }}</strong></p>
            <p>Telefone: <strong>{{ $data['telefone'] }}</strong></p>

            <h2 class="font-semibold text-xl mt-4">Mensagem</h2>

            <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae facilisis sapien. 
                Maecenas porttitor auctor semper. Integer molestie non nisi et cursus. 
            </p>
        </div>

        <!-- Anexo -->
        <div class="mt-2 flex justify-center">
            <button class="bg-[#F2F2F2] font-medium px-6 py-4 rounded-md transition flex items-center gap-3 w-[90%] text-left">
                <img src="{{ asset('doc-icon.png') }}" alt="" class="w-6 h-6">

                <div class="flex flex-col text-sm gap-1">
                    <span>Meu_Curriculo_2025.pdf</span>
                    <span class="text-[#666] text-xs">200KB</span>
                </div>
            </button>
        </div>

        <div class="w-full flex justify-center mt-6 mb-10">
            <button class="bg-bgButtonPrimary text-white font-semibold px-8 py-3 rounded-md hover:opacity-90 transition">
                Acessar site
            </button>
        </div>

        <p class="text-center text-sm mb-6">Link de acesso: <a href="" class="text-[#F15A29]">www.sisteastecnol.com.br</a></p>

        
        <div class="border-b w-full"></div>

        <!-- Rodapé -->
        <div class="bg-[#FDFCFC] h-[358px]  p-6 flex flex-col items-center justify-center">
            <p class="text-[#B2B2B2] text-justify">
                “Esta mensagem e eventuais anexos estão dirigidos EXCLUSIVAMENTE aos destinatários especificados. A informação neles contida é CONFIDENCIAL, não estando autorizado seu uso, revelação, distribuição, impressão ou cópia. Se você recebeu por ENGANO, pedimos gentilmente que comunique ao remetente e ELIMINE a mensagem e os anexos. Em que pese se tratar de e-mail corporativo, o seu conteúdo não necessariamente é seguro e/ou reflete a opinião da TECNOL, que não poderá aceitar a responsabilidade por quaisquer perdas e/ou danos causados por esta mensagem ou por seus anexos.”
            </p>

            <p class="text-[#B2B2B2] text-center m-4">
                © Tecnol 2025 - Todos os direitos reservados.
            </p>

            <img src="{{ asset('logo.png') }}" alt="" class="w-[160px] h-[28px] mt-8">
        </div>

    </div>
</body>

