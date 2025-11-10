@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
/* ===== Reset básico ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

body {
    display: flex;
    justify-content: center;
    min-height: 100vh;
    background-color: #f3f4f6;
    padding: 100px 0;
}

/* Container principal */
.container-email {
    width: 650px;
    min-height: 1396px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    overflow: hidden;
    padding: 10px;
}

/* Banner */
.banner {
    background: #FDFCFC;
    height: 358px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Conteúdo */
.email-content {
    padding: 24px;
    color: #333;
}

.email-content h1 {
    font-size: 32px;
    text-align: center;
    font-weight: 600;
    margin-bottom: 16px;
}

.email-content p {
    margin-bottom: 12px;
    font-size: 18px;
}

.email-content .msg-title {
    font-size: 20px;
    font-weight: 600;
    margin-top: 16px;
}

.email-content .msg-text {
    text-align: justify;
}

/* Botão */
.btn-primary {
    background: #F15A29;
    color: #fff;
    font-weight: 600;
    padding: 12px 32px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: opacity .2s;
}

.btn-primary:hover {
    opacity: .9;
}

/* Centralização do botão */
.btn-wrapper {
    width: 100%;
    display: flex;
    justify-content: center;
    margin: 24px 0 40px 0;
}

/* Link */
.link-acesso {
    text-align: center;
    font-size: 14px;
    margin-bottom: 24px;
}

.link-acesso a {
    color: #F15A29;
    text-decoration: none;
}

.link-acesso a:hover {
    text-decoration: underline;
}

/* Linha divisória */
.divider {
    width: 100%;
    border-bottom: 1px solid #e5e7eb;
}

/* Rodapé */
.footer {
    background: #FDFCFC;
    height: 358px;
    padding: 24px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.footer p {
    color: #B2B2B2;
    text-align: justify;
    margin-bottom: 16px;
    font-size: 14px;
}

.footer .copy {
    text-align: center;
}
</style>


<body>

    <div class="container-email">

        <!-- Banner -->
        <div class="banner">
            <img src="{{ asset('email-atendimento.png') }}" alt="Logo Trabalhe Conosco" style="width:350px; height:350px; object-fit:contain;">
        </div>

        <!-- Conteúdo -->
        <div class="email-content">

            <h1>Atendimento</h1>

            <p style="font-size:25px;">Contato via site.</p>

            <p>Nome: <strong>Nome do contato</strong></p>
            <p>E-mail: <strong>email@dominio.com.br</strong></p>
            <p>Telefone: <strong>(11) 00000-0000</strong></p>

            <p class="msg-title">Mensagem</p>

            <p class="msg-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae facilisis sapien. 
                Maecenas porttitor auctor semper. Integer molestie non nisi et cursus.
            </p>
        </div>

        <!-- Botão -->
        <div class="btn-wrapper">
            <button class="btn-primary" onclick="window.location='https://www.sisteastecnol.com.br'">
                Acessar site
            </button>
        </div>

        <!-- Link de acesso -->
        <p class="link-acesso">
            Link de acesso: 
            <a href="https://www.sisteastecnol.com.br">www.sisteastecnol.com.br</a>
        </p>

        <div class="divider"></div>

        <!-- Rodapé -->
        <div class="footer">
            <p>
                “Esta mensagem e eventuais anexos estão dirigidos EXCLUSIVAMENTE aos destinatários especificados.
                A informação neles contida é CONFIDENCIAL, não estando autorizado seu uso, revelação, distribuição,
                impressão ou cópia. Se você recebeu por ENGANO, pedimos gentilmente que comunique ao remetente e ELIMINE
                a mensagem e os anexos. Em que pese se tratar de e-mail corporativo, o seu conteúdo não necessariamente
                é seguro e/ou reflete a opinião da TECNOL, que não poderá aceitar a responsabilidade por quaisquer 
                perdas e/ou danos causados por esta mensagem ou por seus anexos.”
            </p>

            <p class="copy">
                © Tecnol 2025 - Todos os direitos reservados.
            </p>

            <img src="{{ asset('logo.png') }}" alt="Logo Tecnol" style="width:160px; height:28px; margin-top:32px;">
        </div>

    </div>

</body>



