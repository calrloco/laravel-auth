@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="Text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Titolo">
        </div>
        <div class="form-group">
            <label for="body">Contenuto</label>
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <input type="submit" value="submit" class="btn btn-primary">
    </form>
</div>
@endsection
