@extends('master')

@section('content')
<h1>{{ $disciplina->titulo }}</h1>

<p>{{ $disciplina->ementa }}</p>

<a class="btn btn-primary" href="/disciplinas/{{ $disciplina->id }}/turmas/create">Inserir Turma</a>
<hr/>

<h1>Turmas</h1>

<br/>
@foreach ($disciplina->turmas as $turma)
    <h2>{{ $turma->ministrante }}</h2>
    <h3>{{ $turma->inicio }}</h3>
    <br/>
@endforeach

@endsection