<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'home']);

// Events
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}/show', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);

// Contact
Route::get('/contact', function () {
	return view('contact');
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
