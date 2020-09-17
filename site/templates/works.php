<?php

?>
<?php snippet('header') ?>
<div id="barba-wrapper">
  <div class="barba-container one left" data-namespace="index-page">
    <main id="index">
      <nav class="categories">
        <div class="categories-title">
          <p class="small">Filter:</p>
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
        <header 
          data-cursortext="<?= $work->title() ?>" class="post-header">
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
          <article data-cursortext="arrowRight" class="work-description">
            <hr>
            <p class="right small">Datum: <?= $work->date()->toDate() ?></p>
            <p class="medium">Block A</p>
            <hr>
            <p class="large"><?= $work->description() ?></p>
            </article>
            <article class="work-subpage-link">
            <a class="" href="<?= $work->url() ?>"> 
            
            <span class="more">
            Learn More
                <svg>
                <use xlink:href="images/icons/icons-16px.svg#btnArrow">
                </svg>
              </span>
              </a> 
            <hr class="half">
            </article>
        <section class="post-gallery">
        <article data-cursortext="btnPlay" class="work-videos">
              <?php foreach ($work->videos()->template('work-videos') as
              $image): ?>
              <div class="video-wrapper post-video" data-state="not-init">
                <video
                  loop
                  playsinline
                  preload="metadata"
                  poster=""
                >
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
                  <button
                    class="vid-icon vid-fullscreen"
                    data-state="go-fullscreen"
                  >
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
              <?php if ($cover = $work->cover()) : ?>
                <img data-lazy="<?= $cover->url() ?>"
                     alt="<?= $cover->alt() ?>"
                />
                <?php endif ?>
                <?php foreach ($work->images()->template('work-image') as
                  $image): ?>
                <img data-lazy="<?= $image->url() ?>" 
                     alt="<?= $cover->alt() ?>"
                />
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
