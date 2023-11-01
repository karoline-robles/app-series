@extends('site')

@section('section')
<main class="container m-5">
  <div class="bg-body-tertiary p-5 rounded" style="background-color: #00235B; color: #FFFFFF;">
    <h1>Editar Série</h1>
    <form action="{{ route('series.editar', $serie->id) }}" method="post">
      @csrf
      @method('PUT')  {{-- Use o método PUT para atualizar os dados --}}
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{ $serie->nome }}">
      </div>
      <div class="mb-3">
        <label for="sinopse" class="form-label">Sinopse</label>
        <input type="text" class="form-control" name="sinopse" id="sinopse" value="{{ $serie->sinopse }}">
      </div>
      <div class="mb-3">
        <label for="data_lancamento" class="form-label">Data de Lançamento</label>
        <input type="date" class="form-control" name="data_lancamento" id="data_lancamento" value="{{ $serie->data_lancamento }}">
      </div>
      <div class="mb-3">
        <label for="id_categoria" class="form-label">Categoria</label>
        <select name="id_categoria" class="form-select">
          @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}" {{ $serie->id_categoria == $categoria->id ? 'selected' : '' }}>{{$categoria->categoria}}</option>
          @endforeach
        </select>
      </div>
      <input type="hidden" name="id" value="{{ $serie->id }}">  {{-- Campo oculto com o ID da série --}}
      </div>
      <a href="{{ URL::previous() }}" class="btn btn-secondary" style="background-color: #E21818; color: #FFFFFF;">Voltar</a>
      <button type="submit" class="btn btn-success"  style="background-color: #00235B; color: #FFFFFF;" >Salvar</button>
    </form>
  </div>
</main>
@endsection
