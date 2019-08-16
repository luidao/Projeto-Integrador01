@extends('layouts.master')

@section('title')
    Login
@endsection

@section('conteudo')



<main>
    <form class="jumbotron" method="post">
      <div class="form-group ">
          <h1>Login</h1>
        </div>

        <div class="form-group ">
          <label for="nome">Usuário</label>
          <input type="text" name="nome" class="form-control col-sm-4" value="">
        </div>

        <div class="form-group">
          <label for="senha">Senha</label>
          <input type="password" name="senha" class="form-control col-sm-4" value="">   
        </div>

        <button type="button" class="btn btn-primary" name="button">Enviar</button>
  </form>

    <!--  Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Esqueci minha senha</a>
    </div>

  </div>
</div>
</main>

@endsection
