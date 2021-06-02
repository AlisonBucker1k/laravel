@extends('layouts.admin')

@section('title', 'Edição de tarefas')

@section('content')
<a href="{{ route('tarefas.list') }}">Voltar</a>
    <h1>Adicionar Tarefas</h1>

    @if ($errors->any())
        @component('components.alert')
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        @endcomponent
    @endif

    <form method="POST">
        @csrf

        <label for="title">
            Titulo:<br>
            <input type="text" name="titulo" value=" {{ $data->titulo }} ">
        </label>

        <input type="submit" value="Salvar">   

    </form>
@endsection