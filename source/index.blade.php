@extends('_layouts.master')

@section('body')

<div class="font-sans flex items-center justify-center h-screen">
    <div class="text-center">
        <img
            src="assets/images/jessarcher.png"
            alt="Jess Archer"
            class="border-white border-4 rounded-full shadow-md w-1/4 mb-4"
        >

        <div class="text-grey-darkest text-xl font-semibold mb-2"> Jess Archer</div>

        <div class="text-grey-dark mb-4">Web Application Developer</div>

        <div class="text-grey-dark text-sm mb-6">
            <i class="text-grey fas fa-map-marker-alt"></i> Brisbane, Australia
        </div>

        <div>
            <a href="https://github.com/jessarcher"><i class="text-grey-light hover:text-grey fab fa-github-square fa-2x"></i></a>
            <a href="https://twitter.com/jessarchercodes"><i class="text-grey-light hover:text-grey fab fa-twitter-square fa-2x"></i></a>
            <a href="https://www.linkedin.com/in/jessarcher/"><i class="text-grey-light hover:text-grey fab fa-linkedin fa-2x"></i></a>
        </div>
    </div>
</div>

@endsection
