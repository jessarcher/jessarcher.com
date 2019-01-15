@extends('_layouts.app', ['footer' => false])

@section('title', 'Contact Jess Archer')

@section('main')

    <h1>Contact Me</h1>

    <p>I am available for consulting and I am open to hearing about projects
        you'd like to collaborate on.</p>

    @include('_components.contact-form', ['action' => '/contact/thanks'])

@endsection
