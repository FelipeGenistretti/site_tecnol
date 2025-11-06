<x-mail::message>
# Novo Pré-cadastro Recebido

Olá, você recebeu um novo pré-cadastro através do formulário do site.

**CNPJ:** {{ $data['cnpj'] ?? 'Não informado' }}  
**Razão social:** {{ $data['nome'] ?? 'Não informado' }}  
**Categoria:** {{ $data['categoria'] ?? 'Não informado' }}  
**Nome fantasia:** {{ $data['nome-fantasia'] ?? 'Não informado' }}  

**CEP:** {{ $data['cep'] ?? 'Não informado' }}  
**Endereço:** {{ $data['endereco'] ?? 'Não informado' }}  
**Número:** {{ $data['numero'] ?? 'Não informado' }}  
**Complemento:** {{ $data['complemento'] ?? 'Não informado' }}  
**Bairro:** {{ $data['bairro'] ?? 'Não informado' }}  
**UF:** {{ $data['uf'] ?? 'Não informado' }}  
**Cidade:** {{ $data['cidade'] ?? 'Não informado' }}  

**Nome do responsável:** {{ $data['Nome'] ?? 'Não informado' }}  
**CPF:** {{ $data['cpf'] ?? 'Não informado' }}  
**Telefone:** {{ $data['telefone'] ?? 'Não informado' }}  
**E-mail:** {{ $data['email'] ?? 'Não informado' }}  


Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
