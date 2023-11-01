@extends('site')

@section('section')

<main class="container m-5">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>Listagem de Pessoas</h1>
    <a href="{{ route('pessoas.novo') }}" type="button" class="btn btn-success" style="background-color: #FFFFFF; color: #000000;">Nova Pessoa</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#Id</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Telefone</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>      
      <tbody>
        @foreach($pessoas as $pessoa)
        <tr>
          <th scope="row">{{ $pessoa->id }}</th>
          <td>{{ $pessoa->nome }}</td>
          <td>{{ $pessoa->email }}</td>
          <td>{{ $pessoa->telefone }}</td>
          <td>
            <a href="{{ route('pessoas.editar', ['id' => $pessoa->id]) }}" type="button" class="btn btn-primary"  style="background-color: #00235B; color: #FFFFFF;">Editar</a>
            <a href="{{ route('pessoas.apagar', ['id' => $pessoa->id]) }}" type="button" class="btn btn-danger"style="background-color: #E21818; color: #FFFFFF;">Excluir</a>
            <a href="{{ route('favoritos.lista', ['pessoa' => $pessoa->id]) }}" type="button" class="btn btn-secondary" style="background-color: #daa520; color: #FFFFFF;">Indicações</a>
          </td>
        </tr>        
        @endforeach
      </tbody>
    </table>
  </div>
</main>
@endsection
