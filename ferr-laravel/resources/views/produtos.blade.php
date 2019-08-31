@extends('layouts.master')

@section('title')
    Produtos
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col mb-5 mt-5">
        <div class="categorias d-flex">
        <a class="btn btn-primary p-2 flex-fill" href="/produtos/categoria/id">Carpintaria</a>
        <a class="btn btn-primary p-2 flex-fill" href="/produtos/categoria/id">Demolição</a>
        <a class="btn btn-primary p-2 flex-fill" href="/produtos/categoria/id">Jardinagem</a>
        <a class="btn btn-primary p-2 flex-fill" href="/produtos/categoria/id">Limpeza</a>
        <a class="btn btn-primary p-2 flex-fill" href="/produtos/categoria/id">Cortes</a>
    </div>
        </div>
    </div>
    <section id="produtos" class="new-products mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2>categorias</h2>

                <ul class="categorias">
                    <li><a href="/produtos">Todos os produtos</a></li>
                    @if(isset($categorias))
                        @foreach($categorias as $categoria)
                            <li><a href="/produtos/categoria/{{ $categoria->id_categoria }}">{{ $categoria->nome }}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="col-sm-8">
                <h1>{{ isset($nomeCategoria) ? $nomeCategoria : 'Todos os produtos' }}</h1>

                <div class="row">
                    @if(isset($produtos) && count($produtos) > 0)

                    @foreach($produtos as $produto)
                    <div class="livro col-sm-12 col-lg-4 my-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ $produto['imagem'] }}" width="320px" height="400px" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $produto['nome'] }}</h5>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item"><strong>R$ {{ $produto['preco'] }}</strong></li>
                                </ul>
                                <a href="/produtos/{{ $produto->id_produto }}" class="d-flex btn btn-primary my-3 justify-content-center comprar">Comprar</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-lg-12">
                        {{ $produtos->links() }}
                    </div>
                    @else

                    <div class="col text-center">
                        <span class="alert alert-info">Nenhum produto para exibir</span>
                    </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

</div>
@endsection