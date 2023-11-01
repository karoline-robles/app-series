@extends('site')

@section('section')
<main class="container m-5">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>Listagem de Categorias</h1>
    <a href="{{route('categorias.novo')}}" type="button" class="btn btn-success" style="background-color: #FFFFFF; color: #000000;" >Nova Categoria</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NOME</th>
          <th scope="col">DESCRIÇÃO </th>
          <th scope="col">AÇÕES</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categorias as $categoria)
        <tr>
          <th scope="row">{{$categoria->id}}</th>
          <td>{{$categoria->categoria}}</td>
          <td>{{$categoria->descricao}}</td>
          <td>
            <a href="{{route('categorias.editar',['id' => $categoria->id])}}" type="button" class="btn btn-primary"  style="background-color: #00235B; color: #FFFFFF;"  >Editar</a>
            <a href="{{route('categorias.apagar',['id' => $categoria->id])}}" type="button" class="btn btn-danger" style="background-color: #E21818; color: #FFFFFF;" >Excluir</a>
          </td>
        </tr>        
        @endforeach
      </tbody>
    </table>
  </div>
</main>
@endsection