@extends('layouts.main')
@section('title', 'Produtos')
@section('content')
    <div>
        <h1>Produtos</h1>
        @if ($busca != '')
            <p>O usuário está buscando por: {{ $busca }}</p>
        @endif
    </div>
@endsection
