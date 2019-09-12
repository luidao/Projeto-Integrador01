@extends('layouts.master')

@section('title', 'Editar produto')

@section('content')
@if(isset($produto))
<section id="produtos" class="new-products mt-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <h1>Excluir {{$produto->nome}}?</h1>
            </div>

            <form action="/admin/produtos/excluir/{{$produto->id_produto}}" enctype="multipart/form-data" method="POST" class="col-md-6 mt-1">
                {{csrf_field()}}
                <div class="form-group">
                    <input readonly disabled type="text" name="nome" id="nome" class="form-control" value="{{ $produto->nome }}">
                </div>
                <div class="form-group">
                    <input readonly disabled type="text" name="nome" id="nome" class="form-control" value="{{ $produto->categoria->nome }}">
                </div>
                <div class="form-group">
                    <input readonly disabled type="number" name="preco" id="preco" class="form-control" value="{{ $produto->preco }}">
                </div>
                <div class="form-group">
                    <textarea readonly disabled name="descricao" id="descricao" class="form-control" rows="2">{{ $produto->descricao }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger"> Excluir</button>
                </div>
            </form>
            <div class="col-md-4">
                @if(isset($produto->imagem))
                <img src="{{ $produto->imagem }}" class="img-thumbnail" alt="capa de {{ $produto->nome }}">
                @endif
            </div>
        </div>
    </div>
</section>
@else
<section class="container mt-5">
    <div class="alert alert-danger mt-5">Produto não encontrado</div>
    <a href="/admin" class="btn btn-primary">voltar</a>
</section>
@endif
@stop