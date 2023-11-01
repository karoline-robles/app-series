@extends('site')

@section('section')
<main class="container m-5">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>Indicações</h1>
    
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">NOME</th>
            <th scope="col">LANÇAMENTO</th>
            <th scope="col">SINOPSE</th>
          </tr>
        </thead>      
        <tbody>
          @foreach($indicacoes as $indicacao)
          <tr>
            <td>{{$indicacao->NOME}}</td>
            <td>{{$indicacao->DATA_LANCAMENTO}}</td>
            <td>{{$indicacao->SINOPSE}}</td>
          </tr>        
          @endforeach     
        </tbody>
      </table>
      <button type="button" class="btn btn-success" style="background-color: #E21818; color: #FFFFFF;" onclick="window.history.back()">Voltar</button>

  </div>
</main>
@endsection
