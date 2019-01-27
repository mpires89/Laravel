<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_pessoa')->nullable();
            $table->string('cpf',11)->nullable();
            $table->string('cnpj',14)->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('razao_social',255)->nullable();
            $table->string('nome',255)->nullable();
            $table->string('nome_fantasia',255)->nullable();
            $table->string('sobrenome',15)->nullable();
            $table->string('cep',8)->nullable(false);
            $table->string('logradouro',255)->nullable(false);
            $table->string('numero',255)->nullable(false);
            $table->string('complemento',255)->nullable();
            $table->string('bairro',255)->nullable(false);
            $table->string('cidade',255)->nullable(false);
            $table->string('uf',8)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
