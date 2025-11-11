<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Canal de Denúncia</title>

  <style>
    @media only screen and (max-width: 600px) {
      .container { width: 100% !important; padding: 20px !important; }
      .attachment-box { width: 100% !important; display:block !important; }
      .btn { width: 100% !important; display:block !important; text-align:center !important; }
    }
  </style>

</head>
<body style="margin:0; padding:0; background:#F5F5F5; font-family: Arial, Helvetica, sans-serif;">

  <table width="100%" cellpadding="0" cellspacing="0" style="padding:30px 0;">
    <tr>
      <td align="center">

        <table width="600" cellpadding="0" cellspacing="0" class="container" style="background:#FFFFFF; border-radius:8px; overflow:hidden;">

          <!-- Banner -->
          <tr>
            <td align="center" style="padding:40px 20px; background:#FFF5EF;">
              <img src="{{ asset('canalDenunciaEmail.png') }}" alt="Ilustração Canal de Denúncia" style="width:220px; max-width:100%; display:block;">
            </td>
          </tr>

          <!-- Título -->
          <tr>
            <td align="center" style="padding:30px 25px; color:#333;">
              <h1 style="font-size:26px; margin-bottom:8px;">Canal de denúncia</h1>
              <p style="font-size:16px; color:#555; margin:0;">Contato enviado via site.</p>
            </td>
          </tr>

          <!-- Mensagem -->
          <tr>
            <td style="padding:0 30px 20px 30px; color:#333;">
              <h3 style="font-size:16px; margin-bottom:6px;">Mensagem:</h3>
              <p style="font-size:15px; line-height:1.6; text-align:justify; margin:0;">
                {{ $data['mensagem'] ?? 'Mensagem não informada.' }}
              </p>
            </td>
          </tr>

          <!-- Lista de Arquivos -->
         <!-- Lista de Arquivos -->
@if(!empty($arquivos))
<tr>
  <td style="padding:20px 30px;">
    @foreach($arquivos as $arquivo)
      <table width="100%" class="attachment-box" cellpadding="0" cellspacing="0" style="margin-bottom:12px; border-radius:8px; background:#F8F8F8; padding:12px;">
        <tr>

          <!-- Extensão -->
          <td width="50" align="center" style="font-size:14px; font-weight:bold; background:#FF6F47; color:white; border-radius:6px; padding:8px;">
            {{ $arquivo['extensao'] }}
          </td>

          <!-- Nome + tamanho -->
          <td style="padding-left:12px; font-size:14px;">
            <strong>{{ $arquivo['nome'] }}</strong><br>
            <span style="color:#777; font-size:12px;">
              {{ $arquivo['tamanho'] }}kb
            </span>
          </td>

          <!-- Botão Baixar -->
          <td align="right">
            <a href="{{ route('download.arquivo', $arquivo['file']) }}"
               style="background:#F15A29; padding:8px 14px; color:#fff; font-size:13px; 
                      text-decoration:none; border-radius:6px; font-weight:bold; display:inline-block;">
               Baixar
            </a>
          </td>

        </tr>
      </table>
    @endforeach
  </td>
</tr>
@endif

          <!-- Botão -->
          <tr>
            <td align="center" style="padding:30px 20px;">
              <a href="{{ $data['link'] ?? '#' }}" class="btn" 
              style="background:#F15A29; color:white; padding:14px 28px; border-radius:6px; text-decoration:none; font-weight:bold; display:inline-block;">
                ÁREA DEVEDOR
              </a>
            </td>
          </tr>

          <!-- Link de acesso -->
          <tr>
            <td align="center" style="padding-bottom:30px; font-size:14px; color:#555;">
              Link de acesso: 
              <a href="{{ $data['link'] ?? '#' }}" style="color:#F15A29;">
                {{ $data['link'] ?? 'dominio.com.br' }}
              </a>
            </td>
          </tr>

          <!-- Divisor -->
          <tr><td style="border-bottom:1px solid #E5E5E5;"></td></tr>

          <!-- Rodapé -->
          <tr>
            <td style="padding:25px 35px; font-size:11px; color:#9B9B9B; text-align:justify; line-height:1.5;">
              “Esta mensagem e eventuais anexos estão dirigidos EXCLUSIVAMENTE aos destinatários especificados. A informação nela contida é CONFIDENCIAL, não estando autorizado seu uso, revelação, distribuição ou cópia. Se você recebeu por ENGANO, pedimos gentilmente que comunique ao remetente e ELIMINE esta mensagem.”
              <br><br>
              <p style="text-align:center; margin-top:10px;">© Tecnol 2025 - Todos os direitos reservados.</p>
            </td>
          </tr>

        </table>

      </td>
    </tr>
  </table>

</body>
</html>
