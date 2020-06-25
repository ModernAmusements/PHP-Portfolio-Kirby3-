<?php

/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * This header snippet is reused in all templates. 
 * It fetches information from the `site.txt` content file and contains the site navigation.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <!-- The title tag we show the title of our site and the title of the current page -->
  <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#fafafa" />
  <!-- Stylesheets can be included using the `css()` helper. Kirby also provides the `js()` helper to include script file. 
        More Kirby helpers: https://getkirby.com/docs/reference/templates/helpers -->
  <?= css(['assets/css/index.css', '@auto']) ?>
  <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
</head>

<body>
  <grid-r columns=8 columns-s=4>
    <cell-r span=1>
      <!-- In this link we call `$site->url()` to create a link back to the homepage -->
      <h2 href="<?= $site->url() ?>"><?= $site->title() ?></h2>
      <nav class="menu">
        <h3>
          <?php foreach ($site->children()->listed() as $subpage) : ?>
            <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
          <?php endforeach ?>
        </h3>
      </nav>
    </cell-r>
    <cell-r span=3 span-l=2 span-s=row>
      <?= $site->text()->kt() ?>
    </cell-r>
    <cell-r span=5-6 span-s=1-2>
      <h3>Contact</h3>
      <?= $site->contact()->kt() ?>
    </cell-r>
    <cell-r span=1>
      <h3>Clients</h3>
      <?= $site->clients()->kt() ?>
    </cell-r>
    <cell-r span=1>
      <div class="text-right">
        <span id="sun">
          <svg viewBox="0 0 50 50">
            <g id="sun-group">
              <path class="st0" d="M24.95,34.53c5.25,0,9.5-4.25,9.5-9.5s-4.25-9.5-9.5-9.5s-9.5,4.25-9.5,9.5S19.7,34.53,24.95,34.53z" />
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
    </cell-r>
    <hr>