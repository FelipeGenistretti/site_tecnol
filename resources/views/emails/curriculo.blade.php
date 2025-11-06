<x-mail::message>
# Novo Currículo Recebido

Olá, você recebeu um novo currículo através do formulário do site.

**Nome:** {{ $data['nome'] ?? 'Não informado' }}  
**E-mail:** {{ $data['email'] ?? 'Não informado' }}  
**Telefone:** {{ $data['telefone'] ?? 'Não informado' }}  
**Área de atuação:** {{ $data['atuacao'] ?? 'Não informado' }}  
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
