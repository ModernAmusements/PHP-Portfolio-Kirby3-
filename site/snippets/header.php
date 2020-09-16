<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * This header snippet is reused in all templates. 
 * It fetches information from the `site.txt` content file and contains the site navigation.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>
<!doctype html>
<html lang="en" id="invertme">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?= $site->title() ?> | <?= $page->title() ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fafafa" />
    <link rel="shortcut icon" href="/images/favicons/favicon.ico" type="image/x-icon">
    <?= js('assets/js/jquery.js') ?>
    <?= css(['assets/css/index.css']) ?>
    <?= css(['assets/lightbox/lightbox.css']) ?>
</head>
<div id="cursor" class="cursor-container">
      <p class="cursor-text"></p>
    </div>
<body>
<header>
    <a class="home">
        <label class="switch">
            <span class="sliderToggle">
                <div id="circle"></div>
            </span>
        </label>
        <h2>
            <span id="inverted-msg"></span>
        </h2>
    </a>
    <menu class="desktop-nav">
        <nav>
        <?php
            $items = $site->children();
            $items->prepend('home', page('home'));
            if($items->isNotEmpty()):
            ?>
                    <?php foreach ($items->listed() as $item): ?>
                        <a
                    <?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?>
                    </a>
            <?php endforeach ?>
        <?php endif ?>
        </nav>
    </menu>
    <div class="langToggle">
        <a href="#" class="lang">
            DE
        </a>
        <a href="#" class="lang">
            EN
        </a>
    </div>
    <menu class="mobile-display">
        <span id="burger">
            <svg viewBox="0 0 50 50">
                <g>
                    <line class="burger-menu stroke-open" x1="49.5" y1="25" x2="0.5" y2="25" />
                    <line class="burger-menu stroke-open" x1="0.5" y1="25" x2="49.5" y2="25" />
                </g>
                <line class="burger-menu stroke-close" x1="0.5" y1="8.5" x2="49.5" y2="8.5" />
                <line class="burger-menu stroke-close" x1="0.5" y1="41.5" x2="49.5" y2="41.5" />
            </svg>
        </span>
    </menu>
    <nav id="mobile-nav">
        <div class="navGridMenu">
            <?php
                $items = $pages->listed();
                if($items->isNotEmpty()):
            ?>
                    <?php foreach($items as $item): ?>
                    <a
                    <?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?>
                    </a>
                <?php endforeach ?>
            <?php endif ?>
            <div class="navLang">
                <a href="#" class="lang">
                    DE
                </a>
                <a href="#" class="lang">
                    EN
                </a>
            </div>
        </div>
    </nav>
</header>