<header class="flex items-center py-5 bg-black w-full z-20" role="banner" id="site-header">
    <div class="container flex items-center max-w-3xl mx-auto px-4 lg:px-8">
        <div class="flex items-center">
            <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center no-underline border-0">
                <img
                    src="/assets/images/jessarcher.svg"
                    alt="{{ $page->siteName }} logo"
                    class="
                        h-12
                        w-12
                        md:h-16
                        md:w-16
                        p-2
                        mr-2
                    "
                >
                <h1 class="text-lg md:text-2xl text-grey-light uppercase font-semibold my-0">
                    {{ $page->siteName }}
                </h1>
            </a>
        </div>

        <div class="flex flex-1 justify-end items-center">
            <search></search>

            @include('_nav.menu')

            @include('_nav.menu-toggle')
        </div>
    </div>
</header>
