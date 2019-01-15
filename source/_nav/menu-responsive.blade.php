<nav id="js-nav-menu" class="hidden lg:hidden bg-black w-full fixed pin-t pt-24 pin-b z-10 text-lg">
    <ul class="list-reset my-0">
        <li class="pl-4 pb-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="border-0 hover:text-white {{ $page->isActive('/blog') ? 'active text-grey-lightest' : '' }}"
            >Blog</a>
        </li>
        <li class="pl-4 pb-4">
            <a
                title="{{ $page->siteName }} About"
                href="/about"
                class="border-0 hover:text-white {{ $page->isActive('/about') ? 'active text-grey-lightest' : '' }}"
            >About</a>
        </li>
        <li class="pl-4 pb-4">
            <a
                title="{{ $page->siteName }} Contact"
                href="/contact"
                class="border-0 hover:text-white {{ $page->isActive('/contact') ? 'active text-grey-lightest' : '' }}"
            >Contact</a>
        </li>
    </ul>
</nav>
