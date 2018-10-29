<p>Total of {{ $posts->count() }} posts</p>

<ul>
@foreach ($posts as $post)
    <li><a href="{{ $post->getUrl() }}">{{ $post->title }}</a></li>
@endforeach
</ul>
