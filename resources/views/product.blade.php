@extends('layouts.main')
@section('title', 'Produto')
@section('content')
    <div>
        <h1>Produto</h1>
        <p>
            Exibindo o produto de ID: {{ $id }}
        </p>
    </div>
@endsection
