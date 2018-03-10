<!DOCTYPE html>
<html>
<head>
	<title>Disciplinas</title>
</head>
<body>
	<a href="/disciplina/cadastrar">Cadastrar disciplina</a>
	<ul>
		@foreach ($disciplinas as $disciplina)
			<li><a href="/disciplinas/{{ $disciplina->id}}"> {{$disciplina->titulo}} </a> <a href="/disciplina/{{ $disciplina->id }}/edit"> - Editar </a> </li>
		@endforeach
	</ul>
</body>
</html>