<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
/* Responsividade básica para mobile */
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
<td align="center" style="padding:0;">
  <img src="https://via.placeholder.com/600x250" alt="Banner" class="hero-img" style="display:block; width:600px; height:auto;">
</td>
</tr>

<!-- Title -->
<tr>
<td align="center" style="padding: 30px 30px 10px; font-size:22px; font-weight:bold; color:#111;">
  Trabalhe conosco
</td>
</tr>

<!-- Intro Text -->
<tr>
<td style="padding: 0 30px 25px; color:#444; font-size:14px; line-height:1.6;">
  Contato enviado via site.
</td>
</tr>

<!-- Dados -->
<tr>
<td style="padding: 0 30px 25px; color:#444; font-size:14px; line-height:1.8;">
  <strong>Nome:</strong> {{ $nome }}<br>
  <strong>E-mail:</strong> {{ $email }}<br>
  <strong>Telefone:</strong> {{ $telefone }}<br>
  <strong>Área de atuação:</strong> {{ $atuacao }}<br>
</td>
</tr>

<!-- Mensagem -->
<tr>
<td style="padding: 0 30px 20px; color:#444; font-size:14px; line-height:1.6;">
  <strong>Mensagem:</strong><br>
  {{ $mensagem }}
</td>
</tr>

<!-- Anexo -->
@if(isset($arquivo) && $arquivo)
<tr>
<td style="padding: 0 30px 30px;">
  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border:1px solid #ddd; border-radius:6px;">
    <tr>
      <td style="padding:15px; font-size:14px; color:#333;">
        📄 <strong>{{ $arquivo_nome }}</strong><br>
        <span style="font-size:12px; color:#777;">{{ $arquivo_tamanho }}kb</span>
      </td>
      <td align="right" style="padding: 15px;">
        <a href="{{ $arquivo_url }}" style="text-decoration:none; font-size:14px; color:#7D24B4; font-weight:bold;">Baixar</a>
      </td>
    </tr>
  </table>
</td>
</tr>
@endif

<!-- Botão -->
<tr>
<td align="center" style="padding: 10px 30px 30px;">
  <a href="https://www.sistemastecnol.com.br" class="button" 
  style="background:#F5633A; color:#fff; padding:14px 28px; border-radius:4px; font-size:14px; text-decoration:none; display:inline-block;">
    ACESSAR SITE
  </a>
</td>
</tr>

<!-- Rodapé -->
<tr>
<td align="center" style="padding: 30px; background:#fafafa; font-size:11px; color:#777; line-height:1.4;">
  “Esta mensagem e eventuais anexos estão dirigidos EXCLUSIVAMENTE aos destinatários especificados...”
  <br><br>
  © TecnoIt 2025 - Todos os direitos reservados.<br>
  <img src="https://via.placeholder.com/120x35?text=Tecshare" alt="Tecshare" style="margin-top:10px;">
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
