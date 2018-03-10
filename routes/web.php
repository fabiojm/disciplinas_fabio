<?php

Route::get('/','DisciplinaController@index');
Route::get('/disciplinas/create','DisciplinaController@create');
Route::post('/disciplinas','DisciplinaController@store');
Route::get('/disciplinas/{disciplina}', 'DisciplinaController@show');
Route::get('/disciplina/{disciplina}/edit', 'DisciplinaController@edit');
Route::patch('/disciplina/{disciplina}','DisciplinaController@update');
Route::delete('/disciplina/{disciplina}', 'DisciplinaController@destroy');