<?php

/**
 * Templates render the content of your pages.
 *   <?php snippet('intro') ?> 
 * They contain the markup together with some control structures like loops or if-statements.
 * The `$page` variable always refers to the currently active page. 
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`.
 * This template lists all all the subpages of the `notes` page with their title date sorted by date and links to each subpage.
 * Snippets like the header, footer and intro contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>
<?php snippet('header') ?>
<?php foreach ($page->children()->listed()->sortBy('date', 'desc') as $note) : ?>

  <cell-r span=2 span-s=row>
    <h3>
      <a href="<?= $note->url() ?>"><?= $note->title() ?></a>
    </h3>
  </cell-r>
  <cell-r span=5-6 span-s=1-2>
    <p>Webdesign</p>
  </cell-r>
  <cell-r span=1>
    <p>Art-Direction</p>
  </cell-r>
  <cell-r span=1>
    <div class="text-right">
      <p><time><?= $note->date()->toDate('Y') ?></time></p>
    </div>
  </cell-r>
  <hr>
  
<?php endforeach ?>
<?php snippet('footer') ?>