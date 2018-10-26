@extends('_layouts.master')

@section('body')

<div class="flex items-center justify-center h-screen">
    <div class="text-center">
        <a href="/">
            <img
                src="/assets/images/jessarcher.png"
                alt="Jess Archer"
                height="125"
                width="125"
                class="border-white border-4 rounded-full shadow-md mb-4"
            >
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
