<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?: $page->siteDescription }}">

        <meta property="og:type" content="{{ $page->extends === '_layouts.post' ? 'article' : 'website' }}" />
        <meta property="og:title" content="{{ $page->title ?  $page->title . ' – ' : '' }}{{ $page->siteName }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}" />
        <meta property="og:image" content="{{ $page->baseUrl }}/assets/images/{{ $page->image ?: 'jess-archer.jpg' }}" />
        <meta property="og:description" content="{{ $page->description ?: $page->siteDescription }}" />

        @if ($page->image)
            <meta name="twitter:card" content="summary_large_image" />
            <meta name="twitter:site" content="@jessarchercodes" />
            <meta name="twitter:title" content="{{ $page->title ?  $page->title . ' – ' : '' }}{{ $page->siteName }}" />
            <meta name="twitter:description" content="{{ $page->description ?: $page->siteDescription }}" />
            <meta name="twitter:image" content="{{ $page->baseUrl }}/assets/images/{{ $page->image ?: 'jess-archer.jpg' }}" />
        @endif

        <title>{{ $page->title ? $page->title . ' – ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @stack('meta')

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        @if ($page->production)
            <link rel="preconnect" href="https://www.google-analytics.com" />

            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151431096-1"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());

              gtag('config', 'UA-151431096-1');
            </script>
        @endif
    </head>

    <body class="font-sans leading-normal text-gray-700 bg-gray-100 print:bg-white min-h-screen">
        <div id="app">
            @yield('body')
        </div>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
