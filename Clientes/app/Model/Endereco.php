<?php
/**
 * Created by PhpStorm.
 * User: Michel Pires
 * Date: 02/12/2019
 * Time: 23:54
 */

namespace App\Model;


class Endereco extends Model
{
    protected $fillable = [
        'id',
        'cep',
        'logadouro',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf',
    ];

    public function clientes()
    {
        return $this->belongsTo('App/Model/Cliente');
    }

}