<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrilhasController;
use App\Models\Trilhas;

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

Route::get('/', [Controller::class, 'show'])->name('welcome');

Route::get('/trlhas', [TrilhasController::class,'show'])->name('trilhas.show');
Route::get('/trilhas/sistemas', [TrilhasController::class, 'sistemas'])->name('trilhas.sistemas');
Route::get('/trilhas/jogos', [TrilhasController::class, 'jogos'])->name('trilhas.jogos');
Route::get('/trilhas/animacao', [TrilhasController::class, 'animacao'])->name('trilhas.animacao');
Route::get('/trilhas/design', [TrilhasController::class, 'design'])->name('trilhas.design');
