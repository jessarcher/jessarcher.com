---
permalink: 404.html
---
@extends('_layouts.app')

@section('title', 'Not Found')

@section('main')

    <div class="mt-12 text-center">
        <svg class="inline-block h-24 w-24 stroke-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M12 .5C18.351.5 23.5 5.649 23.5 12S18.351 23.5 12 23.5.5 18.351.5 12 5.649.5 12 .5z"/><path d="M6.5 9.75a.25.25 0 110 .5.25.25 0 010-.5M17.5 9.75a.25.25 0 100 .5.25.25 0 000-.5M7.5 19a4.5 4.5 0 019 0"/></g></svg>

        <h1 class="mt-6 text-gray-900 text-3xl font-bold">You look a little lost...</h1>
    </div>

@endsection
