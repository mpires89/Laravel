@extends('layout.template')

@section('title', 'Buscar Todos')

@section('content')
<h4>Listar Clientes - Pessoa Fisica</h4>
<hr>
@if( count($clientes) > 0)
	<div class="center">
		<h4>Existem {{ count($clientes) }} Pessoas cadastradas!</h4>
		<h6>CPF || Nome || Sobrenome || Nascimento || CEP || Logradouro || Numero || Complemento || Bairro || Cidade || UF </h6>
		</div>
	<hr>

	@foreach($clientes as $cliente)
		@if($cliente->cpf != null)
	<div style="text-align: left;">
		{{$cliente->cpf}} || {{$cliente->nome}} || {{$cliente->sobrenome}} || {{$cliente->data_nascimento}} || {{$cliente->cep}} ||
		{{$cliente->logradouro}} || {{$cliente->numero}} || {{$cliente->complemento}} || {{$cliente->bairro}} || {{$cliente->cidade}} || {{$cliente->uf}}
		</a>
		<h4 class="title">
		</h4>
		<div class="description-bottom">
			<a href="{{ url('/clientes/'.$cliente->id.'/editar') }}">
				<button>Editar</button>
			</a>

			{{Form::open(['url' => '/clientes/'.$cliente->id.'/apagar', 'method' => 'DELETE'])}}
				<button>Apagar</button>
			{{Form::close()}}
		</div>
	</div>
		<hr>
		@endif
	@endforeach
@else
	<h3>Não há clientes cadastrados</h3>
@endif
@endsection