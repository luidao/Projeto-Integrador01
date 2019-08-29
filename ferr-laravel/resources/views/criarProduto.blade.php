@extends('layouts.master')

@section('title', 'Novo produto')

@section('content')
<section id="produtos" class="new-products mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5">
                <h1>Cadastrar novo produto</h1>
                <small>Insira as informações no formulário abaixo</small>

                <form action="/admin/produtos/novo"  enctype="multipart/form-data" method="POST" class="mt-5">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="nome">nome</label>
                        <input type="text" name="nome" id="nome" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="categoria">categoria</label>
                        <select class="form-control" name="categoria" id="categoria">
                            <option selected disabled>Selecione uma opção</option>

                            @if(isset($categorias))
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id_categoria }}">{{ $categoria->nome }}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editora">editora</label>
                        <select class="form-control" name="editora" id="editora">
                            <option selected disabled>Selecione uma opção</option>

                            @if(isset($editoras))
                            @foreach($editoras as $editora)
                                <option value="{{ $editora->id_editora }}">{{ $editora->nome }}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                
                    <div class="form-group">
                        <label for="preco">preço</label>
                        <input type="number" name="preco" id="preco" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="descricao">descrição</label>
                        <textarea name="descricao" id="descricao" class="form-control" rows="2" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="imagem">foto do produto</label>
                        <input type='file' id="imagem" name="imagem" accept="image/*" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@stop