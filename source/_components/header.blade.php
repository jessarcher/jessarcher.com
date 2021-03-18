<header class="mt-3 py-6" role="banner">
    <div
        class="
            mx-auto w-full max-w-4xl
            md:px-6 md:flex md:items-center
        "
    >
        <div class="
            flex-1 px-6 flex items-center justify-between
            md:px-0
        ">
            <a href="/" class="inline-flex items-center justify-center">
                <svg class="h-8 fill-current text-gray-600" role="img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52.917 35.08"><path d="M20.417 0l18.36 32.365c1.18 1.425 3.34 2.715 4.937 2.715h9.203L35.146 3.515l-.11-.005C34.124 1.811 31.445 0 29.552 0zM6.32 35.08h4.501c9.096 0 16.6-6.98 17.683-15.99L17.675 0v16.839c0 3.874-3.07 7.015-6.854 7.015H0z" /></svg>

                <h1 class="ml-3 text-gray-800 text-2xl font-bold uppercase whitespace-nowrap">
                    Jess Archer
                </h1>
            </a>

            <div class="flex items-center">
                {{-- <search></search> --}}

                <button aria-hidden="true" class="flex justify-center items-center h-10 w-10 md:hidden focus:outline-none" onclick="navMenu.toggle()">
                    <svg role="img" aria-label="Open Menu" id="js-nav-menu-show" xmlns="http://www.w3.org/2000/svg"
                        class="fill-current text-gray-900 h-12 w-5" viewBox="0 0 32 32"
                    >
                        <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/>
                    </svg>

                    <svg role="img" aria-label="Close Menu" id="js-nav-menu-hide" xmlns="http://www.w3.org/2000/svg"
                        class="hidden fill-current text-gray-900 h-5 w-5" viewBox="0 0 36 30"
                    >
                        <polygon points="32.8,4.4 28.6,0.2 18,10.8 7.4,0.2 3.2,4.4 13.8,15 3.2,25.6 7.4,29.8 18,19.2 28.6,29.8 32.8,25.6 22.2,15 "/>
                    </svg>
                </button>
            </div>
        </div>

        <div class="md:flex md:justify-end md:items-center">
            <nav
                id="main-nav"
                class="
                    hidden mt-6 py-3 px-3 text-lg font-semibold bg-gray-100
                    md:mt-0 md:p-0 md:flex md:items-center md:justify-end md:bg-transparent
                "
            >
                <a
                    href="/blog"
                    class="
                        block py-1 px-3 text-gray-900 rounded
                        hover:bg-gray-200 hover:text-purple-700
                        md:hover:bg-gray-100
                    "
                >
                    <span class="{{ $page->isActive('/blog') ? '' : '' }}">
                        Blog
                    </span>
                </a>

                <a
                    href="/podcasts"
                    class="
                        block py-1 px-3 text-gray-900 rounded
                        hover:bg-gray-200 hover:text-purple-700
                        md:hover:bg-gray-100
                    "
                >
                    <span class="{{ $page->isActive('/podcasts') ? '' : '' }}">
                        Podcasts
                    </span>
                </a>

                <a
                    href="/speaking"
                    class="
                        block py-1 px-3 text-gray-900 rounded
                        hover:bg-gray-200 hover:text-purple-700
                        md:hover:bg-gray-100
                    "
                >
                    <span class="{{ $page->isActive('/speaking') ? '' : '' }}">
                        Speaking
                    </span>
                </a>

                <a
                    href="/contact"
                    class="
                        block py-1 px-3 text-gray-900 rounded
                        hover:bg-gray-200 hover:text-purple-700
                        md:hover:bg-gray-100
                    "
                >
                    <span class="{{ $page->isActive('/contact') ? '' : '' }}">
                        Contact
                    </span>
                </a>
            </nav>

            @push('scripts')
            <script>
                const navMenu = {
                    toggle() {
                        const menu = document.getElementById('main-nav');
                        menu.classList.toggle('hidden');
                        menu.classList.toggle('lg:block');
                        document.getElementById('js-nav-menu-hide').classList.toggle('hidden');
                        document.getElementById('js-nav-menu-show').classList.toggle('hidden');
                    },
                }
            </script>
            @endpush
        </div>
    </div>
</header>
