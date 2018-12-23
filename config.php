<?php

return [
    'siteName' => 'Jess Archer',
    'siteDescription' => 'Web App Developer',
    'baseUrl' => '',
    'production' => false,

    // Collections
    'collections' => [
        'posts' => [
            'sort' => '-date',
            'path' => 'blog/{filename}',
        ],
    ],

    // Helpers
    'getDate' => function ($page) {
        return DateTime::createFromFormat('U', $page->date);
    },

    'excerpt' => function ($page, $length = 255) {
        $cleaned = strip_tags(
            preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $page->getContent()),
            '<code>'
        );

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },

    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
];
