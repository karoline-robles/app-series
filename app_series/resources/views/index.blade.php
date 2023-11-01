@extends('site')

@section('section')
<main class="container m-5">
  <div class="bg-body-tertiary p-5 rounded text-center">
    <h1 class="display-4">Bem-vindo ao SérieConnect</h1>
    <p class="lead">A sua plataforma para descobrir e compartilhar suas séries favoritas com amigos.</p>
    <p>Descubra novas séries, compartilhe suas recomendações e conecte-se com entusiastas de séries em todo o mundo.</p>
    <a href="{{ route('pessoas.novo') }}" class="btn btn-primary btn-lg mt-3"  type="button" class="btn btn-secondary" style="background-color: #daa520; color: #FFFFFF;" >CADASTRE-SE AGORA</a>
  </div>
</main>
@endsection
