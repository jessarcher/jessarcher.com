@extends('_layouts.app')

@section('main')
    @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-8">
    @endif

    <p class="text-gray-600 font-bold uppercase tracking-wide">
        {{ date('F j, Y', $page->date) }}
    </p>

    <h1 class="mt-3 text-3xl font-bold text-gray-900 leading-tight">
        {{ $page->title }}
    </h1>

    @if ($page->categories)
        @foreach ($page->categories as $i => $category)
            <a
                href="{{ '/blog/categories/' . $category }}"
                title="View posts in {{ $category }}"
                class="inline-block bg-grey-light hover:bg-blue-lighter leading-loose tracking-wide text-grey-darkest uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
            >{{ $category }}</a>
        @endforeach
    @endif

    <div v-pre class="mt-4 markdown">
        @yield('content')
    </div>

@endsection
