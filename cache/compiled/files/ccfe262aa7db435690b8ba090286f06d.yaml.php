<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'E:/xampp/htdocs/user/config/site.yaml',
    'modified' => 1534651164,
    'data' => [
        'title' => 'Software Developer',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Brandon Himes',
            'email' => 'admin@brandonhimes.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'This is the portfolio site for Software Developer Brandon Himes'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
