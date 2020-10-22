@extends('layouts.app')
@section('content')

    <div class="container">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif
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
            <div class="form-group">
                @foreach ($tags as $tag)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="tags[]"
                            value="{{ $tag->id }}">
                        <label class="form-check-label" for="inlineCheckbox1">{{ $tag->name }}</label>
                    </div>
                @endforeach
            </div>
            <input type="submit" value="submit" class="btn btn-primary">
        </form>
    </div>
@endsection
