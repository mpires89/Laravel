<?php

use Faker\Generator as Faker;

$factory->define(\App\Cliente::class, function (Faker $faker) {
    return [
        'tipo_pessoa' => $faker->tipo_pessoa,
        'cpf' => $faker->cpf,
        'data_nascimento' => $faker->data_nascimento,
        'nome' => $faker->nome,
        'sobrenome' => $faker->sobrenome,
        'cep' => $faker->cep,
        'logradouro' => $faker->logradouro,
        'numero' => $faker->numero,
        'complemento' => $faker->text,
        'bairro' => $faker->bairro,
        'cidade' => $faker->cidade,
        'uf' => $faker->uf,

    ];
});
