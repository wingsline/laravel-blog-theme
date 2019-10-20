@extends('layouts.master')

@section('title', 'Home')

@section('content')
    @if($onFirstPage)
        <h1 class="text-5xl mb-8 font-thin text-gray-700">Recent blog entries</h1>
    @else
        <div class="pb-4">
            {{ $posts->links() }}
        </div>
    @endif

    @include('posts.partials.list')

    {{ $posts->links() }}
@endsection
