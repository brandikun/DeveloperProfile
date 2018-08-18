<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://developer/developer.yaml',
    'modified' => 1534570316,
    'data' => [
        'enabled' => true,
        'profile' => [
            'name' => 'Brandon Himes',
            'desc' => 'Software Developer',
            'avatar_url' => 'https://pbs.twimg.com/profile_images/1791547896/394904_10150442771145741_612050740_9097674_1939925495_n_200x200.jpg',
            'informations' => [
                0 => [
                    'icon' => 'map-marker',
                    'label' => 'Location',
                    'url' => '',
                    'text' => 'San Diego, CA'
                ],
                1 => [
                    'icon' => 'envelope-o',
                    'label' => 'Email',
                    'url' => 'mailto:brandon.himes@yahoo.com',
                    'text' => 'brandon.himes@yahoo.com'
                ],
                2 => [
                    'icon' => 'link',
                    'label' => 'Website',
                    'url' => 'brandonhimes.com',
                    'text' => 'brandonhimes.com'
                ]
            ]
        ],
        'github' => 'brandikun',
        'rss_feed' => [
            'url' => 'http://feeds.feedburner.com/TechCrunch/startups',
            'limit' => 3,
            'effect' => 'slideFastSynced'
        ],
        'linkedin' => 'https://linkedin.com/in/brandonh92019',
        'social' => [
            'networks' => [
                0 => [
                    'url' => 'https://twitter.com/brandonhmmmms',
                    'icon' => 'twitter',
                    'title' => NULL
                ],
                1 => [
                    'url' => 'https://linkedin/in/brandonh92019',
                    'icon' => 'linkedin',
                    'title' => NULL
                ],
                2 => [
                    'url' => 'https://github.com/brandikun',
                    'icon' => 'github-alt',
                    'title' => NULL
                ]
            ]
        ],
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user/themes/developer'
                    ]
                ]
            ]
        ]
    ]
];
