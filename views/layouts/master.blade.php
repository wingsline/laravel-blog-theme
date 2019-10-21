<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, viewport-fit=cover, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @include('layouts.partials.seo')

    <title>@yield('title') - {{ config('app.name') }}</title>

    <!-- Styles -->
    <link nonce="{{ csp_nonce() }}" rel="stylesheet" href="{{ mix('css/main.css') }}">
    <!-- Feed -->
    @include('feed::links')
</head>
<body>
    <div id="app" class="container p-8">
        @yield('content')
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
