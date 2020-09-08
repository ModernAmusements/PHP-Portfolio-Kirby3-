<?php
return [
    'debug' => true,
    'languages' => true,
    'panel' =>[
      'install' => true
    ],
    'email' => [
      'transport' => [
        'type' => 'smtp',
        'host' => 'smtp.gmail.com',
        'port' => 465,
        'security' => true,
        'auth' => true,
        'username' => 'shadynathantawfik@gmail.com',
        'password' => 'trhrdfogjdsjzrls',
      ]
      ],
    'kirby' => [
      'blog' => [
        'date' => 'd M, Y',
        'pagination' => [
          'limit' => 6
        ]
      ]
    ],
    'thumbs' => [
      'driver' => 'im',
    ],
    'routes' => [
      [
        'pattern' => 'blog/feed',
        'action'  => function () {
          return collection('blog/articles')->limit(10)->feed([
            'title'       => 'Blog',
            'description' => 'The latest updates from the blog.',
            'link'        => 'blog',
          ]);
        }
      ],
    ],
];

