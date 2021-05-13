<?php

return [
    'db' => [
        'host' => 'db',
        'user' => 'user',
        'password' => 'pwd',
        'name' => 'db',
    ],
    'views' => [
        'dir' => __DIR__ . '/../views',
        'ext' => '.php',
        'layouts' => [
            'dir' => __DIR__ . '/../views/layouts',
            'default' => 'main',
            'guest' => 'guest',
        ],
    ],
    'viewsDir' => __DIR__ . '/../views'
];