<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title', $page->name)</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">
    </head>
    <body class="font-sans text-grey-dark bg-grey-lighter">
        @yield('body')
    </body>
</html>
