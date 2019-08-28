@extends('layouts.app')

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
        <a class="btn btn-primary p-2 flex-fill" href="/produtos/categoria/id">Carpintaria</a>
        <a class="btn btn-primary p-2 flex-fill" href="/produtos/categoria/id">Demolição</a>
        <a class="btn btn-primary p-2 flex-fill" href="/produtos/categoria/id">Jardinagem</a>
        <a class="btn btn-primary p-2 flex-fill" href="/produtos/categoria/id">Limpeza</a>
        <a class="btn btn-primary p-2 flex-fill" href="/produtos/categoria/id">Cortes</a>
    </div>
    <h1 class="mt-5">PRINCIPAIS PRODUTOS</h1>
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
    </section>
</div>
@endsection
