@extends('layouts.master')

@section('title', 'Posts tagged "' . $tag->name . '"')

@section('content')
    <h1 class="text-5xl mb-8 font-thin text-gray-700">Posts tagged <q>{{ $tag->name }}</q></h1>

    @include('posts.partials.list')
@endsection
