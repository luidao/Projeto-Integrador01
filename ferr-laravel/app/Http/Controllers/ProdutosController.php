<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;

class ProdutosController extends Controller
{
    public function listarProdutos(){
        $produtos = Produto::orderBy('nome')->paginate(6);
        // $categorias = Categoria::all();

        return view('produtos', compact('produtos'));
    }

    public function detalheProduto($id){
        $produto = Produto::find($id);  

        return view('produto', compact('produto'));
    }

    public function filtrarCategoria($id){
        $nomeCategoria = Categoria::find($id)->nome; // SELECT nome FROM categoria WHERE id = $id
        $categorias = Categoria::all();
        $produtos = Produto::where('fk_categoria', '=', $id)->paginate(6);

        return view('produtos', compact('nomeCategoria', 'produtos', 'categorias'));

    }
}
