@extends('layouts.admin')

@section('title', 'Adição de tarefas')

@section('content')
<a href="{{ route('tarefas.list') }}">Voltar</a>
    <h1>Adicionar Tarefas</h1>

    @if ($errors->any())
        @component('components.alert')
            @foreach ($errors->all() as $error)
                {{ $error }} <br/>
            @endforeach
        @endcomponent
    @endif

    <form method="POST">
        @csrf

        <label for="title">
            Titulo:<br>
            <input type="text" name="titulo" id="">
        </label>

        <input type="submit" value="Adicionar">   

    </form>
@endsection