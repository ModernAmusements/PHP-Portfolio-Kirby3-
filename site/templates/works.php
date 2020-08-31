<?php

?>
<?php snippet('header') ?>
<div id="barba-wrapper">
  <div class="barba-container one left" data-namespace="index-page">
    <main id="index">
      <nav class="categories">
        <div class="categories-title">
          <p class="medium">Filter:</p>
          <svg viewBox="0 0 23 19" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.5001 19L0.674805 0.25L22.3254 0.250002L11.5001 19Z" />
          </svg>
        </div>
        <div class="categories-pills">
          <li class="category-li active">
            <button class="button category-button" data-slug="all">All</button>
          </li>
          <li class="category-li">
            <button class="button category-button" data-slug="Typography">
              Typography
            </button>
          </li>
          <li class="category-li">
            <button class="button category-button" data-slug="3d">3d</button>
          </li>
          <li class="category-li">
            <button class="button category-button" data-slug="Animation">
              Animation
            </button>
          </li>
          <li class="category-li">
            <button class="button category-button" data-slug="Graphic">
              Graphic
            </button>
          </li>
          <li class="category-li">
            <button class="button category-button" data-slug="Experimental">
              Experimental
            </button>
          </li>
        </div>
      </nav>
      <?php foreach ($page->children()->listed()->sortBy('date', 'desc') as
      $work) : ?>
      <article
        class="post"
        data-categories="<?= $tags = implode(' ', $work->tags()->split(','));?> all"
      >
        <header class="post-header">
          <h1 class="post-title"><?= $work->title() ?></h1>
          <div class="post-meta-information">
            <?php foreach ($work->tags()->split() as $tag): ?>
            <a class="post-meta"
              ><p class="small"><?= $tag ?></p></a
            >
            <?php endforeach ?>
            <a class="post-meta"
              ><p class="small"><?= $work->date()->toDate('Y') ?></p></a
            >
          </div>
          <svg viewBox="0 0 50 50">
            <line class="plus-toggle" x1="49.5" y1="25" x2="0.5" y2="25" />
            <line class="plus-toggle" x1="25" y1="49.5" x2="25" y2="0.5" />
          </svg>
        </header>
        <section class="post-content">
          <article class="work-description">
            <hr>
              <p class="medium">Datum: <?= $work->date()->toDate() ?></p>
            <hr>
            <p class="large"><?= $work->description()->kt() ?></p>
            </article>
            <article class="work-subpage-link">
              <a href="<?= $work->url() ?>"><p class="medium">More</p></a>
              <hr>
            </article>
            <article class="work-images">
              <div class="slider">
              <?php if ($cover = $work->cover()) : ?>
                <img src="<?= $cover->url() ?>"
                     alt="<?= $cover->alt() ?>"
                />
                <?php endif ?>
                <?php foreach ($work->images()->template('work-image') as
                  $image): ?>
                <img src="<?= $image->url() ?>" 
                     alt="<?= $cover->alt() ?>"
                />
                <?php endforeach ?>
              </div>
              <div class="text-counter"></div>
            </article>
          </section>
        </article>
      <?php endforeach ?>
    </main>
  </div>
</div>
<?php snippet('footer') ?>
