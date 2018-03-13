@extends('master')

@section('content')
	<form method="POST" action="/disciplinas">
		{{ csrf_field() }}

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="titulo" class="for-control">Título:</label>
					<input class="form-control" type="text" name="titulo">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
						<label for="ementa" class="for-control">Ementa:</label>
						<textarea class="form-control" name="ementa"> </textarea> <br/>
				</div>
			</div>
		</div>
				<button class="btn btn-primary" type="submit">Salvar</button>
	</form>
@endsection