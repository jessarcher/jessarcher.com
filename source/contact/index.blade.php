---
title: Contact
---

@extends('_layouts.app')

@section('main')

    <h1 class="uppercase tracking-wide font-bold text-gray-600">Contact</h1>

    <form method="POST" name="contact" class="mt-6" action="/contact/thanks" netlify netlify-honeypot="mobile">
        <div>
            <label class="block font-bold" for="name">
                Your Name
            </label>

            <input
                class="mt-2 w-full max-w-lg form-input"
                id="name"
                name="name"
                type="text"
                placeholder="Name"
            >
        </div>

        <div class="mt-6">
            <label class="block font-bold" for="phone">
                Phone Number
            </label>

            <input
                class="mt-2 w-full max-w-lg form-input"
                id="phone"
                name="phone"
                type="tel"
                placeholder="Phone"
            >
        </div>

        <div class="hidden">
            <label>Don’t fill this out if you're human:</label>
            <input type="text" name="mobile">
        </div>

        <div class="mt-6">
            <label class="block font-bold" for="email">
                Email Address
            </label>

            <input
                class="mt-2 w-full max-w-lg form-input"
                id="email"
                name="email"
                type="email"
                placeholder="Email"
            >
        </div>

        <div class="mt-6">
            <label class="block font-bold" for="message">
                Message
            </label>

            <textarea
                class="mt-2 w-full max-w-lg form-textarea"
                id="message"
                name="message"
                type="message"
                rows="5"
                placeholder="Your message..."
            ></textarea>
        </div>

        <button type="submit" class="mt-6 btn btn-gray">
            Send Message
        </button>
    </form>

@endsection
