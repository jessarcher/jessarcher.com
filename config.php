<?php

use Illuminate\Support\Str;

return [
    'siteName' => 'Jess Archer',
    'siteDescription' => 'Full-stack web app developer from Brisbane, Australia',
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
        if (! empty($excerpt = $page->description)) {
            return $excerpt;
        }

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
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
];
