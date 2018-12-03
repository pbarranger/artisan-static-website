<?php

return [
    'production' => false,
    'baseUrl' => 'https://patrickbarranger.com',
    'site' => [
        'title' => 'Patrick Barranger\'s Data Science Projects ',
        'description' => 'Data Science blog of Patrick Barranger.',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'Patrick Barranger',
        // 'twitter' => 'johndoe',
        'github' => 'pbarranger',
    ],
    'services' => [
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'artisanstatic',
        'cloudinary' => 'patrickbarranger-com',
        'jumprock' => 'contactpatrickb',
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
    'excerpt' => function ($page, $limit = 250, $end = '...') {
        return $page->isPost
            ? str_limit_soft(content_sanitize($page->getContent()), $limit, $end)
            : null;
    },
    'imageCdn' => function ($page, $path) {
        return "https://res.cloudinary.com/{$page->services->cloudinary}/{$path}";
    },
];
