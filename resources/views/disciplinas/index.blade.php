@extends('master')

@section('content')
	<a class="btn btn-primary" href="/disciplinas/create">Cadastrar disciplina</a>
	<ul>
		@foreach ($disciplinas as $disciplina)
			<div class="row form-group">
			<li><a href="/disciplinas/{{ $disciplina->id}}"> {{$disciplina->titulo}} </a> 
			<a href="/disciplina/{{ $disciplina->id }}/edit"> - Editar </a> 
			<form class="form-inline" method="POST" action="/disciplina/{{ $disciplina->id }}">
				{{ csrf_field() }}
				{{ method_field('delete') }}
				<button class="btn btn-danger" type="submit"> Apagar</button>
			</form>
			</li>
			</div>
		@endforeach
	</ul>
@endsection