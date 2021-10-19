@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-title d-flex justify-content-center m-2">{{$post->title}}</h2>
                <hr>
                <img src="{{$post->image}}" class="card-img-top img-fluid" alt=""> 
                <div class="card-body">
                  <p class="card-text">{{$post->body}}</p>
                  <hr>
                  <footer class="blockquote-footer">Escrito por<cite title="Source title">{{$post->user->name}}</cite></footer> 
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
