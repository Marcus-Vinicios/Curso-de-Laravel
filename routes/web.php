<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return view('teste');
});

Route::get('/ifelse', function () {
    $nome = "Marcus.V";
    $idade = 20;
    $job = "Desenvolvedor Web";

    return view(
        'ifelse',
        [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => $job
        ]
    );
});

Route::get('/loops', function () {
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

    return view('loops', ['carros' => $carros, 'users' => $users]);
});
