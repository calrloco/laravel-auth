@extends('layouts.app')
@section('content')
<div class="row">
<div class="card mt-5" style="width: 100%;">
    <img src="{{Storage::url($post->img)}}" class="card-img-top img-fluid" alt="{{$post->title.'immagine'}}">
    <div class="card-body">
      <h4>{{$post->title}}</h4>
       <h5>{{$post->user->name}}</h5>
       <p>{{$post->created_at}}</p>
      <p class="card-text">{{$post->body}}</p>
      <a href="{{route('posts.guest.show',$post->slug)}}" class="btn btn-primary">Leggi Tutto</a>
    </div>
  </div>
</div>
@endsection