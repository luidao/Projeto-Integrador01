@extends('layouts.master')

@section('title', 'Inicio')

@section('content')
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('Images/banner1.jpg')">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('Images/banner2.jpg')">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
    </div>
</header>
<section id="produtos" class="new-products mt-5">
    <div class="container text-center">
        <h1>Mais vendidos</h1>
        <div class="row">

            @if(isset($produtos))

            @foreach($produtos as $produto)
            <div class="livro col-sm-12 col-lg-4 my-4">
                <div class="card">
                    <img class="card-img-top" src="{{ $produto['imagem'] }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $produto->nome}}</h5>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><strong>R$ {{ $produto->preco }} por dia</strong></li>
                        </ul>
                        <a href="/produtos/{{ $produto['id_produto'] }}" class="d-flex btn my-3 justify-content-center alugar">Alugar</a>
                    </div>
                </div>
            </div>
            @endforeach

            @endif

            <div class="clearfix"></div>
        </div>
    </div>
</section>
<section class="mt-5 pt-5 mb-5">
    <div class="container">
        <img src="Images/banner3.jpg" class="img-full" alt="">
    </div>
</section>
<section id="story" class="second mt-5">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm">
                <img src="Images/rounded.jpg" class="rounded-circle" width="200px" height="200px" alt="">
            </div>
            <div class="col-sm">
                <img src="Images/rounded2.jpg" class="rounded-circle" width="200px" height="200px" alt="">
            </div>
            <div class="col-sm">
                <img src="Images/rounded3.jpg" class="rounded-circle" width="200px" height="200px" alt="">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col-sm">
                <h1 class="display-4 text-center title-story">Our story</h1>
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
@stop