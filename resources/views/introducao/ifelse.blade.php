<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel</title>
</head>

<body>
  <!-- Aula 4 - if e else -->
  <h2>Condicional</h2>
  <span>10 > 5 ?</span>
  @if(10 > 5)
  <span>true</span>
  @else
  <span>false</span>
  @endif
  <!-- Dado dinâmico vindo da rota -->
  <h3>Olá {{$nome}}</h3>
  <div>
    @if ($nome === "Pedro")
    <p>O nome é Pedro</p>
    @elseif ($nome !== "Pedro")
    <p>O nome não é Pedro</p>
    @else
    <p>O nome é {{$nome}}</p>
    @endif
  </div>
  <div>
    <h3>User: {{$nome}}</h3>
    <ul>
      <li>{{$nome}}</li>
      <li>{{$idade}}</li>
      <li>{{$profissao}}</li>
    </ul>
  </div>
</body>

</html>