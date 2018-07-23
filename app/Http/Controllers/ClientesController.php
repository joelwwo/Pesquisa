<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $clientes=clientes::where('nome','like', "%$request->nome%")->get();
       /*  $clientes=new clientes;
        $clientes->nome=$request->nome;
        $clientes->cor="preto";
        $clientes->save(); */
        return view('pesquisa', compact('clientes'));
    }

}
