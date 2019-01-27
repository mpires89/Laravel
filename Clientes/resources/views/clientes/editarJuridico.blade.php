@extends('layout.template')
@section('title', 'EditarCliente')

@section('content')
<h4>Alterando: '<i>{{ $cliente->nome }}</i>' </h4>
<hr>
{{ Form::open(['url' => 'clientes/'.$cliente->id.'/alterarj', 'method' => 'put', 'class' => 'center']) }}

	{{ Form::label('cnpj', 'CNPJ:') }}
	{{ Form::text('cnpj', $cliente->cnpj) }}
	<br>

	{{ Form::label('razao_social', 'Razão Social:') }}
	{{ Form::text('razao_social', $cliente->razao_social) }}
	<br>

	{{ Form::label('nome_fantasia', 'Nome Fantasia:') }}
	{{ Form::text('nome_fantasia', $cliente->nome_fantasia) }}
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

