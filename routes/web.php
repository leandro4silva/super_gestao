<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProvidersController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;

use App\Http\Middleware\LogAccessMiddleware;

Route::middleware(LogAccessMiddleware::class)->get('/', [MainController::class, 'index'])->name('site.mainIndex');
Route::get('/about', [AboutController::class, 'index'])->name('site.aboutIndex');

Route::get('/contact', [ContactController::class, 'index'])->name('site.contactIndex')->middleware(LogAccessMiddleware::class);
Route::post('/contact', [ContactController::class, 'create'])->name('site.contactCreate');

Route::get('/login', function () {
    return 'login'; 
});

Route::prefix('/app')->group(function () {
    Route::get('/customer', function () {
        return 'clientes';
    });
    
    Route::get('/providers', [ProvidersController::class, 'index'])->name('app.providersIndex');
    
    Route::get('/products', function () {
        return 'produtos'; 
    });
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'index']);

Route::fallback(function () {
    return "Pagina não encontrada, <a href='". route('site.mainIndex') ."'>clique aqui</a> para ir para a pagina inicial!";
});


//REGULAR EXPRESSION WITH PARAMS EXAMPLE

// Route::get('/contact/{id}/{name?}', function (int $id, string $name) {
//     echo "Estamos aqui $name = $id";
// })->where('id', '[0-9]+')->where('name', '[A-Za-z]+');


//REDIRECT EXAMPLE

// Route::get('/rota1', function () {
//     return 'rota1';
// })->name('site.rota1');

// Route::get('/rota2', function () {
//     return redirect()->route('site.rota1');
// })->name('site.rota2');


