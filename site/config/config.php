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
  'pedroborges.meta-tags.default' => function ($page, $site) {
      return [
          'title' => $site->title(),
          'meta' => [
              'description' => $site->description(),
              'description' => $site->additionalDescription(),
              'behance:site' => $site->additionalDescription()

              
          ],
          'link' => [
              'canonical' => $page->url()
          ],
          'og' => [
              'image' => $site->image()->url(),
              'title' => $page->isHomePage()
                  ? $site->title()
                  : $page->title(),
              'type' => 'website',
              'site_name' => $site->title(),
              'url' => $page->url()
          ]
      ];
  }


];

