<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Produto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
   
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produtos = Produto::all();
        $categorias = Categoria::all();
        
        return view('home', compact('categorias', 'produtos'));
    }

    public function filtrarCategoria(){
        // $imagensCategorias = Categoria::find($id)->images;
        $categorias = Categoria::all();
        $imagemCategoria = Categoria::all();
    

        return view('home', compact('categorias', 'imagemCategoria'));

    }
}
