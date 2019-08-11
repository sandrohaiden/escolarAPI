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

Route::get('/professores/{id}/', 'ProfessorController@deletar');

Route::post('/professores/{id}/', 'ProfessorController@atualizar');

//%%%%%%%%%%%%%%%%%%%%%%%%% Curso

Route::get('/curso/', 'CursoController@lista');

Route::post('/curso/', 'CursoController@cadastrar');

Route::get('/curso/{id}/', 'CursoController@deletar');

Route::post('/curso/{id}/', 'CursoController@atualizar');

//%%%%%%%%%%%%%%%%%%%%%%%%% ALuno

Route::get('/aluno/', 'AlunoController@lista');

Route::post('/aluno/', 'AlunoController@cadastrar');

Route::get('/aluno/{id}/', 'AlunoController@deletar');

Route::post('/aluno/{id}/', 'AlunoController@atualizar');