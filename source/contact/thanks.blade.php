@extends('_layouts.master')

@section('body')

<div class="flex items-center justify-center h-screen">
    <div class="text-center">
        <a href="/">
            @logo
        </a>

        <div class="text-grey-darkest text-xl font-semibold mb-4">Thanks for contacting me!</div>

        <a
            class="
                no-underline
                align-baseline
                text-grey-dark
                hover:text-grey-darker
            " href="/"
        >
            <i class="text-grey fas fa-long-arrow-alt-left"></i> Return Home
        </a>
    </div>
</div>

@endsection
