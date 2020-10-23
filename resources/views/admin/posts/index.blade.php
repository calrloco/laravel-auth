@extends('layouts.app')
@section('content')
    @if (session('delete'))
        <div class="alert alert-success" role="alert">
            {{ session('delete') }}
        </div>
        @elseif(session('Updated'))
        <div class="alert alert-success" role="alert">
            {{ session('Updated') }}
        </div>
    @endif
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                    <td>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-5">
        {{$posts->links()}}
    </div>

@endsection
