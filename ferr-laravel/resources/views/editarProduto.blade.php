@extends('layouts.master')

@section('title', 'Editar produto')

@section('content')
@if(isset($produto))
<div class="princi" id="princi">
    <section id="produtos" class="new-products mt-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12">
                    <h1>Editar produto</h1>
                    <small>Insira as informações no formulário abaixo</small>
                </div>

                <form action="/admin/produtos/{{$produto->id}}" enctype="multipart/form-data" method="POST" class="col-md-6 mt-5">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" value="{{ $produto->nome }}">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Marca</label>
                        <select class="form-control" name="marca" id="marca">
                            <option selected disabled>Selecione uma opção</option>

                            @if(isset($marcas))
                            @foreach($marcas as $marca)
                            <option value="{{ $marca->id}}" {{($marca->id == $produto->fk_marca) ? 'selected' : ''}}> {{ $marca->nome }}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <select class="form-control" name="categoria" id="categoria">
                            <option selected disabled>Selecione uma opção</option>

                            @if(isset($categorias))
                            @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id}}" {{($categoria->id == $produto->fk_categoria) ? 'selected' : ''}}> {{ $categoria->nome }}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="preco">Preço</label>
                        <input type="number" name="preco" id="preco" class="form-control" value="{{ $produto->preco }}">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea name="descricao" id="descricao" class="form-control" rows="2">{{ $produto->descricao }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="quantidade">Quantidade</label>
                        <input type="number" name="quantidade" id="quantidade" class="form-control" value="{{ $produto->quantidade }}">
                    </div>

                    <div class="form-group">
                        <label for="imagem">Foto do produto</label>
                        <input type="file" id="imagem" name="imagem" accept="image/*" class="form-control" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn"> Enviar</button>
                    </div>
                </form>
                <div class="col-md-4">
                    <img src="{{ $produto->imagem }}" class="img-thumbnail" alt="capa de {{ $produto->nome }}">
                </div>
            </div>
        </div>
    </section>
</div>
@else
<section class="container mt-5">
    <div class="alert alert-danger mt-5">Produto não encontrado</div>
    <a href="/admin" class="btn">voltar</a>
</section>
@endif
@stop