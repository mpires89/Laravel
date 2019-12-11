<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ClienteController extends Controller
{
    //retonando clientes json
    public function api(){
        $clientes = Cliente::all();
        return [$clientes];
    }

    public function index()
    {
        return view('index');
    }
    public function buscar()
    {
        $clientes = Cliente::all();
        return view('clientes.buscar', compact('clientes'));
    }
    public function buscarJuridicos()
    {
        $clientes = Cliente::all();
        return view('clientes.buscarJuridicos', compact('clientes'));
    }

    public function create(){

        return view('clientes.index');
    }
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'cpf' => 'formato_cpf',
            'name' => 'string|max:255',
            'sobrenome'=>'string|max:15'
        ]);
    }
    public function salvar()
    {
            $cliente = new Cliente();
            $cliente->cpf  =  Input::get('cpf');
            $cliente->cnpj  =  Input::get('cnpj');
            $cliente->data_nascimento  =  Input::get('data_nascimento');
            $cliente->razao_social  =  Input::get('razao_social');
            $cliente->nome  =  Input::get('nome');
            $cliente->nome_fantasia  =  Input::get('nome_fantasia');
            $cliente->sobrenome  =  Input::get('sobrenome');
            $cliente->cep  =  Input::get('cep');
            $cliente->logradouro  =  Input::get('logradouro');
            $cliente->numero  =  Input::get('numero');
            $cliente->complemento  =  Input::get('complemento');
            $cliente->bairro  =  Input::get('bairro');
            $cliente->cidade  =  Input::get('cidade');
            $cliente->uf  =  Input::get('uf');
            $cliente->save();
            // redirect
            Session::flash('message', 'Cliente cadastrado com sucesso!');
            return Redirect::to('clientes/');

    }

    public function editar($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.editar',compact('cliente'));
    }

    public function alterar(Request $request, $id)
    {
        Cliente::find($id)->update( $request->all() );

        return redirect('clientes/buscar');
    }

    public function editarJuridico($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.editarJuridico',compact('cliente'));
    }

    public function alterarJuridico(Request $request, $id)
    {
        Cliente::find($id)->update( $request->all() );

        return redirect('clientes/buscarjuridicos');
    }

    public function apagar(Request $request, $id)
    {
        Cliente::destroy($id);

        return redirect('clientes/buscar');
    }

}
