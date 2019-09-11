<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;  

class ProdutosController extends Controller
{
    public function listarProdutos(){
        $produtos = Produto::orderBy('nome')->paginate(6);
        // $categorias = Categoria::all();

        return view('produtos', compact('produtos'));
    }

    public function detalheProduto($id){
        $produto = Produto::find($id);  

        return view('pgproduto', compact('produto'));
    }

    public function filtrarCategoria($id){
        // $imagensCategorias = Categoria::find($id)->images;
        $categorias = Categoria::all();
        $nomeCategoria = Categoria::find($id)->nome;
        $imagemCategoria = Categoria::find($id)->images;
    
        $produtos = Produto::where('fk_categoria', '=', $id)->paginate(6);

        return view('produtos', compact('produtos', 'categorias','nomeCategoria', 'imagemCategoria'));

    }
}
