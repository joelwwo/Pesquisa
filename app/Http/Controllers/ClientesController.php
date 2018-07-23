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
        
        $usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
        /* $result_user = "SELECT * FROM clientes WHERE nome LIKE '%$usuarios%' LIMIT 20"; */
        /* $resultado_user = $clientes=clientes::where('nome','like', "%$usuarios%")->get(); */
        $resultado_user = $clientes=clientes::where('nome','like', "%$request->nome%")->get();
       if(count($resultado_user) != 0)
       {
            foreach($resultado_user as $usuario)
            {
                echo "<li>".$usuario->nome."</li>";
            }
       }
       else
       {
           echo "Nenhum resultado encontrado!!!";
       }
        
    }

}
