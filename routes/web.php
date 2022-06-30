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

//Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');
Route::get('/',[PrincipalController::class, 'principal'])->name('site.index');

Route::get('/about', [PrincipalController::class, 'sobre'])->name('site.sobrenos');
//Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contact', [PrincipalController::class, 'contato'])->name('site.contato');
Route::post('/contact', [PrincipalController::class, 'contato'])->name('site.contato');
//Route::get('/contato', 'ContatoController@contato')->name('site.contato');


Route::get('/login', function(){ return "Login"; })->name('site.login');

Route::prefix('/app')->group(function (){
    Route::get('/clientes', function (){ return "Clientes"; })->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('fornecedores');
    Route::get('/produtos', function (){ return "produtos"; })->name('produtos');
});
//Route::prefix('/app')->group(function() {
//    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
//    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
//    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
//});
Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
});
