@extends('layouts.admin')

@section('title', 'Listagem de tarefas')

@section('content')

    <h1>Listar Tarefas</h1>

    <a href="{{ route('tarefas.add') }}">Adicionar nova tarefa</a>

    @if (session('success'))
        @component('components.alert')
            {{ session('success') }}
        @endcomponent
    @elseif(session('warning'))
        @component('components.alert')
            {{ session('warning') }}
        @endcomponent
    @endif

    @if(count($list) > 0)

       <ul>
            @foreach ($list as $item)
                <li>
                    <a href="{{ route('tarefas.done', ['id'=>$item->id]) }}">[ @if($item->resolvido === 1)  DESMARCAR @else MARCAR @endif]</a>
                    {{ $item->titulo }}
                    <a href="{{ route('tarefas.del', ['id'=>$item->id]) }}" onclick="return confirm('Tem certeza que deseja excluir?')">[ Excluir ]</a>
                    <a href="{{ route('tarefas.edit', ['id'=>$item->id]) }}">[ Editar ]</a>
                </li>
            @endforeach
       </ul>

    @else
        Não tem tarefas
    @endif

@endsection