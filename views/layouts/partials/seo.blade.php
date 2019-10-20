<meta name="description" content="Arpad Olasz is a Laravel enthusiast and PHP developer.">

    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">

    <meta name="twitter:creator" content="@arpadolasz"/>
    <meta name="twitter:site" content="@arpadolasz"/>

    <script type='application/ld+json'>
        {
            "@context":"http:\/\/schema.org",
            "@type":"WebSite",
            "@id":"#website",
            "url":"{{ config('app.url') }}",
            "name":"{{ config('app.name') }}",
            "alternateName":"A blog about everything..."
        }
    </script>
    <script type='application/ld+json'>
        {
            "@context":"http:\/\/schema.org",
            "@type":"Person",
            "sameAs":["https:\/\/twitter.com\/arpadolasz"],
            "@id":"#person",
            "name":"Arpad Olasz"
        }
    </script>

@yield('seo')
