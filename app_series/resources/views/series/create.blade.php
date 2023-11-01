@extends('site')

@section('section')
<main class="container m-5">
  <div class="bg-body-tertiary p-5 rounded" style="background-color: #00235B; color: #FFFFFF;">
    <h1>Cadastro de Série</h1>
    <form action="{{route('cadastro.serie')}}" method="post">
      @csrf
      <div class="mb-3">
        <label for="nome" class="form-label">NOME</label>
        <input type="text" class="form-control" name="nome" id="nome">
      </div>
      <div class="mb-3">
        <label for="sinopse" class="form-label">SINOPSE</label>
        <input type="text" class="form-control" name="sinopse" id="sinopse">
      </div>
      <div class="mb-3">
        <label for="data_lancamento" class="form-label">DATA DE LANÇAMENTO</label>
        <input type="date" class="form-control" name="data_lancamento" id="data_lancamento">
      </div>
      <div class="mb-3">
        <label for="id_categoria" class="form-label">CATEGORIA</label>
        <select name="id_categoria" class="form-select">
          <option></option>
          @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
          @endforeach  
        </select>
      </div>     
      </div>
      <a href="{{ URL::previous() }}" class="btn btn-secondary"style="background-color: #00235B; color: #FFFFFF;">Voltar</a>
      <button type="submit" class="btn btn-success" style="background-color: #E21818; color: #FFFFFF;">Salvar</button>
    </form>
  </div>

</main>
@endsection
