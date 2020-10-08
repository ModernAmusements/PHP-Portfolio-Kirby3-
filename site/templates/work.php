<?php
?>
<?php snippet('header') ?>
<main class="work-subpage">
  <?php if ($cover = $page->cover()->resize(1080)): ?>
  <section class="cover">
    <img class="lazy" data-src="<?= $cover->url() ?>" />
    <time class=""><?= $page->date()->toDate('d F Y') ?></time>
  </section>
  <?php endif ?>
  <section class="work-subpage-content">
    <article class="subpage-information">
      <div class="subpage-meta">
        <p class="first-row">Block A</p>
        <h2 class="title"><?= $page->title() ?></h2>
        <p>Tags:</p>
        <?php foreach ($page->tags()->split() as $tag): ?>
        <a class="post-meta">
          <p class="tags small"><?= $tag ?></p>
        </a>
        <?php endforeach ?>
        <br />
        <p>Client:</p>
        <h4><?= $page->client() ?></h4>
        <p>Involved:</p>
        <h4><?= $page->contributors() ?></h4>
      </div>
      <div class="subpage-description">
        <p>Block B</p>
        <h3 class="large"><?= $page->description() ?></h3>
      </div>
      <div class="subpage-concept">
        <p>Block C</p>
        <h3 class="large"><?= $page->concept() ?></h3>
      </div>
      <div id="barba-wrapper">
        <div class="barba-container one left" data-namespace="index-page">
          <div class="subpage-gallery" id="index">
            <section class="post-gallery">
              <article class="work-videos">
                <?php foreach ($page->videos()->template('work-videos') as
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
                    <button
                      class="vid-icon vid-fullscreen"
                      data-state="go-fullscreen"
                    >
                      Fullscreen
                    </button>
                    <div class="vid-progress-wrap" max="14.53756">
                      <div
                        class="vid-progress-bar"
                        data-value="0"
                        min="0"
                      ></div>
                    </div>
                  </div>
                  <hr />
                  <p class="small">
                    Exercitation incididunt consectetur culpa ipsum sit eiusmod
                    enim.
                  </p>
                </div>
                <?php endforeach ?>
              </article>
              <article class="work-images">
                <div class="slider">
                  <?php if ($image = $page->image()->resize(1080)): ?>
                  <?php foreach ($page->images()->template('work-image') as
                  $image): ?>
                  <img
                    data-lazy="<?= $image->url() ?>"
                    alt="<?= $cover->alt() ?>"
                  />
                  <?php endforeach ?>
                  <?php endif ?>
                </div>
                <div class="text-counter"></div>
                <hr />
                <div class="work-legend">
                  <p class="small">
                    Exercitation incididunt consectetur culpa ipsum sit eiusmod
                    enim.
                  </p>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </article>
  </section>
</main>
<?php snippet('subpageFooter/subpage') ?>
<?php snippet('footer/workFooter') ?>
