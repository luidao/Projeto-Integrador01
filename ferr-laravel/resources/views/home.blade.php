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
    <h1>Aluguel de <span class="laranj">ferramentas</span></h1> 
    <p>É <span class="laranj">simples</span>, <span class="laranj">rápido</span> e totalmente <span class="laranj">online</span>.</p>
</div>

<div class="banner1">
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
                    <a class="nav-link" href="/produtos/categoria/{{ $categoria->id }}"><div class="bannerCategoria"  style="background-image: url({{ $categoria->images }})">
                        <h1>{{ $categoria->nome }}</h1>
                    </div></a>
                    
                    <!-- <p>{{$categoria->nome}}</p> -->
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


<div class="banner2">
    <div class="text2 text-center">
        <h1>É <span class="laranj">simples</span>.</h1>
        <br>
        <h2>Nós fazemos todo o trabalho duro</h3>
        <p>Para que você <span class="laranj">trabalhe duro</span>.</p>
    </div>
    
</div>


</section>
</div>

@include('layouts.footer')
@endsection
