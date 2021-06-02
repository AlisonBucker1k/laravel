<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TarefasController extends Controller
{
    //

    public function list(){
        $list = Tarefa::all();

        return view('tarefas.list', [
            'list' => $list
        ]);
    }

    public function add(){
        return view('tarefas.add');
    }

    public function addAction(Request $request){
        $request->validate([
            'titulo' => [ 'required', 'string' ]
        ]);

        $titulo = $request->input('titulo');

        $t = new Tarefa;
        $t->titulo = $titulo;
        $t->save();

        return redirect()
        ->route('tarefas.list')
        ->with('success', 'Adicionado Com Sucesso!');
    }

    public function edit($id){
        $data = Tarefa::find($id);

        if($data){
            return view('tarefas.edit', [
                'data' => $data
            ]);
        }else{
            return redirect()->route('tarefas.list');
        }
    }

    public function editAction(Request $request, $id){
        $request->validate([
            'titulo' => [ 'required', 'string' ]
        ]);
        
        Tarefa::where('id', $id)->update(['titulo'=>$request->input('titulo')]);
            
        return redirect()
        ->route('tarefas.list')
        ->with('success', 'Tarefa atualizada!');
    }

    public function del($id){
        $db = Tarefa::find($id)->delete();

        return redirect()
        ->route('tarefas.list')
        ->with('success', 'Tarefa apagada!');
    }

    public function done($id){

        $t = Tarefa::find($id);
        $t->resolvido = 1 - $t->resolvido;
        $t->save();
        
        return redirect()
            ->route('tarefas.list')
            ->with('success', ($t->resolvido == 1)?'Tarefa Concluída!':'Tarefa Desmarcada');
    }
}
