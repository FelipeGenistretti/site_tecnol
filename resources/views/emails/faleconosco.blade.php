<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
/* Responsividade simples */
@media only screen and (max-width: 600px) {
  .container { width: 100% !important; padding: 0 16px !important; }
  .hero-img { width: 100% !important; height: auto !important; }
  .button { width: 100% !important; display: block !important; }
}
</style>
</head>

<body style="margin:0; padding:0; background:#f5f5f5; font-family: Arial, sans-serif;">

<!-- Wrapper -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="center" style="padding: 20px 0;">

<!-- Container -->
<table class="container" width="600" border="0" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:6px; overflow:hidden;">

<!-- Top Image -->
<tr>
<td align="center">
  <img src="{{ asset('/imgEmailFaleConosco.png') }}" alt="Banner" class="hero-img" style="display:block; width:600px; height:auto;">
</td>
</tr>

<!-- Title -->
<tr>
<td align="center" style="padding: 30px 30px 10px; font-size:22px; font-weight:bold; color:#111;">
  Atendimento
</td>
</tr>

<!-- Intro -->
<tr>
<td style="padding: 0 30px 20px; font-size:14px; color:#444; line-height:1.6;">
  Contato enviado via site.
</td>
</tr>

<!-- Dados -->
<tr>
<td style="padding: 0 30px 25px; font-size:14px; color:#444; line-height:1.8;">
  <strong>Nome:</strong> {{ $data["nome"] }}<br>
  <strong>E-mail:</strong> {{ $data["email"] }}<br>
  <strong>Telefone:</strong> {{ $data["telefone"] }}<br>
</td>
</tr>

<!-- Mensagem -->
<tr>
<td style="padding: 0 30px 30px; font-size:14px; color:#444; line-height:1.6;">
  <strong>Mensagem:</strong><br>
  {{ $data["mensagem"] }}
</td>
</tr>

<!-- Botão -->
<tr>
<td align="center" style="padding: 10px 30px 20px;">
  <a href="https://www.sistemastecnol.com.br" 
     class="button"
     style="background:#F5633A; color:#fff; padding:14px 32px; border-radius:5px; 
            font-size:14px; font-weight:bold; text-decoration:none; display:inline-block;">
    ACESSAR SITE
  </a>
</td>
</tr>

<!-- Link de acesso -->
<tr>
<td align="center" style="font-size:12px; color:#777; padding-bottom:30px;">
  Link de acesso: <a href="https://www.sistemastecnol.com.br" style="color:#F5633A; text-decoration:none;">
  www.sistemastecnol.com.br</a>
</td>
</tr>

<!-- Rodapé -->
<tr>
<td align="center" style="padding: 30px; background:#fafafa; font-size:11px; color:#888; line-height:1.5;">
  “Esta mensagem e eventuais anexos estão dirigidos EXCLUSIVAMENTE aos destinatários especificados. A informação neles contida é CONFIDENCIAL, não estando autorizado seu uso, revelação, distribuição, impressão ou cópia. Se você recebeu por ENGANO, pedimos gentilmente que comunique ao remetente e ELIMINE a mensagem e os anexos. Em que pese se tratar de e-mail corporativo, o seu conteúdo não necessariamente é seguro e/ou reflete a opinião da TECNOL, que não poderá aceitar a responsabilidade por quaisquer perdas e/ou danos causados por esta mensagem ou por seus anexos”
  <br><br>
  © TecnoIt 2025 — Todos os direitos reservados.
  <br>
  <img src="{{ asset('/logo.png') }}" alt="Tecshare" style="margin-top:10px;">
</td>
</tr>

</table>
<!-- Container End -->

</td>
</tr>
</table>
<!-- Wrapper End -->

</body>
</html>
