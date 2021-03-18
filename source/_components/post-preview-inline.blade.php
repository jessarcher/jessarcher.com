<article>
    <p class="text-gray-500 text-sm font-bold uppercase tracking-wide">
        {{ $post->getDate()->format('F j, Y') }}
    </p>

    <h2 class="mt-2 text-2xl font-bold text-gray-900">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="hover:text-purple-700 focus:text-purple-700"
        >{{ $post->title }}</a>
    </h2>

    <p class="mt-2 max-w-2xl text-lg">
        {!! $post->excerpt(200) !!}
    </p>

    <p class="mt-4">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="text-base uppercase font-semibold tracking-wide hover:text-purple-700 focus:text-purple-700"
        >Read</a>
    </p>
</article>
