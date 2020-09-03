<?php
?>
<?php snippet('header') ?>
<main class="work-subpage">
<?php if ($cover = $page->cover()): ?>
  <section class="cover">
  <img class="img" src="<?= $cover->url() ?>" alt="">
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
    <div class="work-images">
        <div class="slider">
          <?php foreach ($page->images()->template('work-image') as
            $image): ?>
          <img src="<?= $image->url() ?>" 
                alt="<?= $cover->alt() ?>"
          />
          <?php endforeach ?>
        </div>
        <div class="text-counter"></div>
      </div>
    <div class="work-legend">
      <p>Paris-based Étienne Garachon is a Franco-Swiss jewellery designer. In 2015, he worked with Golgotha to design a 3D jewellery collection, Glass & Gold.</p>
    </div>
    </article>
    </section>
    </main>
<?php snippet('footer') ?>