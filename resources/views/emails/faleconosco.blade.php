<x-mail::message>
# Nova mensagem do formulário "Fale Conosco"

**Nome:** {{ $data['nome'] }}  
**Email:** {{ $data['email'] }}  
@if(isset($data['telefone']))
**Telefone:** {{ $data['telefone'] }}
@endif

---

**Mensagem:**  
{{ $data['mensagem'] }}

<br>
Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
