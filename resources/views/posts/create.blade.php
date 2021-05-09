@extends('layouts.app')

@section('content')
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        @include('layouts.form')
        <input type="submit" value="Create" class="btn btn-primary btn-block">
    </form>
@endsection