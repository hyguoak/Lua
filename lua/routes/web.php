<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrilhasController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [HomeController::class, 'show'])->name('trilhas.show');

Route::get('/trlhas', [TrilhasController::class,'show'])->name('trilhas.show');
Route::get('/trilhas/sistemas', [TrilhasController::class, 'sistemas'])->name('trilhas.sistemas');
Route::get('/trilhas/jogos', [TrilhasController::class, 'jogos'])->name('trilhas.jogos');
Route::get('/trilhas/animacao', [TrilhasController::class, 'animacao'])->name('trilhas.animacao');
Route::get('/trilhas/design', [TrilhasController::class, 'design'])->name('trilhas.design');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
