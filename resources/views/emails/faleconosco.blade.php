<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Trabalhe Conosco</title>
</head>
<body style="margin:0; padding:0; background:#f3f3f3; font-family: Arial, Helvetica, sans-serif;">

  <table width="100%" cellpadding="0" cellspacing="0" style="padding:40px 0;">
    <tr>
      <td align="center">

        <table cellpadding="0" cellspacing="0" style="max-width:650px; width:100%; background:white; border-radius:6px; overflow:hidden;">

          <!-- Banner -->
          <tr>
            <td align="center" style="background:#FDFCFC; padding:40px 0;">
              <img src="{{ asset('email-trabalheconsco.png') }}" alt="Trabalhe Conosco" style="max-width:350px; width:100%; height:auto; display:block;">
            </td>
          </tr>

          <!-- Conteúdo -->
          <tr>
            <td style="padding:30px; color:#333;">

              <h1 style="font-size:28px; text-align:center; margin:0 0 20px 0;">Trabalhe Conosco</h1>

              <p style="margin:6px 0;">Nome: <strong>{{ $data['nome'] }}</strong></p>
              <p style="margin:6px 0;">E-mail: <strong>{{ $data['email'] }}</strong></p>
              <p style="margin:6px 0;">Telefone: <strong>{{ $data['telefone'] }}</strong></p>

              <h2 style="margin-top:25px; font-size:18px;">Mensagem</h2>
              <p style="text-align:justify; line-height:1.5;">
                {{ $data['mensagem'] ?? 'Mensagem não informada.' }}
              </p>

            </td>
          </tr>

          <!-- Anexo -->
          <tr>
            <td align="center" style="padding:10px 0;">
              <a href="#" style="display:block; width:90%; background:#F2F2F2; padding:14px; text-decoration:none; border-radius:6px; color:#333;">
                <table width="100%" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="30">
                      <img src="{{ asset('doc-icon.png') }}" style="max-width:24px; width:100%; height:auto; display:block;">
                    </td>
                    <td style="font-size:14px; padding-left:10px;">
                      Meu_Curriculo_2025.pdf (200KB)
                    </td>
                  </tr>
                </table>
              </a>
            </td>
          </tr>

          <!-- Botão -->
          <tr>
            <td align="center" style="padding:20px;">
              <a href="https://www.sisteastecnol.com.br" style="background:#F15A29; color:white; padding:14px 28px; text-decoration:none; border-radius:5px; font-weight:bold; display:inline-block;">
                Acessar site
              </a>
            </td>
          </tr>

          <!-- Rodapé -->
          <tr>
            <td style="background:#FDFCFC; padding:30px; text-align:center; color:#9b9b9b; font-size:12px; line-height:1.5;">
              <p style="text-align:justify;">
                “Esta mensagem e eventuais anexos estão dirigidos EXCLUSIVAMENTE aos destinatários especificados. A informação neles contida é CONFIDENCIAL...”
              </p>

              <p style="margin-top:20px;">© Tecnol 2025 - Todos os direitos reservados.</p>

              <img src="{{ asset('logo.png') }}" style="max-width:160px; width:100%; height:auto; margin-top:20px;">
            </td>
          </tr>

        </table>

      </td>
    </tr>
  </table>

</body>
</html>
