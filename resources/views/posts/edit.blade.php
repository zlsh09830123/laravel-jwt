@extends('layouts.app')

@section('content')
    <form action="{{ route('posts.update', compact('post')) }}" method="post">
        @csrf
        @method('PUT')
        @include('layouts.form')
        <input type="submit" value="Create" class="btn btn-primary btn-block">
    </form>
@endsection