<?php
?>
<!doctype html>
<html lang="de" id="invertme">
<head>
    <!-- Meta Styling -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon//favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#da532c">
    <!-- Meta Information-->
    <?php echo $page->metaTags() ?>
    <!-- jQeury Async-->
    <?= js('assets/js/jquery.js', true) ?>
    <!-- Stylesheets CSS-->
    <?= css('assets/css/index.css', true) ?>
</head>
<body>
    <header>
        <a class="home">
            <label class="switch">
                <span class="sliderToggle">
                    <div id="circle"></div>
                </span>
            </label>
            <h2><span id="inverted-msg"></span></h2>
        </a>
        <menu class="desktop-nav">
            <nav>
            <?php $items = $site->children(); $items->prepend('home', page('home'));
                  if ($items->isNotEmpty()) :?>
                <?php foreach ($items->listed() as $item) : ?>
                    <a <?php e($item->isOpen(), 'class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
                <?php endforeach ?>
            <?php endif ?>
            </nav>
        </menu>
        <div class="langToggle">
            <a href="#" class="lang">DE</a>
            <a href="#" class="lang">EN</a>
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
                if ($items->isNotEmpty()) :
                ?>
                    <?php foreach ($items as $item) : ?>
                        <a <?php e($item->isOpen(), 'class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?> </a>
                    <?php endforeach ?>
                <?php endif ?>
                <div class="navLang">
                    <a href="#" class="lang">DE</a>
                    <a href="#" class="lang">EN</a>
                </div>
            </div>
        </nav>
    </header>