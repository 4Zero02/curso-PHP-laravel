<?php

use App\Http\Controllers\{PrincipalController, TesteController, FornecedorController};
//use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');

Route::get('/',[PrincipalController::class, 'principal'])->name('site.index');

Route::get('/about', [PrincipalController::class, 'sobre'])->name('site.sobrenos');

Route::get('/contact', [PrincipalController::class, 'contato'])->name('site.contato');

Route::get('/login', function (){ return "Login"; })->name('site.login');

Route::prefix('/app')->group(function (){
    Route::get('/clientes', function (){ return "Clientes"; })->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('fornecedores');
    Route::get('/produtos', function (){ return "produtos"; })->name('produtos');
});

Route::get(
    '/contact/{nome}/{categoria_id?}',
    function(
        String $nome,
        int $categoria_id = 1 // 1 - informação
        ) {
    echo "Chegamos aqui: $nome - $categoria_id";
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

Route::get('/rota1', function (){
    echo 'Rota 1';
})->name('site.rota1');

//Route::get('/rota2', function (){
//    return redirect()->route('site.rota1');
//})->name('site.rota2');

Route::fallback(function () {
   echo 'A rota acessada não existe. <a href="' .\route('site.index').'">Clique aqui </a> para retornar à página principal';
});
