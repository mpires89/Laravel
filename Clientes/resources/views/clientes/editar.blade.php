@extends('layout.template')
@section('title', 'EditarCliente')

@section('content')
<h4>Alterando: '<i>{{ $cliente->nome }}</i>' </h4>
<hr>
{{ Form::open(['url' => 'clientes/'.$cliente->id.'/alterar', 'method' => 'put', 'class' => 'center']) }}

	{{ Form::label('cpf', 'CPF:') }}
	{{ Form::text('cpf', $cliente->cpf) }}
	<br>

	{{ Form::label('nome', 'Nome:') }}
	{{ Form::text('nome', $cliente->nome) }}
	<br>

	{{ Form::label('sobrenome', 'Sobrenome:') }}
	{{ Form::text('sobrenome', $cliente->sobrenome) }}
	<br>

	{{ Form::label('data_nascimento', 'Nascimento: ') }}
	{{ Form::date(' data_nascimento', $cliente->data_nascimento) }}
	<br>
	{{ Form::label('cep', 'CEP: ') }}
	{{ Form::text(' cep', $cliente->cep) }}
	<br>
	{{ Form::label('logradouro', 'Logradouro: ') }}
	{{ Form::text(' logradouro', $cliente->logradouro) }}
	<br>
	{{ Form::label('numero', 'Numero: ') }}
	{{ Form::text(' numero', $cliente->numero) }}
	<br>
	{{ Form::label('complemento', 'Complemento: ') }}
	{{ Form::text(' complemento', $cliente->complemento) }}
	<br>
	{{ Form::label('bairro', 'Bairro: ') }}
	{{ Form::text(' bairro', $cliente->bairro) }}
	<br>
	{{ Form::label('cidade', 'Cidade: ') }}
	{{ Form::text(' cidade', $cliente->cidade) }}
	<br>
	{{ Form::label('uf', 'Uf: ') }}
	{{ Form::text(' uf', $cliente->uf) }}
	<br>

	<hr>
	{{ Form::submit('Edit') }}
	<button href="clientes/buscar">Cancelar</button>
@endsection

