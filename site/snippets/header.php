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

    <cell-r span=2>
      <!-- In this link we call `$site->url()` to create a link back to the homepage -->
      <h2 href="<?= $site->url() ?>"><?= $site->title() ?></h2>
    </cell-r>
    <cell-r span=7-8>
      <nav class="menu text-left">
        <h3>
          <?php foreach ($site->children()->listed() as $subpage) : ?>
            <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
          <?php endforeach ?>
        </h3>
      </nav>

    </cell-r>

    <cell-r span=2 span-s=row>
      <p>
      <?= $site->text()->kt() ?>
      </p>
    </cell-r>
    <cell-r span=5-6 span-s=1-2>
      <h3>Contact</h3>
      <p>
      <?= $site->contact()->kt() ?>
      </p>
    </cell-r>
    <cell-r span=2>
      <h3>Clients</h3>
      
      <p>
      <?= $site->clients()->kt() ?>
      </p>
    </cell-r>
    <hr>