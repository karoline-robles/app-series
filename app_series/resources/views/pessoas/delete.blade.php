@extends('site')

@section('section')
<main class="container m-5">
  <div class="bg-body-tertiary p-5 rounded" style="background-color: #00235B; color: #FFFFFF;">
    <h1>Deletar Usuario</h1>
    <form action="{{ route('pessoas.excluir',['id' => $pessoa->id]) }}" method="post">
    @csrf
      @method('DELETE')
      <p>Tem certeza de que deseja excluir este usuario?</p>
      <a href="{{ URL::previous() }}" class="btn btn-danger" style="background-color: #E21818; color: #FFFFFF;">Cancelar</a>
      <button type="submit" class="btn btn-primary" style="background-color: #00235B; color: #FFFFFF;">Excluir</button>
    </form>
  </div>
</main>
@endsection
