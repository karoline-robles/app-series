@extends('site')

@section('section')
<main class="container m-5">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>Listagem de Series</h1>
    <a href="{{route('series.novo')}}" type="button" class="btn btn-success" style="background-color: #FFFFFF; color: #000000;" >Nova Serie</a>
    <form method="POST" action="{{ route('favoritos.favoritar') }}">
              @csrf
              @method('POST')      
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">LANÇAMENTO</th>
            <th scope="col">SINOPSE</th>
            <th scope="col">CATEGORIA</th>
            <th scope="col">AÇÕES</th>

          </tr>
        </thead>      
        <tbody>
          @foreach($series as $serie)
          <tr>
            <th scope="row">{{$serie->id}}</th>
            <td>{{$serie->nome}}</td>
            <td>{{$serie->data_lancamento}}</td>
            <td>{{$serie->sinopse}}</td>
            <td>{{$serie->categoria->categoria}}</td>
            <td>
              <a href="{{route('series.editar',['id' => $serie->id])}}" type="button" class="btn btn-primary"  style="background-color: #00235B; color: #FFFFFF;" >Editar</a>
              <a href="{{route('series.apagar',['id' => $serie->id])}}" type="button" class="btn btn-danger" style="background-color: #E21818; color: #FFFFFF;">Excluir</a>
              <a href="{{ route('favoritos.index',['id' => $serie->id])}}" type="button" class="btn btn-secondary" style="background-color: #daa520; color: #FFFFFF;" >Indicar</a>
          </tr>        
          @endforeach     
        </tbody>
      </table>
    </form>
  </div>
</main>
@endsection