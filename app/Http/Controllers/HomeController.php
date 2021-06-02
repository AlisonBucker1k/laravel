<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class HomeController extends Controller
{
    //

    public function __invoke(){
        Tarefa::where('resolvido', 0)->delete();

        echo "Salvo";

        // foreach($list as $item){
        //     echo $item->titulo.'<br>';
        // }

        // return view('welcome');
    }
}
