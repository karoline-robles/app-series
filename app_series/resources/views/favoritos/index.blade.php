@extends('site')

@section('section')
<main class="container m-5">
<div class="bg-body-tertiary p-5 rounded">
<h1> Indicar Séries</h1>

    <form action="{{route('favoritos.favoritar')}}" method="POST">
      @csrf
      <div class="mb-3">
          <label for="id_pessoa" class="form-label">Pessoa</label>
          <select name="id_pessoa" class="form-select">
            <option></option>
            @foreach($pessoas as $pessoa)
              <option value="{{$pessoa->id}}">{{$pessoa->nome}}</option>
            @endforeach  
          </select>
      </div> 
      <div class="mb-3">
          <label for="id_serie" class="form-label">Série</label>
          <select name="id_serie" class="form-select">
            <option></option>
            @foreach($series as $serie)
              <option value="{{$serie->id}}">{{$serie->nome}}</option>
            @endforeach  
          </select>
      </div> 
      <button type="submit" class="btn btn-success"  style="background-color: #daa520; color: #FFFFFF;" >Indicar</button>
    </form>
  </div>  
</main>
@endsection
