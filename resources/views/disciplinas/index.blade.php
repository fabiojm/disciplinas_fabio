@extends('master')

@section('content')
	<form method="POST" action="/disciplinas/search">
	    {{ csrf_field() }}
	    <input name="text" type="text">
	    <button  class="btn btn-info" type="submit"> Buscar </button>
	</form>

@auth
	<a class="btn btn-primary" href="/disciplinas/create">Cadastrar disciplina</a>
@endauth
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