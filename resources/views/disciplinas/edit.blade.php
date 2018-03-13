@extends('master')

@section('content')
	<form method="POST" action="/disciplina/{{ $disciplina->id }}">
		{{ csrf_field() }}
		{{ method_field('patch') }}

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="titulo" class="for-control">Título:</label>
					<input class="form-control" type="text" name="titulo" value="{{ $disciplina->titulo }}">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
						<label for="ementa" class="for-control">Ementa:</label>
						<textarea class="form-control" name="ementa">{{ $disciplina->ementa }}</textarea> <br/>
				</div>
			</div>
		</div>


		<button class="btn btn-primary" type="submit">Salvar</button>
	


	</form>
@endsection