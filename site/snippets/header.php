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
    <?= css(['assets/css/index.css', '@auto']) ?>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script type="text/javascript">
        ! function (o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);
    </script>
</head>
<body>
<header>
    <h2>
        <a href="<?= $site->url() ?>"><?= $site->title() ?></a>
    </h2>
    <?php foreach ($site->children()->listed() as $subpage) : ?>
    <h3><a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a></h3>
    <?php endforeach ?>
    <p class="small">Darkmode:<span id="inverted-msg">Off</span></p>
    <div id="sun">
      <span id="inverted-msg">
          <svg viewBox="0 0 50 50">
              <g id="sun-group">
                  <path class="st0"
                      d="M24.95,34.53c5.25,0,9.5-4.25,9.5-9.5s-4.25-9.5-9.5-9.5s-9.5,4.25-9.5,9.5S19.7,34.53,24.95,34.53z" />
                  <line class="st0" x1="39.08" y1="25" x2="49.5" y2="25" />
                  <line class="st0" x1="10.92" y1="25" x2="0.5" y2="25" />
                  <line class="st0" x1="25" y1="39.08" x2="25" y2="49.5" />
                  <line class="st0" x1="25" y1="10.92" x2="25" y2="0.5" />
                  <line class="st0" x1="34.92" y1="14.14" x2="42.28" y2="6.78" />
                  <line class="st0" x1="34.92" y1="35.86" x2="42.28" y2="43.23" />
                  <line class="st0" x1="15.07" y1="14.14" x2="7.71" y2="6.78" />
                  <line class="st0" x1="15.07" y1="35.86" x2="7.71" y2="43.23" />
              </g>
          </svg>
      </span>
    </div>
    </hr>
</header>