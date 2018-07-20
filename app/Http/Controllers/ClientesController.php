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

    public function pesquisar(){
        $cliente="EleMesmo";
        return view('pesquisa', compact('cliente'));
    }

}
