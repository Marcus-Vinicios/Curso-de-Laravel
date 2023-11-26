<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel</title>
</head>

<body>
  <h2>Loops</h2>
  <div>
    <h3>Carros</h3>
    <ul>
      @for($i = 0; $i < count($carros); $i++) <li>{{$carros[$i]}}</li>
        @endfor
    </ul>
  </div>
  <div>
    <h3>Usuários</h3>
    <ul>
      @foreach ($users as $user)
        <li>Nome: {{$user}} - index: {{$loop->index}}</li>
      @endforeach
    </ul>
  </div>
</body>

</html>