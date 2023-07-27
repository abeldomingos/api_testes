<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Validator;

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
    function update(Request $req) {

        $cliente = Cliente::find($req->id);
        $cliente->nome=$req->nome;
        $cliente->email=$req->email;
        $cliente->endereco=$req->endereco;
        $cliente->telefone=$req->telefone;
        $cliente->sexo=$req->sexo;

        $result=$cliente->save();

        if($result){
            return ["Resultado"=>"Dado Alterado com sucesso"];

        }else{
            return ["Resultado"=>"Falha ao alterar Dados"];
        }

    }

    //Metodo de pesquisar por meio de nome e da inicial de um caracter
    function search($nome){
        return Cliente::where("nome","like","%".$nome."%")->get();
    }

    //Função deletar
    function delete($id){

        $cliente= Cliente::find($id);
        $result=$cliente->delete();

        if($result){
            return ["Resultado"=>"Deletado com sucesso!"];
        }else{
            return ["Resultado"=>"Falha ao deletar cliente"];
        }
       
    }

    function testarDados(Request $req){
        return ["x"=>"y"];

    }
}
