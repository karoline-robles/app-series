@extends('site')

@section('section')
<main class="container m-5">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>Cadastro de Categoria</h1>
    <form action="{{route('cadastro.categoria')}}" method="post">
      @csrf

      <div class="mb-3">
        <label for="categoria" class="form-label">Nome da Categoria</label>
        <input type="text"  class="form-control" name="categoria" id="categoria">
      </div>
      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição da Categoria</label>
        <input type="text" class="form-control" name="descricao" id="descricao">
      </div>      
      <a href="{{URL::previous()}}" class="btn btn-secondary"  style="background-color: #E21818; color: #FFFFFF;" >Voltar</a>
      <button type="submit" class="btn btn-success" style="background-color: #00235B; color: #FFFFFF;"> Salvar</button>
    </form>
  </div>
</main>
@endsection