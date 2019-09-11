<?php

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


// Route::get('/', 'HomeController@home');

// use App\Http\Controllers\ProdutosController;

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('logout'); 
});


Route::get('/produtos/{id}','ProdutosController@detalheProduto');
Route::get('/produtos/categoria/{id}', 'ProdutosController@filtrarCategoria');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/produtos', 'ProdutosController@listarProdutos');


    Route::get('/admin', 'AdminController@index');

    Route::get('/admin/produtos/novo', 'AdminController@criarProduto');
    Route::post('/admin/produtos/novo', 'AdminController@insertProduto');

    Route::get('/admin/produtos/{id}', 'AdminController@editarProduto');
    Route::post('/admin/produtos/{id}', 'AdminController@updateProduto');

    Route::get('/admin/produtos/excluir/{id}', 'AdminController@excluirProduto');
    Route::post('/admin/produtos/excluir/{id}', 'AdminController@deleteProduto');
