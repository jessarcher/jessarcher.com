@if ($footer)
    @include('_components.about')
@else
@endif

<aside class="text-center text-sm py-6 border-t">
    <div class="text-center mb-4">
        @socialIcon(['icon' => 'fa-twitter-square', 'link' => 'https://twitter.com/jessarchercodes'])
        @socialIcon(['icon' => 'fa-github-square', 'link' => 'https://github.com/jessarcher'])
        @socialIcon(['icon' => 'fa-linkedin', 'link' => 'https://www.linkedin.com/in/jessarcher/'])
    </div>

    Proudly built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
    and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>,
    and hosted with <a href="https://www.netlify.com/" title="Netlify: All-in-one platform for automating modern web projects">Netlify</a>.
</aside>
