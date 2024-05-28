<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicoController;


// crud

// Route::get('/servicos', [ServicoController::class, 'index'])->name('servicos.index');
// Route::get('/servicos/create', [ServicoController::class, 'create'])->name('servicos.create');
// Route::post('/servicos', [ServicoController::class, 'store'])->name('servicos.store');
// Route::get('/servicos/{servico}', [ServicoController::class, 'show'])->name('servicos.show');
// Route::get('/servicos/{servico}/edit', [ServicoController::class, 'edit'])->name('servicos.edit');
// Route::put('/servicos/{servico}', [ServicoController::class, 'update'])->name('servicos.update');
// Route::delete('/servicos/{servico}', [ServicoController::class, 'destroy'])->name('servicos.destroy');

Route::resource('servicos', ServicoController::class)->withTrashed()->middleware(['auth', 'verified']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});








require __DIR__.'/auth.php';
