@extends('_layouts.master')

@section('body')

<div class="flex items-center justify-center h-screen">
    <div class="text-center">
        @logo

        <div class="text-grey-darkest text-xl font-semibold mb-2"> Jess Archer</div>

        <div class="text-grey-dark mb-4">Web Application Developer</div>

        <div class="text-grey-dark text-sm mb-6">
            <i class="text-grey fas fa-map-marker-alt"></i> Brisbane, Australia
        </div>

        <a
            href="/contact"
            class="
                no-underline
                inline-block
                bg-white
                border
                border-blue
                font-semibold
                hover:bg-blue
                hover:border-transparent
                hover:text-white
                mb-8
                px-3
                py-1
                rounded
                text-blue
            "
        >Contact Me</a>

        <div>
            @socialIcon(['icon' => 'fa-github-square', 'link' => 'https://github.com/jessarcher'])
            @socialIcon(['icon' => 'fa-twitter-square', 'link' => 'https://twitter.com/jessarchercodes'])
            @socialIcon(['icon' => 'fa-linkedin', 'link' => 'https://www.linkedin.com/in/jessarcher/'])
        </div>
    </div>
</div>

@endsection
