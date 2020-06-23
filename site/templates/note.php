<?php

/**
 * Templates render the content of your pages. 
 * They contain the markup together with some control structures like loops or if-statements.
 * This template is responsible for rendering all the subpages of the `notes` page.
 * The `$page` variable always refers to the currently active page. 
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`.
 * Snippets like the header and footer contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>

<?php snippet('header') ?>


<grid-r columns=8 columns-s=4>

  <cell-r span=3>
    <h1><?= $page->title() ?></h1>
  </cell-r>

  <cell-r span=5-6>
    <time class=""><?= $page->date()->toDate('d F Y') ?></time>
  </cell-r>

  <cell-r span=7-8>
    <div class="text-right">
      <?php if ($page->tags()->isNotEmpty()) : ?>
        <p class=""><?= $page->tags() ?>
        </p>
      <?php endif ?>
    </div>
  </cell-r>

  <cell-r span=6>
    <?php if ($image = $page->cover()->toFile()) : ?>
      <img src="<?= $image->url() ?>" alt="">
    <?php endif ?>
  </cell-r>


  <cell-r span=7-8>

    <?= $page->text()->kt() ?>

  </cell-r>

  </article>
</grid-r>


<?php snippet('footer') ?>