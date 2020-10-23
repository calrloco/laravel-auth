@extends('layouts.app')
@section('content')
<div class="container">
    @if($errors->any())
    @foreach($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach
    @endif
    <form action="{{ route('posts.update',$post->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="Text" class="form-control" name="title" id="exampleFormControlInput1" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="body">Contenuto</label>
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3">{{$post->body}}</textarea>
        </div>
        <div class="form-group">
            @foreach ($tags as $tag)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="tags[]"
                    value="{{ $tag->id }}"{{$post->tags->contains($tag->id)? 'checked="checked"' : ''}}>
                <label class="form-check-label" for="inlineCheckbox1">{{ $tag->name }}</label>
            </div>
           @endforeach
         </div>
         <div class="form-group">
            <p>Modifica Immagine</p>
            <img src="{{asset('storage/'.$post->img)}}" name="exampleFormControlFile2" alt="{{$post->title.'.img'}}" height="300px">
            <input type="file" name="img" accept="image/*" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <input type="submit" value="submit" class="btn btn-primary">
    </form>
</div>
@endsection