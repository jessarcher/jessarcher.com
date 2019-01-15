@extends('_layouts.app', ['footer' => false])

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('main')

    <div class="md:flex md:flex-row-reverse">
        <img src="/assets/images/jess.jpg"
            alt="Jess Archer speaking at a conference"
            class="block shadow-inner h-64 w-64 rounded-full md:ml-10 my-6 mx-auto"
            style="filter: grayscale(100%)"
        >

        <div class="md:flex-grow">
            <h1>About Me</h1>

            <p class="font-bold">My name is Jess Archer and I am a passionate
                web application developer from Brisbane, Australia with over 15
                years professional experience.</p>

            <p>I have been interested in computers for as long as I can remember
            and have played with everything from hardware and networking to
            operating systems and servers.</p>

            <p>The first website I ever built was a fan site for the sci-fit
                sitcom Red Dwarf using Claris Homepage. I taught myself HTML by
                making changes in the WYSIWYG editor and looking at the HTML it
            generated. I have come a long way since, but I've never stopped
            learning everything I can.</p>

            <p>I worked as an IT technician and then consultant before switching
                to web development. I have built and maintained a referral
                system for the police, a chemical warehouse management system,
                a POS system, an online banking anti-fraud tool, a CMS, a CRM,
                numerous e-commerce systems and hundreds of websites. I have
                also worked on Australia's largest client case management system
            for the community sector.</p>

            <p>I am an advocate for open-source software, digital freedom and
                privacy, best practices, user experience, and developer
                experience.</p>

            <p> I am currently passionate about building web application using
            the <a href="https://laravel.com/">Laravel PHP framework</a> and the
            <a href="https://vuejs.org/">Vue.js JavaScript framework</a>.</p>

            <p>When I'm not coding (and sometimes when I am) I like to eat spicy
                food, drink dark beer, ride fast motorcycles, and listen to
                heavy music.</p>

            <p>I am available for consulting and I am open to hearing about
                projects you'd like to collaborate on.</p>

            <a href="/contact" class="btn btn-sm btn-grey mb-4">
                Contact Me
            </a>

        </div>
    </div>

@endsection
