@extends('layouts.app')

@section('content')
<div class ="container">
<div class="row mb-2">
  @foreach ($noticias as $noticia)
  <div class="col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <h3 class="mb-0">{{$noticia->titulo}}</h3> 
        <div class="mb-1 text-muted">{{$noticia->created_at->format('d/m/Y')}}</div>
        <p class="card-text mb-auto">{{substr($noticia->texto, 0,50)}}...</p> 
        <a href="{{'noticia'}}/{{$noticia->titulo}}" class="stretched-link">Continuar leyendo</a> 
      </div>
        <div class="col-auto d-none d-lg-block">
          <img src="{{$noticia->imagen}}" class="bd-placeholder-img" width="200" height="200"><rect width="100%" height="100%" fill="#55595c"></rect></img>
        </div>
    </div>
  </div>
  @endforeach
  
  </div>
  
  <div class="d-flex justify-content-center">
    {{$noticias->links()}}
  </div>
  

</div>
@endsection
