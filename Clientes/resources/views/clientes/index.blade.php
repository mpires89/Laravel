@extends('layout.template')
@section('title', 'Criando Clientes')
@section('scripts')
    <script>
        $(document).ready(function(){
            $('#cpf').mask('XXX.XXX.XXX-XX');
        });
        function valor(qual) {
            if(qual=="cpf") {
                document.form.cpf.style.display="block";
                document.form.nome.style.display="block";
                document.form.sobrenome.style.display="block";
                document.form.data_nascimento.style.display="block";
                document.form.cep.style.display="block";
                document.form.logradouro.style.display="block";
                document.form.numero.style.display="block";
                document.form.complemento.style.display="block";
                document.form.bairro.style.display="block";
                document.form.cidade.style.display="block";
                document.form.uf.style.display="block";
                document.form.cnpj.style.display="none";
                document.form.razao_social.style.display="none";
            }
            if(qual=="cnpj") {
                document.form.cpf.style.display="none";
                document.form.nome.style.display="none";
                document.form.sobrenome.style.display="none";
                document.form.data_nascimento.style.display="none";
                document.form.cnpj.style.display="block";
                document.form.razao_social.style.display="block";
                document.form.cep.style.display="block";
                document.form.logradouro.style.display="block";
                document.form.numero.style.display="block";
                document.form.complemento.style.display="block";
                document.form.bairro.style.display="block";
                document.form.cidade.style.display="block";
                document.form.uf.style.display="block";

            }
        }
    </script>
@endsection

@section('content')
    <h4>Clientes</h4>
    <div>

        CPF:{{Form::radio('qual', 'cpf')}}
        <br>

        CNPJ:{{Form::radio('qual', 'cpnpj')}}

    </div>
    <hr>
    {{ Form::open(['url' => 'clientes/inserir', 'method' => 'post', 'class' => 'center']) }}

    {{ Form::label('cpf', 'CPF:') }}
    {{ Form::text('cpf', null) }}
    <br>
    {{ Form::label('cnpj', 'CNPJ:') }}
    {{ Form::text('cnpj', null) }}
    <br>
    {{ Form::label('data_nascimento', 'Nascimento: ') }}
    {{ Form::date(' data_nascimento', null) }}
    <br>
    {{ Form::label('razao_social', 'Razão Social:') }}
    {{ Form::text('razao_social', null) }}
    <br>
    {{ Form::label('nome', 'Nome:') }}
    {{ Form::text('nome', null) }}
    <br>
    {{ Form::label('nome_fantasia', 'Nome Fantasia:') }}
    {{ Form::text('nome_fantasia', null) }}
    <br>
    {{ Form::label('sobrenome', 'Sobrenome:') }}
    {{ Form::text('sobrenome', null) }}
    <br>
    {{ Form::label('cep', 'CEP: ') }}
    {{ Form::text(' cep', null, ['class'=>'form-control','required']) }}
    <br>
    {{ Form::label('logradouro', 'Logradouro: ') }}
    {{ Form::text(' logradouro', null, ['class'=>'form-control','required']) }}
    <br>
    {{ Form::label('numero', 'Numero: ') }}
    {{ Form::text(' numero', null, ['class'=>'form-control','required']) }}
    <br>
    {{ Form::label('complemento', 'Complemento: ') }}
    {{ Form::text(' complemento', null) }}
    <br>
    {{ Form::label('bairro', 'Bairro: ') }}
    {{ Form::text(' bairro', null,['class'=>'form-control','required']) }}
    <br>
    {{ Form::label('cidade', 'Cidade: ') }}
    {{ Form::text(' cidade', null,['class'=>'form-control','required']) }}
    <br>
    {{ Form::label('uf', 'Uf: ') }}
    {{ Form::text(' uf', null,['class'=>'form-control','required']) }}
    <br>

    <hr>
    {{ Form::submit('Save') }}
    {{ Form::close() }}
@endsection
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif