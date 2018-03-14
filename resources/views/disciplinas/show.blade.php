@extends('master')

@section('content')
<h1>{{ $disciplina->titulo }}</h1>

<p>{{ $disciplina->ementa }}</p>

<a class="btn btn-primary" href="/disciplinas/{{ $disciplina->id }}/turmas/create">Inserir Turma</a>
<hr/>

<h1>Turmas</h1>

<br/>
@foreach ($disciplina->turmas->sortByDesc('inicio') as $turma)
    <h2>{{ $turma->ministrante }}</h2>
    <h3>{{ Carbon\Carbon::parse($turma->inicio)->format('d/m/Y') }}</h3>
    <br/>
@endforeach

@endsection