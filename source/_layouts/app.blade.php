@extends('_layouts.master')

@section('body')

    <div class="flex flex-col justify-between min-h-screen">
        <div>
            @include('_components.header')

            <main role="main" class="mt-6 flex-auto w-full max-w-4xl mx-auto px-6">
                @yield('main')
            </main>
        </div>

        @include('_components.footer', ['footer' => $footer ?? true])
    </div>

@endsection
