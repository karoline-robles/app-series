@extends('site')

@section('section')
<main class="container m-5">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>EDITAR DADOS</h1>
    <form action="{{route('pessoas.editar',['id' => $pessoa->id])}}" method="post">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="nome" class="form-label">NOME</label>
        <input type="text" class="form-control" value="{{$pessoa->nome}}" name="nome" id="nome">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">E-MAIL</label>
        <input type="email" class="form-control" value="{{$pessoa->email}}" name="email" id="email">
      </div>
      <div class="mb-3">
        <label for="telefone" class="form-label">TELEFONE</label>
        <input type="text" class="form-control" value="{{$pessoa->telefone}}" name="telefone" id="telefone">
      </div>
      <a href="{{URL::previous()}}" class="btn btn-secondary"style="background-color: #E21818; color: #FFFFFF">Voltar</a>
      <button type="submit" class="btn btn-success"  style="background-color: #00235B; color: #FFFFFF">Salvar</button>
    </form>
  </div>
</main>
@endsection