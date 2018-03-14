@extends('master')

@section('content')
	<form method="POST" action="/disciplinas/{{ $disciplina_id }}/turmas">
		{{ csrf_field() }}

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="ministrante" class="for-control">Ministrante:</label>
					<input class="form-control" type="text" name="ministrante" />
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="inicio" class="for-control">Data Inicial:</label>
					<input class="form-control" type="date" name="inicio" />
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="fim" class="for-control">Data Final:</label>
					<input class="form-control" type="date" name="fim" />
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
						<label for="bibliografia" class="for-control">Bibliografia:</label>
						<textarea class="form-control" name="bibliografia"> </textarea> <br/>
				</div>
			</div>
		</div>
		
		<button class="btn btn-primary" type="submit">Salvar</button>
	</form>
@endsection