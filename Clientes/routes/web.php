<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

$router->group(['prefix' => '/clientes'], function () use ($router) {
    $router->get('/','ClienteController@create');
    $router->get('/buscar','ClienteController@buscar');
    $router->get('/buscarjuridicos','ClienteController@buscarJuridicos');
    $router->post('/inserir','ClienteController@salvar');
    $router->get('/{id}/editar','ClienteController@editar');
    $router->put('/{id}/alterar','ClienteController@alterar');
    $router->get('/{id}/editarj','ClienteController@editarJuridico');
    $router->put('/{id}/alterarj','ClienteController@alterarJuridico');
    $router->delete('/{id}/apagar', 'ClienteController@apagar');
});

