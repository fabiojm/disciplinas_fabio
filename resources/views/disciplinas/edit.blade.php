	<form method="POST" action="/disciplina/{{ $disciplina->id }}">
		{{ csrf_field() }}
		{{ method_field('patch') }}
		Título: <input type="text" name="titulo" value=" {{ $disciplina->titulo }}"><br/>
		Ementa: <textarea name="ementa">{{ $disciplina->ementa }} </textarea> <br/>
		<button type="submit">Salvar</button>
	</form>
