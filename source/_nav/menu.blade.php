<nav class="hidden lg:flex items-center justify-end text-lg">
    <a
        title="{{ $page->siteName}} Blog"
        href="/blog"
        class="
            ml-6
            text-grey-dark
            hover:text-white
            border-0
            {{ $page->isActive('/blog') ? 'active text-grey-lightest' : '' }}
        "
    >
        Blog
    </a>

    <a
        title="About {{ $page->siteName}}"
        href="/about"
        class="
            ml-6
            text-grey-dark
            hover:text-white
            border-0
            {{ $page->isActive('/about') ? 'active text-grey-lightest' : '' }}
        "
    >
        About
    </a>

    <a
        title="Contact {{ $page->siteName}}"
        href="/contact"
        class="
            ml-6
            text-grey-dark
            hover:text-white
            border-0
            {{ $page->isActive('/contact') ? 'active text-grey-lightest' : '' }}
        "
    >
        Contact
    </a>
</nav>
