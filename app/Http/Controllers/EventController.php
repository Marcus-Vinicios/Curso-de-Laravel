<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
	public function home()
	{
		$nome = 'Marcus Vinicios';
		$idade = 20;
		$profissao = 'Desenvolvedor Web';

		return view('welcome', [
			'nome' => $nome,
			'idade' => $idade,
			'profissao' => $profissao,
		]);
	}

	public function create()
	{
		return view('events.create');
	}
}
