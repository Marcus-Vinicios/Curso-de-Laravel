<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', function () {
    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos/{id}', function ($id) {
    return view('product', ['id' => $id]);
});


Route::get('/introduction', function () {
    return view('/introducao/introduction');
});

Route::get('/aula3', function () {
    return view('/introducao/teste');
});

Route::get('/aula4', function () {
    $nome = "Marcus.V";
    $idade = 20;
    $job = "Desenvolvedor Web";

    return view(
        '/introducao/ifelse',
        [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => $job
        ]
    );
});

Route::get('/aula5', function () {
    $carros = [
        'Kadett 2.0',
        'Honda Civic',
        'Porsche Panamera',
        'Dodge Chalenger',
        'Mitsubishi Eclipse'
    ];

    $users = [
        'Marcus',
        'Matheus',
        'Lucas'
    ];

    return view('/introducao/loops', ['carros' => $carros, 'users' => $users]);
});

Route::get('/aula6', function () {
    return view('/introducao/estatics');
});
