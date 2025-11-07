<div class="fixed bottom-0 left-0 w-full text-white bg-black/80 backdrop-blur-sm z-50" id="cookie-banner">
    <div class="container-x grid grid-cols-1 md:grid-cols-2 gap-4 p-4">

        <div class="flex items-center p-3">
            <p class="text-sm md:text-base">
                Este site utiliza cookies e dados pessoais, com registro temporário de informações, preferências e histórico de navegação, para fins de aprimoramento de serviços e segurança da informação, de acordo com os nossos
                <a href="#" class="font-bold underline">Termos de Uso e Política de Privacidade.</a>
                Ao optar pelo uso de nossos serviços, o usuário declara estar ciente dessas condições e concorda com a utilização de cookies.
            </p>
        </div>

        <div class="flex flex-col md:flex-row items-center justify-end gap-3">
            <button class="bg-[#F15A29] rounded-md h-[45px] w-full md:w-[120px]" onclick="aceitarCookies()">Aceitar</button>
            <button class="border border-white rounded-md h-[45px] w-full md:w-[120px]" on>Rejeitar</button>
        </div>

    </div>
</div>

<script>
    // Esconde o banner
    function hideCookieBanner() {
        const banner = document.getElementById("cookie-banner");
        if (banner) banner.style.display = "none";
    }

    function aceitarCookies() {
      //  console.log("Aqui o")
        localStorage.setItem("cookieConsent", "accepted");
        hideCookieBanner();
    }

    function rejeitarCookies() {
        localStorage.setItem("cookieConsent", "rejected");
        hideCookieBanner();
    }

    // Quando carregar a página, verifica se já escolheu
    window.onload = function() {
        const consent = localStorage.getItem("cookieConsent");
        if (consent) {
            hideCookieBanner();
        }
    };
</script
