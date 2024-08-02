@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <h1>Está é a página de produtos!</h1>

    @if($busca != '')
    <p>O usuário está buscando por: {{ $busca }}</p>
    @endif
    <a href="/">Voltar para home</a>
</body>

@endsection