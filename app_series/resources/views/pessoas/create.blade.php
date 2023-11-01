@extends('site')

@section('section')
<main class="container m-5">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>Cadastrar Usuario</h1>
    <form action="{{ route('cadastro.pessoa') }}" method="post">
      @csrf
      <div class="mb-3">
        <label for="nome" class="form-label">NOME</label>
        <input type="text" class="form-control" name="nome" id="nome">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">E-MAIL</label>
        <input type="email" class="form-control" name="email" id="email">
      </div>
      <div class="mb-3">
        <label for="telefone" class="form-label">TELEFONE</label>
        <input type="tel" class="form-control" name="telefone" id="telefone">
      </div>
      <a href="{{ URL::previous() }}" class="btn btn-secondary" style="background-color: #00235B; color: #FFFFFF;">VOLTAR</a>
      <button type="submit" class="btn btn-success" style="background-color: #E21818; color: #FFFFFF;">SALVAR</button>
    </form>
  </div>
</main>
@endsection
