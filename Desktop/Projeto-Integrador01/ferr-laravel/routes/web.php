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

// use Symfony\Component\Routing\Annotation\Route; //comentei pq tava dando erro, so add o de baixo
use Illuminate\Support\Facades\Route;

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('logout'); 
});

Route::get('/admin', function (){
    return view('admin');
});


Route::get('/produtos/{id}','ProdutosController@detalheProduto');
Route::get('/produtos/categoria/{id}', 'ProdutosController@filtrarCategoria');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/produtos', 'ProdutosController@listarProdutos');
