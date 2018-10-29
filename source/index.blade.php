@extends('_layouts.master')

@section('body')

<div class="flex items-center justify-center h-screen">
    <div class="text-center">
        @logo

        <div class="text-grey-darkest text-xl font-semibold mb-2">Jess Archer</div>

        <div class="text-grey-dark mb-4">Web Application Developer</div>

        <div class="text-grey-dark text-sm mb-6">
            <i class="text-grey fas fa-map-marker-alt"></i> Brisbane, Australia
        </div>

        <a href="/contact" class="btn btn-sm btn-outline-blue mb-8">
            Contact Me
        </a>

        <div>
            @socialIcon(['icon' => 'fa-github-square', 'link' => 'https://github.com/jessarcher'])
            @socialIcon(['icon' => 'fa-twitter-square', 'link' => 'https://twitter.com/jessarchercodes'])
            @socialIcon(['icon' => 'fa-linkedin', 'link' => 'https://www.linkedin.com/in/jessarcher/'])
        </div>
    </div>
</div>

@endsection
