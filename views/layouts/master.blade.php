<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, viewport-fit=cover, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @include('layouts.partials.seo')

    <title>@yield('title') - {{ config('app.name') }}</title>

    <!-- Styles -->
    <link nonce="{{ csp_nonce() }}" rel="stylesheet" href="{{ mix('main.css', 'theme') }}">
    <!-- Feed -->
    {{-- Showing only the blog feed. If custom feeds are also set, use @include('feed::links')  --}}
    @foreach(config('feed.feeds') as $name => $feed)
        @if ($name === 'blog')
            <link rel="alternate" type="{{ $feed['type'] ?? 'application/atom+xml' }}" href="{{ route("feeds.{$name}") }}" title="{{ $feed['title'] }}">
        @endif
    @endforeach
</head>
<body>
    <div id="app" class="container p-8">
        @yield('content')
    </div>
    <script src="{{ mix('manifest.js', 'theme') }}"></script>
    <script src="{{ mix('vendor.js', 'theme') }}"></script>
    <script src="{{ mix('app.js', 'theme') }}"></script>
</body>
</html>
