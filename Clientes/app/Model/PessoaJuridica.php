<?php
/**
 * Created by PhpStorm.
 * User: Michel Pires
 * Date: 02/12/2019
 * Time: 23:55
 */

namespace App\Model;


class PessoaJuridica extends Model
{
    protected $fillable = [
        'id',
        'cnpj',
        'endereco_id',
        'razao_social',
        'nome_fanstasia',
    ];

    public function clientes()
    {
        return $this->belongsTo('App/Model/Cliente');
    }

}