
@extends('layouts.master')

@section('title', 'Ferramenta')

@section('content')
<section id="produtos" class="new-products mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-4 col text-center">
                <img class="card-img-top" src="{{ $produto->imagem}}" alt="Card image cap">
            </div>
            <div class="col-md-6 col">
                <div class="card-body">
                    <h1>{{ $produto->nome }}</h1>
                    <p>{{ $produto->descricao }}</p>
                    <p class="badge badge-secondary">{{ $produto->categoria->nome }}</p>
                    <p>{{ $produto->nome }}</p>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><strong>R$ {{ $produto->preco }}</strong></li>
                    </ul>
                    <a href="#" class="d-flex btn btn-primary my-3 justify-content-center comprar">Alugue</a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</section>
<section class="mt-5 pt-5 mb-5">
    <div class="container">
        <img src="Images/banner3.jpg" class="img-full" alt="">
    </div>
</section>
@include('layouts.footer')
@stop