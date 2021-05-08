@extends('layouts.app')

@section('content')
    @foreach ($posts as $post)
        @if ($loop->odd)
            <div>
                <h3 style="color: blue">{{ $post->title }}</h3>
                <p style="color: blue">{{ $post->content }}</p>
            </div>
        @else
            <div>
                <h3 style="color: orange">{{ $post->title }}</h3>
                <p style="color: orange">{{ $post->content }}</p>
            </div>
        @endif
    @endforeach
@endsection