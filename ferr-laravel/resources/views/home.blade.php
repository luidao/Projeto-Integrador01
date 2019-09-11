@extends('layouts.master')

@section('title', 'Home')

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

    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="images/ferramenta.jpeg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Ferramentas do luidao</h3>
                    <p>Quebra e funciona</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/banner3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Seu problema resolvido aqui !</h3>
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

    <div class="categorias row text-center">
        <!-- <div class="col-12 col text-center"> -->
        @if(isset ($categorias))
        @foreach($categorias as $categoria)
        <a class="btn col-lg-2 col-sm-12 my-2 flex-fill" href="/produtos/categoria/{{ $categoria->id_categoria }}">{{ $categoria->nome }}</a>
        @endforeach
        @endif
        <!-- </div> -->
    </div>
    <h1 class="mt-5">PRINCIPAIS PRODUTOS</h1>

    <section id="story" class="second mt-5 mb-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm">
                    <img src="Images/fita.jpg" class="rounded-circle" width="200px" height="200px" alt="">
                </div>
                <div class="col-sm">
                    <img src="Images/fura.jpg" class="rounded-circle" width="200px" height="200px" alt="">
                </div>
                <div class="col-sm">
                    <img src="Images/ferra.jpg" class="rounded-circle" width="200px" height="200px" alt="">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-sm mt-5">
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas malesuada enim in dolor sagittis,
                        et pulvinar velit lobortis. Phasellus sed ante vel elit convallis sodales at sit amet leo. Sed a
                        efficitur lorem, vel cursus turpis. Vivamus imperdiet nibh sed orci rhoncus rutrum. Integer tempor
                        accumsan lectus. Integer vel odio consequat tortor tempus rutrum quis quis dui. Etiam sit amet leo
                        non odio condimentum convallis vel nec felis. Nulla semper, mi quis vestibulum blandit, arcu massa
                        auctor metus, at faucibus elit risus sit amet augue. Nulla luctus dolor id nunc faucibus aliquam.
                        Quisque eu mauris ac enim viverra rhoncus eget in est. Etiam consectetur erat ac ipsum vehicula
                        tempus. Curabitur non urna erat. In sit amet urna pulvinar lorem semper laoreet. Praesent felis sem,
                        pharetra in lacinia at, fringilla in felis. Nullam eleifend et augue nec interdum.<a href="https://unsplash.com">Lorem ipsum</a>, taken by <a href="https://unsplash.com/@joannakosinska">Ipsum lorem nidrazis paendrer</a>!</p>
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
                            <a href="/produtos/{{ $produto->id }}" class="d-flex btn btn-primary my-3 justify-content-center comprar">Comprar</a>
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