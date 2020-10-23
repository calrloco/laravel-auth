@extends('layouts.app')
@section('content')
<div class="row">
@foreach($posts as $post)
<div class="card mt-5" style="width: 100%;">
    <img src="{{Storage::url($post->img)}}" class="card-img-top img-fluid" alt="{{$post->title.'immagine'}}">
    <div class="card-body">
      <h4>{{$post->title}}</h4>
       <h5>{{$post->user->name}}</h5>
      <p class="card-text">{{Str::substr($post->body,0,150).'...'}}</p>
      <a href="{{route('posts.guest.show',$post->slug)}}" class="btn btn-primary">Leggi Tutto</a>
    </div>
  </div>
  @endforeach
</div>
@endsection