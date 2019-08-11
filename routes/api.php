<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//%%%%%%%%%%%%%%%%%%%%%%%%% Professor
Route::get('/professores/', 'ProfessorController@lista');

Route::post('/professores/', 'ProfessorController@cadastrar');

Route::delete('/professores/{id}/', 'ProfessorController@deletar');

Route::put('/professores/{id}/', 'ProfessorController@atualizar');

//%%%%%%%%%%%%%%%%%%%%%%%%% Curso

Route::get('/curso/', 'CursoController@lista');

Route::post('/curso/', 'CursoController@cadastrar');

Route::delete('/curso/{id}/', 'CursoController@deletar');

Route::put('/curso/{id}/', 'CursoController@atualizar');

//%%%%%%%%%%%%%%%%%%%%%%%%% ALuno

Route::get('/aluno/', 'AlunoController@lista');

Route::post('/aluno/', 'AlunoController@cadastrar');

Route::delete('/aluno/{id}/', 'AlunoController@deletar');

Route::put('/aluno/{id}/', 'AlunoController@atualizar');