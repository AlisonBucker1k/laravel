<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    //

    public function index(Request $request){
        $nome = "Alison";
        $idade = 120;

        $lista = [
            'leite',
            'ovo',
            'trigo',
            'margarina',
            'cacau',
            'leite de minhapica'
        ];

        $data = [
            'nome' => $nome,
            'idade' => $idade,
            'lista' => $lista
        ];

        return view('admin.config', $data);
    }

    public function info(){
        echo "Info";
    }

    public function permissoes(){
        echo "Permissoes";
    }
}
