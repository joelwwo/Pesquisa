<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\clientes;

class ClientesController extends Controller
{
    public function index(){
        return view('pesquisa');
    }

    public function pesquisa(){
        return view('pesquisa');
    }

    public function pesquisar(Request $request){
        $dados = [];
        $dados['url'] = url('/pesquisa');
        /* $dados['cliente'] = $clientes=clientes::where('nome','like', "%$request->nome%")->get(); */
        $dados['cliente'] = $clientes=clientes::where('nome','like', "%$request->nome%")->first()->get();
       /*  $clientes=new clientes;
        $clientes->nome=$request->nome;
        $clientes->cor="preto";
        $clientes->save(); */
        return response()->json($dados);
    }

}
