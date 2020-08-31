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
            <button class="button category-button" data-slug="3D">3D</button>
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
        <div id="collection-information">
          <div class="post-content">
            <div class="post-gallery">
              <?php foreach ($work->videos()->template('work-videos') as
              $image): ?>
              <div class="video-wrapper post-video" data-state="not-init">
                <video
                  playsinline
                  preload="metadata"
                  poster="<?= $image->url() ?>"
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
              <div class="slider-wrapper">
                <figure class="slider slider-0">
                  <?php if ($cover = $work->cover()) : ?>
                  <img
                    class="jslghtbx-thmb active"
                    src="<?= $cover->url() ?>"
                    alt="<?= $cover->alt() ?>"
                    data-jslghtbx="<?= $cover->url() ?>"
                    data-jslghtbx-group="mygroup0"
                    data-jslghtbx-caption="<?= $cover->caption() ?>"
                  />
                  <?php endif ?>
                  <?php foreach ($work->images()->template('work-image') as
                  $image): ?>
                  <img
                    class="jslghtbx-thmb"
                    src="<?= $image->url() ?>"
                    alt="<?= $image->alt() ?>"
                    data-jslghtbx="<?= $image->url() ?>"
                    data-jslghtbx-group="mygroup0"
                    data-jslghtbx-caption="<?= $image->caption() ?>"
                  />
                  <?php endforeach ?>
                </figure>
                <div class="slider-controls">
                  <svg
                    class="slider-control arrow-left"
                    id="btnArrow"
                    viewBox="0 0 16 16"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <polyline
                      points="10.5 5 13.5 8 10.5 11"
                      transform="scale(-1,1) translate(-16,0)"
                    ></polyline>
                    Left
                  </svg>
                  <svg
                    class="slider-control arrow-right"
                    id="btnArrow"
                    viewBox="0 0 16 16"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <polyline points="10.5 5 13.5 8 10.5 11"></polyline>
                    Right
                  </svg>
                </div>
                <ul class="current-indicator">
                  <?php if ($cover = $work->cover()) : ?>
                  <li class="active"><?= $cover->caption() ?></li>
                  <?php endif ?>
                  <?php foreach ($work->images()->template('work-image') as
                  $image): ?>
                  <li class=""><?= $image->caption() ?></li>
                  <?php endforeach ?>
                </ul>
              </div>
            </div>
            <div class="post-info">
              <h4>Description:</h4>
              <?= $work->description()->kt() ?>
              <h4>Contributors:</h4>
              <?= $work->contributors()->kt() ?>
              <h4>Concept:</h4>
              <?= $work->concept()->kt() ?>
              <a href="<?= $work->url() ?>">More</a>
            </div>
          </div>
        </div>
      </article>
      <?php endforeach ?>
    </main>
  </div>
</div>
<?php snippet('footer') ?>
