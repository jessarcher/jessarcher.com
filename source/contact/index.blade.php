@extends('_layouts.master')

@section('body')

<div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-sm">
        <form class="text-center bg-white shadow rounded px-8 pt-6 pb-8 m-4" method="POST" action="/contact/thanks" netlify>
            <a href="/">
                @logo
            </a>

            <h2 class="mb-4 font-semibold text-grey-darkest">Contact Me</h2>

            <div class="text-left">
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
                <div class="text-right">
                    <a
                        class="
                            no-underline
                            align-baseline
                            text-grey-dark
                            hover:text-grey-darker
                            mr-4
                        " href="/"
                    >
                        Back
                    </a>

                    <button
                        type="submit"
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
                    >
                        Send Message
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
