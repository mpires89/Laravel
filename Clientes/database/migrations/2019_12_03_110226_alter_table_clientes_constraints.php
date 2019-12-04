<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableClientesConstraints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clientes',function (Blueprint $table){
            $table->foreign('endereco_id')->references('id')->on('endereco');
            $table->foreign('pessoa_fisica_id')->references('id')->on('pessoa_fisica');
            $table->foreign('pessoa_juridica_id')->references('id')->on('pessoa_juridica');
        });
        //
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
