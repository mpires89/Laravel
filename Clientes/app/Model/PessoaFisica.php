<?php
/**
 * Created by PhpStorm.
 * User: Michel Pires
 * Date: 02/12/2019
 * Time: 23:55
 */

namespace App\Model;


class PessoaFisica extends Model
{
    protected $fillable = [
        'id',
        'cpf',
        'nome',
        'sobrenome',
        'data_dascimento',
    ];

    public function clientes()
    {
        return $this->belongsTo('App/Model/Cliente');
    }

}