<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
/* Responsividade */
@media only screen and (max-width: 600px) {
  .container { width: 100% !important; padding: 0 20px !important; }
  .hero-img { width: 100% !important; height: auto !important; }
  .content { padding: 20px !important; }
  .button { width: 100% !important; display: block !important; text-align:center !important; }
  .attach-box { padding: 16px !important; }
}
</style>

</head>

<body style="margin:0; padding:0; background:#f5f5f5; font-family: Arial, sans-serif;">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="center" style="padding:30px 0;">

<!-- MAIN CONTAINER -->
<table width="600" border="0" cellspacing="0" cellpadding="0" class="container" style="background:#fff; border-radius:10px; overflow:hidden;">

<!-- HEADER IMAGE -->
<tr>
<td>
  <img src="{{ asset('imgEmailTrabConosco.png') }}" class="hero-img" style="display:block; width:600px; height:auto;" alt="">
</td>
</tr>

<!-- TITLE -->
<tr>
<td align="center" style="padding:30px 30px 10px; font-size:24px; font-weight:bold; color:#111;">
  Trabalhe conosco
</td>
</tr>

<!-- TEXT INTRO -->
<tr>
<td class="content" style="padding:0 30px 20px; font-size:16px; color:#444;">
  Contato enviado via site.
</td>
</tr>

<!-- USER INFO -->
<tr>
<td class="content" style="padding:0 30px 25px; font-size:15px; color:#444; line-height:1.8;">
  <strong>Nome:</strong> {{ $data["nome"] }}<br>
  <strong>E-mail:</strong> {{ $data["email"] }}<br>
  <strong>Telefone:</strong> {{ $data["telefone"] }}<br>
  <strong>Área de atuação:</strong> {{ $data["atuacao"] }}<br>
</td>
</tr>

<!-- MESSAGE -->
<tr>
<td class="content" style="padding:0 30px 25px; font-size:15px; color:#444; line-height:1.6;">
  <strong>Mensagem:</strong><br><br>
  {{ $data["mensagem"] }}
</td>
</tr>

<!-- ATTACHMENT BOX -->
@if(isset($arquivo_nome))
<tr>
<td style="padding:0 30px 30px;">

  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-radius:10px; border:1px solid #e5e5e5;">
    <tr>

      <!-- LEFT ICON + FILENAME -->
      <td class="attach-box" style="padding:20px; font-size:14px; color:#333;">
        <table cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td>
              <img src="https://img.icons8.com/color/48/000000/ms-word.png" width="36" style="display:block; margin-right:10px;">
            </td>
            <td style="padding-left:12px;">
              <strong style="font-size:15px; color:#444;">{{ $arquivo_nome }}</strong><br>
              <span style="font-size:12px; color:#777;">{{ $arquivo_tamanho }}kb</span>
            </td>
          </tr>
        </table>
      </td>

      <!-- DOWNLOAD BUTTON -->
      <td align="right" style="padding:20px;">
        <a href="{{ $arquivo_url }}" 
           style="background:#7D24B4; padding:10px 18px; color:#fff; text-decoration:none; font-size:14px; border-radius:6px; font-weight:bold;">
           Baixar
        </a>
      </td>

    </tr>
  </table>

</td>
</tr>
@endif

<!-- MAIN BUTTON -->
<tr>
<td align="center" style="padding:10px 30px 30px;">
  <a href="https://www.sistemastecnol.com.br"
     class="button"
     style="background:#F5633A; color:#fff; padding:14px 32px; text-decoration:none;
            border-radius:6px; font-weight:bold; font-size:15px; display:inline-block;">
     ACESSAR SITE
  </a>
</td>
</tr>

<!-- FOOTER -->
<tr>
<td style="padding:30px; background:#fafafa; text-align:center; font-size:11px; color:#777; line-height:1.5;">
  “Esta mensagem e eventuais anexos estão dirigidos EXCLUSIVAMENTE aos destinatários especificados...”<br><br>
  © TecnoIt 2025 - Todos os direitos reservados.<br><br>

  <img src="{{ asset(' /logo.png') }}" width="140" style="opacity:0.85;">
</td>
</tr>

</table>
<!-- END MAIN CONTAINER -->

</td>
</tr>
</table>

</body>
</html>
