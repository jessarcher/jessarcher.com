@extends('_layouts.master')

@section('title', "{$page->title} - {$page->name}")

@section('body')

@logo

<div>
    <h1>{{ $page->title }}</h1>
    <p>{{ date('F j, Y', $page->date) }}</p>

    @yield('content')
</div>

@endsection
