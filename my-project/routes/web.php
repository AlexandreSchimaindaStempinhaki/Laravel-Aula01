<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/principal', [MainController::class, 'index']);

Route::resource('/aluno', AlunoController::class);
Route::resource('/curso', CursoController::class);
Route::resource('/disciplina', DisciplinaController::class);


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/report/aluno', [AlunoController::class, 'report'])
    ->name('report.aluno');

