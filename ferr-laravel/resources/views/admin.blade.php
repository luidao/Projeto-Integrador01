@extends('layouts.master')

@section('title', 'admin')

@section('content')
<div class="princi" id="princi">
    <section id="produtos" class="new-products mt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    @if(session('mensagem'))
                    <div class="alert alert-info">
                        {{session('mensagem')}}
                    </div>
                    @endif
                </div>
            </div>
            <div class="row">

                <div class="col">
                    <h2>Produtos
                        <a href="/admin/produtos/novo" class="btn mb-2">Novo produto</a>
                    </h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <td class="laranj">id</td>
                                <td class="laranj">nome</td>
                                <td class="laranj">categoria</td>
                                <td class="laranj">ações</td>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($produtos) && count($produtos) > 0)
                            @foreach($produtos as $produto)
                            <tr>
                                <td>
                                    <a href="/admin/produtos/{{$produto->id}}">{{$produto->id}}</a>
                                </td>
                                <td>
                                    <a href="/admin/produtos/{{$produto->id}}">{{$produto->nome}}</a>
                                </td>
                                <td>
                                    <a href="/admin/produtos/{{$produto->id}}">{{$produto->categoria->nome}}</a>
                                </td>
                                <td>
                                    <a href="/admin/produtos/{{ $produto->id }}" class="btn">editar</a>
                                    <a href="/admin/produtos/excluir/{{ $produto->id }}" class="btn">excluir</a>
                                </td>
                            </tr>
                            @endforeach
                            @else

                            <tr class="alert alert-info">
                                <td>Nenhum produto para exibir</td>
                            </tr>

                            @endif
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
</div>
@stop