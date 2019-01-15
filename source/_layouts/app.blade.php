@extends('_layouts.master')

@section('body')

    <div class="flex flex-col justify-between min-h-screen">
        <div>
            @include('_components.header')

            @include('_nav.menu-responsive')

            <main role="main" class="flex-auto w-full container max-w-xl mx-auto py-16 px-6">
                @yield('main')
            </main>
        </div>

        @include('_components.footer', ['footer' => $footer ?? true])
    </div>

@endsection
