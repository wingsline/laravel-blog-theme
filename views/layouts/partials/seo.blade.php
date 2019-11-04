<meta name="description" content="{{ config('theme.meta.description') }}">

    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta property="og:image" content="{{ config('theme.meta.image') }}">

    <meta name="twitter:creator" content="{{ config('theme.meta.twitter.creator') }}"/>
    <meta name="twitter:site" content="{{ config('theme.meta.twitter.site') }}"/>

    <script type='application/ld+json'>
        {
            "@context":"http:\/\/schema.org",
            "@type":"WebSite",
            "@id":"#website",
            "url":"{{ config('app.url') }}",
            "name":"{{ config('app.name') }}",
            "alternateName":"{{ config('theme.meta.jsonld.alternateName') }}"
        }
    </script>
    <script type='application/ld+json'>
        {
            "@context":"http:\/\/schema.org",
            "@type":"Person",
            "sameAs": {!! json_encode(config('theme.meta.jsonld.sameAs')) !!},
            "@id":"#person",
            "name":"{{ config('theme.meta.jsonld.name') }}"
        }
    </script>
@yield('seo')
