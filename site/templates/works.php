<?php

?>
<?php snippet('header') ?>
<div id="barba-wrapper">
  <div class="barba-container one left" data-namespace="index-page">
    <main id="index">
      <nav class="categories">
        <div class="categories-title">
          <strong>
            <a>Filter:</a>
          </strong>
        </div>
        <ul class="categories-pills">
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
        </ul>
      </nav>
      <?php foreach ($page->children()->listed()->sortBy('date', 'desc') as
      $work) : ?>
      <article class="post" data-categories="<?= $tags = implode(' ', $work->tags()->split(','));?> all">
        <header class="post-header">
          <h1 class="post-title"><?= $work->title() ?></h1>
          <div class="post-meta-information">
            <tags class="post-meta">
              <p class="small"><?= $work->date()->toDate('Y') ?></p>
            </tags>
            <?php foreach ($work->tags()->split() as $tag): ?>
            <tags class="post-meta">
              <p class="small"><?= $tag ?></p>
            </tags>
            <?php endforeach ?>
          </div>
          <label class="post-header-toggle">
            <span class="post-chevron"></span>
          </label>
        </header>
        <section class="post-content">
          <article class="work-description">
            <section>
              <p class="small">Cient:</p>
            </section>
            <section>
              <p class="medium"><?= $work->client() ?></p>
            </section>
            <section>
              <p class="small">Contributors:</p>
            </section>
            <section>
              <p class="medium"><?= $work->contributors() ?></p>
            </section>
            <section>
              <p class="small">Date:</p>
            </section>
            <section>
              <p class="medium"><?= $work->date()->toDate() ?></p>
            </section>
            <section>
              <p class="small">Project:</p>
            </section>
            <section>
              <p class="medium"><?= $work->description() ?></p>
            </section>
          </article>
          <article class="work-subpage-link">
            <a class="" href="<?= $work->url() ?>">
              <span class="more">Explore Project
                <svg class="link-arrow">
                  <use xlink:href="images/icons/icons-16px.svg#btnArrow">
                </svg>
              </span>
            </a>
            <hr>
          </article>
          <section class="post-gallery">
            <article class="work-videos">
              <?php foreach ($work->videos()->template('work-videos') as
              $image): ?>
              <div class="video-wrapper post-video" data-state="not-init">
                <video loop playsinline preload="metadata" poster="">
                  <source src="<?= $image->url() ?>" type="video/mp4" />
                </video>
                <button class="intro-play"><span>Play</span></button>
                <div class="vid-controls">
                  <button class="vid-icon vid-playpause" data-state="play">
                    Play
                  </button>
                  <button class="vid-icon vid-mute" data-state="mute">
                    Sound
                  </button>
                  <button class="vid-icon vid-fullscreen" data-state="go-fullscreen">
                    Fullscreen
                  </button>
                  <div class="vid-progress-wrap" max="14.53756">
                    <div class="vid-progress-bar" data-value="0" min="0"></div>
                  </div>
                </div>
              </div>
              <?php endforeach ?>
            </article>
            <article class="work-images">
              <div class="slider">
                <?php if ($cover = $work->cover()->resize(1080)) : ?>
                <img data-lazy="<?= $cover->url() ?>" alt="<?= $cover->alt() ?>" />
                <?php endif ?>


                <?php foreach ($work->images()->template('work-image') as
                  $image): ?>
                <img data-lazy="<?= $image->resize(1080)->url() ?>" alt="<?= $cover->alt() ?>" />
                <?php endforeach ?>
              </div>
              <div class="text-counter"></div>
            </article>
          </section>
        </section>
      </article>
      <?php endforeach ?>
    </main>
  </div>
</div>
<?php snippet('footer') ?>
<?php snippet('footer/workFooter') ?>