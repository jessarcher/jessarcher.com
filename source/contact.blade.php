@extends('_layouts.master')

@section('body')

<div class="flex items-center justify-center h-screen">
    <div class="w-full max-w-sm text-center">
        <img
            src="/assets/images/jessarcher.png"
            alt="Jess Archer"
            height="125"
            width="125"
            class="border-white border-4 rounded-full shadow-md mb-2"
        ><br>

        <a
            class="
                inline-block
                no-underline
                text-grey-dark
                hover:text-grey-darker
                mb-6
                mr-2
            " href="/"
        >
            <i class="text-grey fas fa-arrow-left"></i> Back
        </a>

        <form class="text-left bg-white shadow rounded px-8 pt-6 pb-8 mb-4" method="POST" netlify>
            <h2 class="mb-4 font-semibold text-grey-darkest text-center">Contact Me</h2>
            <div class="mb-4">
                <label class="block text-grey-dark text-sm font-bold mb-2" for="name">
                    Your Name
                </label>
                <input
                    class="
                        shadow
                        appearance-none
                        border
                        rounded
                        w-full
                        py-2
                        px-3
                        text-grey-darker
                        leading-tight
                        focus:outline-none
                        focus:shadow-outline
                    "
                    id="name"
                    name="name"
                    type="text"
                    placeholder="Name"
                >
            </div>
            <div class="mb-4">
                <label class="block text-grey-dark text-sm font-bold mb-2" for="phone">
                    Phone Number
                </label>
                <input
                    class="
                        shadow
                        appearance-none
                        border
                        rounded
                        w-full
                        py-2
                        px-3
                        text-grey-darker
                        leading-tight
                        focus:outline-none
                        focus:shadow-outline
                    "
                    id="phone"
                    name="phone"
                    type="phone"
                    placeholder="Phone"
                >
            </div>
            <div class="mb-4">
                <label class="block text-grey-dark text-sm font-bold mb-2" for="email">
                    Email Address
                </label>
                <input
                    class="
                        shadow
                        appearance-none
                        border
                        rounded
                        w-full
                        py-2
                        px-3
                        text-grey-darker
                        leading-tight
                        focus:outline-none
                        focus:shadow-outline
                    "
                    id="email"
                    name="email"
                    type="email"
                    placeholder="Email"
                >
            </div>
            <div class="mb-6">
                <label class="block text-grey-dark text-sm font-bold mb-2" for="message">
                    Message
                </label>
                <textarea
                    class="
                        shadow
                        appearance-none
                        border
                        rounded
                        w-full
                        py-2
                        px-3
                        text-grey-darker
                        leading-tight
                        focus:outline-none
                        focus:shadow-outline
                    "
                    id="message"
                    name="message"
                    type="message"
                    rows="5"
                    placeholder="Your message..."
                ></textarea>
            </div>
            <div class="flex items-center justify-center">
                <button
                    class="
                        bg-blue
                        text-white
                        font-semibold
                        py-2
                        px-4
                        rounded
                        hover:bg-blue-dark
                        focus:outline-none
                        focus:shadow-outline
                    "
                    type="button"
                >
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
