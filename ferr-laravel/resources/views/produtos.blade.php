@extends('layouts.master')

@section('title' , 'Produtos')



@section('content')
<div class="container">
    <div class="row">
        <div class="col mb-5 mt-5">
        <div class="categorias d-flex">
            @if(isset ($categorias))
                @foreach($categorias as $categoria)
        <a class="btn flex-fill" href="/produtos/categoria/{{ $categoria->id_categoria }}">{{ $categoria->nome }}</a>
        @endforeach
        @endif
    </div>
        </div>
    </div>
    <section id="produtos" class="new-products mt-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{ isset($nomeCategoria) ?  $nomeCategoria  : 'Todos os produtos' }}</h1>
                <div class="row">
                    @if(isset($produtos) && count($produtos) > 0)

                    @foreach($produtos as $produto)
                    <div class="itens col-sm-12 col-lg-4 my-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ $produto['imagem'] }}" width="320px" height="400px" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $produto['nome'] }}</h5>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item"><strong>R$ {{ $produto['preco'] }}</strong></li>
                                </ul>
                                <a href="/produtos/{{ $produto->id }}" class="d-flex btn btn-primary my-3 justify-content-center comprar">Comprar</a>
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
@stop