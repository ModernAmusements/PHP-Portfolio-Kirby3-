<?php
?>
<?php snippet('header') ?>
<main class="work-subpage">
<?php if ($cover = $page->cover()): ?>
  <section class="cover">
  <img data-lightbox class="img" src="<?= $cover->url() ?>" alt="">
  <time class=""><?= $page->date()->toDate('d F Y') ?></time>
</div>
</section>
<?php endif ?>
<section class="work-subpage-content">
  <article class="subpage-information">
    <div class="subpage-meta">
        <p class="small">Block A</p>
        <h2 class="title"><?= $page->title() ?></h2>
        <p class="small">Tags:</p>
        <?php foreach ($page->tags()->split() as $tag): ?>
        <a class="post-meta"
          ><p class="tags small"><?= $tag ?></p></a
        >
        <?php endforeach ?>
    </div>
    <div class="subpage-description">
      <p class="small">Block B</p>
      <h3 class="large"><?= $page->description() ?></h3>
    </div>
    <div class="subpage-concept">
      <p class="small">Block C</p>
      <h3 class="large"><?= $page->concept() ?></h3>
    </div>
    </article>
    </section>
    </main>
<?php snippet('footer') ?>