@extends('site')

@section('section')
<main class="container m-5">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>Exclusão de Categoria</h1>
    <form action="{{route('categorias.exluir',['id' => $categoria->id])}}" method="post">
    @csrf
      @method('DELETE')
      <p>Tem certeza de que deseja excluir esta categoria?</p>
      <a href="{{ URL::previous() }}" class="btn btn-danger" style="background-color: #E21818; color: #FFFFFF;">Cancelar</a>
      <button type="submit" class="btn btn-primary" style="background-color: #00235B; color: #FFFFFF;">Excluir</button>
    </form>
  </div>
</main>
@endsection