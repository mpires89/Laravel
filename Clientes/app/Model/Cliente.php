<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'id',
        'tipo_cliente',
        'endereco_id',
        'pessoa_fisica_id',
        'pessoa_juridica_id',
    ];

    public $timestamps = false;

    public function endereco()
    {
        return $this->hasOne(Endereco::class);
    }
    public function pessoaFisica()
    {
        return $this->hasOne(PessoaFisica::class);
    }
    public function pessoaJuridica()
    {
        return $this->hasOne(PessoaJuridica::class);
    }


}
