<x-mail::message>
# Nova duncia Recebida

Olá, você recebeu uma denuncia através do formulário do site.

**Mensagem:** {{ $data['mensagem'] ?? 'Não informada' }}

@if(!empty($arquivo))
**Arquivo enviado:** {{ $arquivo->getClientOriginalName() }}
@endif

<x-mail::button :url="'#'">
Baixar Anexo
</x-mail::button>

Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
