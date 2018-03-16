@extends('master')

@section('content')
<h1>{{ $disciplina->titulo }}</h1>

<p>{{ $disciplina->ementa }}</p>

<a class="btn btn-primary" href="/disciplinas/{{ $disciplina->id }}/turmas/create">Inserir Turma</a>

@endsection