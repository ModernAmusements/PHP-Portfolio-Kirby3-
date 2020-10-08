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
        />
        <?php endforeach ?>
      </div>
      <div class="col-2">
        <h1><?= $page->title() ?></h1>
        <?php if ($page->subheading()->isNotEmpty()): ?>
        <h2 class="sub-heading">
          <em><?= $page->subheading() ?></em>
        </h2>
        <?php endif ?>
        <div class="text-counter"></div>
        <p class="date" datetime="<?= $page->date('c') ?>">
          Datum:
          <?= $page->date() ?>
        </p>
        <p class="credits">
          Credits:
          <?= $page->author() ?>
        </p>
        <p class="theme">
          Thema:
          <?= $page->theme() ?>
        </p>
        <p class="description"><?= $page->description() ?></p>
        <div class="blog-subpage-meta">
          <p class="tags">Tags:</p>
          <?php foreach ($page->tags()->split() as $tag): ?>
          <a class="post-meta">
            <p class="tags small"><?= $tag ?></p>
          </a>
          <?php endforeach ?>
        </div>
      </div>
    </section>

    <?php foreach ($page->fullRow()->toBuilderBlocks() as $column): ?>
    <?php snippet('blocks/' . $column->_key(), ['data' => $column]) ?>
    <?php endforeach ?>
  </article>
  <!-- FOOTER BLOG -->
  <!-- TAGS -->
  <?php if (!empty($tags)): ?>
  <div class="footer-tags">
    <h4 class="blog-footer-tags-heading"><?= $page->subheading() ?></h4>
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
          <a>
            <p><?= $page->date() ?></p>
          </a>
          <a>
            <p><?= $page->title() ?></p>
          </a>
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
          <a>
            <p><?= $tag ?></p>
          </a>
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
          <a>
            <p><?= $page->theme() ?></p>
          </a>
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
          <a>
            <p><?= $page->date() ?></p>
          </a>
          <a>
            <p><?= $page->title() ?></p>
          </a>
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
          <a>
            <p><?= $tag ?></p>
          </a>
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
          <a>
            <p><?= $page->theme() ?></p>
          </a>
        </div>
      </article>
    </section>
    <?php snippet('blog/prevnext') ?>
  </footer-blog-subpage>
</main>
<?php snippet('footer') ?>
