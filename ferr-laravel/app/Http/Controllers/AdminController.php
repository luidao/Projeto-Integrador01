<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $produtos = Produto::all();
        $categorias = Categoria::all();

        return view('admin', compact('produtos', 'categorias'));
    }

    public function criarProduto(){
        $categorias = Categoria::all();
        

        return view('criarProduto', compact('categorias'));
    }

    public function insertProduto(Request $request){ // $_POST
        $produto = new Produto();

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->fk_categoria = $request->categoria;
        $produto->fk_marca = $request->marca;
        $produto->preco = $request->preco;

        $arquivo = $request->file('imagem');
        if (!empty($arquivo)) {
            // salvando
            $nomePasta = 'uploads';
            $arquivo->storePublicly($nomePasta);
            $caminhoAbsoluto = public_path()."/storage/$nomePasta";
            $nomeArquivo = $arquivo->getClientOriginalName();
            $caminhoRelativo = "/storage/$nomePasta/$nomeArquivo";
            // movendo
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
            $produto->imagem = $caminhoRelativo;
        }

        $produto->save();

        return redirect('/admin')->with('mensagem', 'Produto criado com sucesso');

    }

    public function editarProduto($id){

        $produto = Produto::find($id);
        $categorias = Categoria::all();
        

        return view('editarProduto', compact('produto', 'categorias'));
    }

    public function updateProduto(Request $request, $id){
        $produto = Produto::find($id);

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->fk_categoria = $request->categoria;
        $produto->fk_marca = $request->marca;
        $produto->preco = $request->preco;

        $arquivo = $request->file('imagem');
        if (!empty($arquivo)) {
            // salvando
            $nomePasta = 'uploads';
            $arquivo->storePublicly($nomePasta);
            $caminhoAbsoluto = public_path()."/storage/$nomePasta";
            $nomeArquivo = $arquivo->getClientOriginalName();
            $caminhoRelativo = "/storage/$nomePasta/$nomeArquivo";
            // movendo
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
            $produto->imagem = $caminhoRelativo;
        }

        $produto->save();

        return redirect('/admin')->with('mensagem', 'Produto alterado com sucesso');
    }

    public function excluirProduto($id){
        $produto = Produto::find($id);

        return view('deletarProduto', compact('produto'));
    }

    public function deleteProduto($id){
        $produto = Produto::find($id);
        $nomeProduto = $produto->nome;
        $produto->delete();

        return redirect('/admin')->with('mensagem', $nomeProduto .' excluido com sucesso');
    }
}
