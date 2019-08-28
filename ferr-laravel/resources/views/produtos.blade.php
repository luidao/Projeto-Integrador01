@extends('layouts.master')

@section('title')
    Produtos
@endsection

@section('conteudo')
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
    <div class="row">
        <div class="col">
            <h1>Todos os produtos</h1>
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
    </div>
</div>
@endsection