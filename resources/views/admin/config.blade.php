@extends('layouts.admin')

@section('title', 'Configurações')

@section('content')

@forelse ($lista as $item)
    <li>{{ $item }}</li>   
    @empty
    <pre>Não tem nada</pre> 
@endforelse



<form method="POST">

    @CSRF

    Nome:<br>
    <input type="text" name="nome"><br>

    idade:<br>
    <input type="text" name="idade"> <br>

    cidade:<br>
    <input type="text" name="cidade"> <br>

    <input type="submit" value="enviar">
</form>
@endsection