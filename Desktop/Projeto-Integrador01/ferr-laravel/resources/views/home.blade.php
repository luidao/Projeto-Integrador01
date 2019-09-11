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

<div class="itens col-sm-12 col-lg-12 my-12">
    <img class="card-img-top" src="images/mtasferr.jpg" alt="Card image cap">
    
    <div class="text text-center">
        <h1>Aluguel de ferramentas</h1>
        <h2>É simples, rápido e totalmente online.</h2>
    </div>

<div class="categorias row text-center">
    <!-- <div class="col-12 col text-center"> -->
    @if(isset ($categorias))
    @foreach($categorias as $categoria)
    <a class="btn col-lg-2 col-sm-12 my-2 flex-fill" href="/produtos/categoria/{{ $categoria->id_categoria }}">{{ $categoria->nome }}</a>
    @endforeach
    @endif
    <!-- </div> -->
</div>
<h2 class="h1 mt-5">PRINCIPAIS PRODUTOS</h2>

<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="images/banner2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Ferramentas leves</h3>
                <p>Furadeiras e parafusadeiras</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/banner3.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Seu problema resolvido aqui!</h3>
                <p>Alugue ja uma ferramenta e nao fique na mao</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<section class="produtos">
    <div class="itens col-sm-12 col-lg-12 my-12">
        <img class="card-img-top" src="images/fundo1.jpeg" alt="Card image cap">
        <div class="text2 text-center">
            <h1>Conheça nossos produtos</h1>
            <p>É temporário, por quanto tempo você quiser. Dê uma olhada em nosso catálogo.</p>
    </div>
    </div>
    <div class="itens col-sm-4 col-lg-4 my-4">
        <div class="card">
            <img class="card-img-top" src="images/kit1.jpg" width="320px" height="auto" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-center">Kit de Ferramentas</h5>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><strong> </strong></li>
                </ul>
                <a href="/produtos/7" class="d-flex btn btn-primary my-3 justify-content-center alugar">Alugar</a>
            </div>
        </div>
    </div>

</section>

<div class="container">
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
                </div>

                @endif

    </section>
</div>

@include('layouts.footer')
@endsection