@extends('layouts.app')

@section('content')
    @forelse ($posts as $post)
        <h3 style="color: orange"><a href="{{ route('posts.show', compact('post')) }}">{{ $post->title }}</a></h3>

        <a href="{{ route('posts.edit', compact('post')) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('posts.destroy', compact('post')) }}" method="post" class="d-inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete!" class="btn btn-danger">
        </form>
    @empty
        <p>No blog posts yet!</p>
    @endforelse
@endsection