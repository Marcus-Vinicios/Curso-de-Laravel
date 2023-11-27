@extends('layouts.main')
@section('title', 'Mark-Events')
@section('content')
    <div>
        <h1>Home</h1>
        <ul>
            <li>Nome: {{$nome}}</li>
            <li>Idade: {{$idade}}</li>
            <li>Profissão: {{$profissao}}</li>
        </ul>
    </div>
@endsection
