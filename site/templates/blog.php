<?php snippet('header') ?>
<div class="cover">
  <?php if (empty($tag) === false): ?>
  <h1 class="xxxlarge">
    <small>Tag:</small>
    <?= html($tag) ?>
    <a href="<?= $page->url() ?>">&times;</a>
  </h1>
  <?php else: ?>
  <h1 class="xxxlarge"><?= $page->heading()->html() ?></h1>
  <?php if ($page->subheading()->isNotEmpty()): ?>
  <h1 class="xxxlarge"><?= $page->subheading()->html() ?></h1>
  <?php endif ?>
  <?php endif ?>
</div>

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

<?php snippet('blog/footer') ?>
