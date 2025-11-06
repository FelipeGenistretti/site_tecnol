<x-mail::message>
# Novo Currículo Recebido

Olá, você recebeu uma solicitacao  através do formulário do site.

**Tipo:** {{ $data['solicitacao'] ?? 'Não informado' }}  
**Classificação:** {{ $data['classificacao'] ?? 'Não informado' }}  
**Nome:** {{ $data['nome'] ?? 'Não informado' }}  
**CPF:** {{ $data['cpf'] ?? 'Não informado' }}  
**E-mail:** {{ $data['email'] ?? 'Não informada' }}
**Telefone:** {{ $data['telefone'] ?? 'Não informada' }}
**Observações:** {{ $data['observacoes'] ?? 'Não informada' }}

@if(!empty($arquivo))
**Arquivo enviado:** {{ $arquivo->getClientOriginalName() }}
@endif

<x-mail::button :url="'#'">
Baixar Anexo
</x-mail::button>

Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
