<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //Função para adicionar dados no BD
    function add(Request $req){

        $cliente = new Cliente();
        $cliente->nome=$req->nome;
        $cliente->email=$req->email;
        $cliente->endereco=$req->endereco;
        $cliente->telefone=$req->telefone;
        $cliente->sexo=$req->sexo;

        $resultado=$cliente->save();

        if($resultado){
            return ["Resultado"=>"Dados salvo com sucesso"];

        }else{
            return ["Resultado"=>"Falha na operação"];
        }

    }

    //Função actualizar dados
    function update() {
        return ["Resultado"=>"Dado alterado com sucesso"];
    }
}
