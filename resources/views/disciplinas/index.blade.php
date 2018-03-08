<!DOCTYPE html>
<html>
<head>
	<title>Disciplinas</title>
</head>
<body>
	@foreach ($disciplinas as $disciplina)
		{{$disciplina->titulo}}
		<br />
	@endforeach
</body>
</html>