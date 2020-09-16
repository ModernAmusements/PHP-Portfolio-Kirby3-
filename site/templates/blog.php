<?php snippet('header') ?>
<div class="blog-page">
<section class="cover-animation">
  <?php if (empty($tag) === false): ?>
  <h1 class="xxxlarge">
    <small>Tag:</small>
    <?= html($tag) ?>
    <a href="<?= $page->url() ?>">&times;</a>
  </h1>
  <?php else: ?>
    <div class="type-loop"><span
                class="cover-heading loop-right">––––<?= $page->heading()->html() ?>––––––––<?= $page->heading()->html() ?>––––––––<?= $page->heading()->html() ?>––––</span>
        </div>
        <div class="type-loop"><span
                class="cover-heading loop-left">––––<?= $page->subheading()->html() ?>––––––––<?= $page->subheading()->html() ?>––––––––<?= $page->subheading()->html() ?>––––</span>
        </div>
  <?php endif ?>
</section>
</div>
<main>
<ul class="grid">
  <?php foreach ($articles as $article): ?>
  <li class="column">
    <?php snippet('blog/excerpt', ['article' =>
    $article]) ?>
  </li>
  <?php endforeach ?>
</ul>
<?php snippet('blog/pagination', ['pagination' =>
$articles->pagination()]) ?>
</main>
<?php snippet('blog/footer') ?>
