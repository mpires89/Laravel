<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'cpf',
        'cnpj',
        'data_nascimento',
        'razão_social',
        'nome',
        'nome_fantasia',
        'sobrenome',
        'cep',
        'logadouro',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf',
    ];

    public $timestamps = false;


}
