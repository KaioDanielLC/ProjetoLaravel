<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;


Route::get('/', function () {
    return view('welcome');
});

// aprendendo

Route::get('/teste', function (){
    return view('teste/testerota');
});

Route::any('/any', function (){
    return 'permite qualquer tipo de requisição http(get, post, delete e etc)';
});

Route::match(['get', 'post'],'/match', function (){
    return 'permite só requisições permitidas';
});
// Passando parametros
Route::get('/produtos/{id}', function($id){
    return 'o id do produto é '. $id;
});

// nomeando rotas
Route::get('/news', function(){
    return view('news')->name('noticias');
});

// gupos de rotas
Route::prefix('admim')->group(function(){
    Route::get('/dashboard', function(){
        return "dashboard";
    });
    Route::get('/clientes', function(){
        return "clientes";
    });
    Route::get('/sla', function(){
        return "sla";
    });
});

// Controller
Route::get('/testecon', [ProdutoController::class, 'index']);


// php artinsa make:controller --resource cria um controller com varios metodos como o index, show e etc...


// aprendendo
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
