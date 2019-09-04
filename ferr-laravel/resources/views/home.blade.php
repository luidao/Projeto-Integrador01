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

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/banner1.jpg" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/banner2.jpg" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/banner3.jpg" alt="Terceiro Slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>

    <div class="categorias d-flex">
            @if(isset ($categorias))
                @foreach($categorias as $categoria)
        <a class="btn flex-fill" href="/produtos/categoria/{{ $categoria->id_categoria }}">{{ $categoria->nome }}</a>
        @endforeach
        @endif
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
<section class="produtos d-flex flex-wrap justify-content-between mb-5">
        <div class="card mt-3">
            <div class="card-body">
                <a href="/produtos/id"><img src="/images/andaime2.jpg" class="img-thumbnail" alt="nome produto"></a>

                <h5 class="card-title mt-2">Nome Produto</h5>
                <h4>R$30.00</h4>

            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <a href="/produtos/id"><img src="/images/andaime2.jpg" class="img-thumbnail" alt="nome produto"></a>

                <h5 class="card-title mt-2">Nome Produto</h5>
                <h4>R$30.00</h4>

            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <a href="/produtos/id"><img src="/images/andaime2.jpg" class="img-thumbnail" alt="nome produto"></a>

                <h5 class="card-title mt-2">Nome Produto</h5>
                <h4>R$30.00</h4>

            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <a href="/produtos/id"><img src="/images/andaime2.jpg" class="img-thumbnail" alt="nome produto"></a>

                <h5 class="card-title mt-2">Nome Produto</h5>
                <h4>R$30.00</h4>

            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </section>
    
</div>
@endsection
