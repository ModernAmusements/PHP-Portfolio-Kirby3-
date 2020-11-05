<?php snippet('header') ?>
<main>
  <article class="blog-article">
    <section class="blog-article-overview">
      <div class="slider">
        <?php if ($cover = $page->cover()) : ?>
        <img
          class="lazy"
          data-lazy="<?= $cover->crop(854, 480, ['quality' => 100])->url() ?>"
          alt="<?= $cover->alt() ?>"
        />
        <?php endif ?>
        <?php foreach ($page->images()->template('blog-article-image') as
        $image): ?>
        <img
          class="lazy"
          data-lazy="<?= $image->crop(854, 480, ['quality' => 100])->url() ?>"
          alt="<?= $image->alt() ?>"
        />
        <?php endforeach ?>
      </div>
      <div class="col-2">
        <h1><?= $page->title() ?></h1>
        <?php if ($page->subheading()->isNotEmpty()): ?>

        <?= $page->subheading()->kt() ?>

        <?php endif ?>
        <span class="span-counter">
          Bilder:
          <div class="text-counter"></div>
        </span>

        <span datetime="<?= $page->date('c') ?>">
          Datum:
          <p><?= $page->date() ?></p>
        </span>
        <span>
          Credits:
          <p><?= $page->author() ?></p>
        </span>
        <span>
          Thema:
          <?= $page->theme()->kt() ?>
        </span>
        <span>
          Beschreibung:
          <?= $page->description()->kt() ?>
        </span>
        <div class="blog-subpage-meta">
          <p class="tags">Tags:</p>
          <?php foreach ($page->tags()->split() as $tag): ?>
          <tags class="post-meta">
            <p class="tags small"><?= $tag ?></p>
          </tags>
          <?php endforeach ?>
        </div>
      </div>
    </section>

    <?php foreach ($page->fullRow()->toBuilderBlocks() as $block): ?>
    <?php snippet('blocks/' . $block->_key(), ['data' => $block]) ?>
    <?php endforeach ?>
  </article>
  <!-- FOOTER BLOG -->
  <!-- TAGS -->
  <?php if (!empty($tags)): ?>
  <div class="footer-tags">
   <?= $page->subheading()->kt() ?>
    <div class="blog-article-tags">
      <?php foreach ($tags as $tag): ?>
      <a href="<?= url('blog', ['params' => ['tag' => $tag]]) ?>"
        ><?= $tag ?></a
      >
      <?php endforeach ?>
    </div>
  </div>
  <?php endif ?>
  <footer-blog-subpage>
    <section id="mobile-blog-subpage">
      <article class="information">
        <div class="row-1">
          <strong>
            <p>DATE</p>
          </strong>
        </div>
        <div class="row-2">
          <span>
            <p><?= $page->date() ?></p>
          </span>
          <span>
            <p><?= $page->title() ?></p>
          </span>
          <p>All Rights Reserved©</p>
        </div>
      </article>
      <article class="information-1">
        <div class="row-1">
          <strong>
            <p>Credits</p>
          </strong>
        </div>
        <div class="row-2">
          <?php foreach ($page->author()->split() as $tag): ?>
          <span>
            <p><?= $tag ?></p>
          </span>
          <?php endforeach ?>
        </div>
      </article>
      <article class="information-2">
        <div class="row-1">
          <strong>
            <p>Theme</p>
          </strong>
        </div>
        <div class="row-2">
          <span>
            <p><?= $page->theme() ?></p>
          </span>
        </div>
      </article>
    </section>
    <section id="desktop-blog-subpage">
      <article class="information">
        <div class="row-1">
          <strong>
            <p>Date</p>
          </strong>
        </div>
        <div class="row-2">
          <span>
            <p><?= $page->date() ?></p>
          </span>
          <span>
            <p><?= $page->title() ?></p>
          </span>
          <p>All Rights Reserved©</p>
        </div>
      </article>
      <article class="information-1">
        <div class="row-1">
          <strong>
            <p>Credits</p>
          </strong>
        </div>
        <div class="row-2">
          <?php foreach ($page->author()->split() as $tag): ?>
          <span>
            <p><?= $tag ?></p>
          </span>
          <?php endforeach ?>
        </div>
      </article>
      <article class="information-2">
        <div class="row-1">
          <strong>
            <p class="medium">Theme</p>
          </strong>
        </div>
        <div class="row-2">
          <span>
          <?= $page->theme()->kt() ?>
          </span>
        </div>
      </article>
    </section>
    <?php snippet('blog/prevnext') ?>
  </footer-blog-subpage>
</main>
<?php snippet('subpageFooter/subpage') ?>
