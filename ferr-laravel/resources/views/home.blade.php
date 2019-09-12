@extends('layouts.master')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

            </div>
        </div>
    </div> -->
</div>
<div class="text text-center">
    <h1>Aluguel de ferramentas</h1>
    <p>É simples, rápido e totalmente online.</p>
</div>

<div class="banner1">
</div>


<div class="categorias row text-center">
    <!-- <div class="col-12 col text-center"> -->
    @if(isset ($categorias))
    @foreach($categorias as $categoria)
    <a class="btn col-lg-2 col-sm-12 my-2 flex-fill"
        href="/produtos/categoria/{{ $categoria->id_categoria }}">{{ $categoria->nome }}</a>
    @endforeach
    @endif
    <!-- </div> -->
</div>
<div class="container">
    <h2 class="h1 mt-5">CATEGORIAS</h2>
</div>


<section id="story" class="second mt-5 mb-5">
    <div class="container text-center">
        <div class="row imagem">
            <div class="col-sm">

            </div>

            <div class="clearfix"></div>
        </div>
        <div class="container">
            <div class="row image-home">
                @if(isset($categorias))
                @foreach($categorias as $categoria)
                <div class="col-lg-6">
                    <div class="bannerCategoria" style="background-image: url({{ $imagemCategoria }})">
                        <h1>{{ isset($nomeCategoria) ?  $nomeCategoria  : 'Todos os produtos' }}</h1>
                    </div>
                    <p>{{$categoria->nome}}</p>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>

    </div>
</section>

<div class="col-lg-6 col-sm-12">

</div>

<!-- <div class="container">
    <section class="produtos d-flex flex-wrap justify-content-between mb-5">

        <div class="card mt-3">
            <div class="row">
                @if(isset($produtos) && count($produtos) > 0)

                @foreach($produtos as $produto)
                <div class="itens col-sm-12 col-lg-4 my-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ $produto['imagem'] }}" width="320px" height="auto
                            " alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $produto['nome'] }}</h5>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><strong>R$ {{ $produto['preco'] }}</strong></li>
                            </ul>
                            <a href="/produtos/{{ $produto->id }}" class="d-flex btn btn-primary my-3 justify-content-center alugar">Alugar</a>
                        </div>
                    </div>
                </div>
                @endforeach

                @else

                <div class="col text-center">
                    <span class="alert alert-info">Nenhum produto para exibir</span>
                </div> -->

@endif

</section>
</div>

@include('layouts.footer')
@endsection
