<?php

return [
    'production' => false,
    'baseUrl' => '',
    'homepage' => [
        'menu' => [
            0 => [
                'name' => 'Home',
                'link' => '/'
            ],
            1 => [
                'name' => 'About us',
                'link' => '#about',
                'scroll' => true,
            ],
            2 => [
                'name' => 'Services',
                'link' => '#services',
                'scroll' => true,
            ],
            3 => [
                'name' => 'Portfolio',
                'link' => '/portfolio'
            ],
            4 => [
                'name' => 'Blog',
                'link' => '/blog'
            ],
            5 => [
                'name' => 'Contact',
                'link' => '/contact'
            ]
        ],
        'cards' => [
            '0' => [
                'icon' => 'thunder',
                'title' => 'Branding Consult',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ],
            '1' => [
                'icon' => 'bulb',
                'title' => 'Creative Planning',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ],
            '2' => [
                'icon' => 'window',
                'title' => 'Web Development',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ],
            '3' => [
                'icon' => 'frame',
                'title' => 'Design Services',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ],
            '4' => [
                'icon' => 'chat',
                'title' => 'Social Media',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ],
            '5' => [
                'icon' => 'database',
                'title' => 'Hosting Solutions',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ],
        ],
        'testimonials' => [
            0 => [
                'body' => 'These guys are legit. I’ll never hire another agency as long as I’m working. They are also extremely helpful and amazing.',
                'author' => 'Ali Karbassi',
                'position' => 'CEO @ We All Code',
                'img' => 'https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg'
            ],
            1 => [
                'body' => 'Lorem ipsum dolores sit atem',
                'author' => 'Arlind Musliu',
                'position' => 'CEO @ LuckyMedia',
                'img' => 'https://s3.amazonaws.com/uifaces/faces/twitter/sauro/128.jpg'
            ],
            2 => [
                'body' => 'These guys are legit. I’ll never hire another agency as long as I’m working. They are also extremely helpful and amazing.',
                'author' => 'Lokman Musliu',
                'position' => 'CEO @ We All Code',
                'img' => 'https://s3.amazonaws.com/uifaces/faces/twitter/mlane/128.jpg'
            ],
            3 => [
                'body' => 'These guys are legit. I’ll never hire another agency as long as I’m working. They are also extremely helpful and amazing.',
                'author' => 'Adis Silla',
                'position' => 'CEO @ We All Code',
                'img' => 'https://s3.amazonaws.com/uifaces/faces/twitter/chadengle/128.jpg'
            ],
            4 => [
                'body' => 'These guys are legit. I’ll never hire another agency as long as I’m working. They are also extremely helpful and amazing.',
                'author' => 'Armend Imeri',
                'position' => 'CEO @ We All Code',
                'img' => 'https://s3.amazonaws.com/uifaces/faces/twitter/glif/128.jpg'
            ],
            5 => [
                'body' => 'This is a test testimonial yooyoyoyo',
                'author' => 'Muhamed Musliu',
                'position' => 'CEO @ We All Code',
                'img' => 'https://s3.amazonaws.com/uifaces/faces/twitter/ritu/128.jpg'
            ],
        ],
    ],
    'technologies' => [
        '0' => [
            'name' => 'Php',
            'img' => 'assets/images/logos/php.png',
            'img_large' => 'assets/images/logos/php@2x.png',
            'link' => 'https://www.php.net/'
        ],
        '1' => [
            'name' => 'Laravel',
            'img' => 'assets/images/logos/laravel.png',
            'img_large' => 'assets/images/logos/laravel@2x.png',
            'link' => 'https://www.laravel.com/'
        ],
        '2' => [
            'name' => 'Tailwind',
            'img' => 'assets/images/logos/tailwind.png',
            'img_large' => 'assets/images/logos/tailwind@2x.png',
            'link' => 'https://tailwindcss.com/'
        ],
        '3' => [
            'name' => 'Javascript',
            'img' => 'assets/images/logos/js.png',
            'img_large' => 'assets/images/logos/js@2x.png',
            'link' => '/'
        ],
        '4' => [
            'name' => 'VueJS',
            'img' => 'assets/images/logos/vue.png',
            'img_large' => 'assets/images/logos/vue@2x.png',
            'link' => 'https://vuejs.org/'
        ],
        '5' => [
            'name' => 'ReactJS',
            'img' => 'assets/images/logos/react.png',
            'img_large' => 'assets/images/logos/react@2x.png',
            'link' => 'https://reactjs.org/'
        ],
    ],
    'collections' => [
        'projects' => [
            'path' => 'portfolio/{filename}',
            'extends' => '_layouts.project',
            'sort' => '-date',
        ]
    ],
];
