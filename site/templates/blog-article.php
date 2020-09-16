<?php snippet('header') ?>
<main>
<article class="blog-article">
  <section class="blog-article-overview">
  <div class="slider">
      <?php if ($cover = $page->cover()) : ?>
      <img src="<?= $cover->crop(854, 480, ['quality' => 50])->url() ?>" alt="<?= $cover->alt() ?>" />
      <?php endif ?>
      <?php foreach ($page->images()->template('blog-article-image') as $image):
      ?>
      <img src="<?= $image->crop(854, 480, ['quality' => 50])->url() ?>" />
      <?php endforeach ?>
    </div>
    <div class="col-2">
      <h1><?= $page->title() ?></h1>
      <?php if ($page->subheading()->isNotEmpty()): ?>
      <h2 class="sub-heading"><em><?= $page->subheading() ?></em></h2>
      <?php endif ?>
      <div class="text-counter"></div>
      <p class="date" datetime="<?= $page->date('c') ?>">
        Datum:
        <?= $page->date() ?>
      </p>
      <p class="tags">
        Tags:
        <?= $page->tags() ?>
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
    </div>
  </section>

  <?php foreach ($page->fullRow()->toBuilderBlocks() as $column): ?>
    <?php snippet('blocks/' . $column->_key(), ['data' => $column]) ?>
  <?php endforeach ?>

  <footer class="blog-article-footer">
    <?php if (!empty($tags)): ?>
      <div class="blog-article-tags">
      <?php foreach ($tags as $tag): ?>

        <a href="<?= url('blog', ['params' => ['tag' => $tag]]) ?>"><?= $tag ?></a>

      <?php endforeach ?>
    </div>
    <?php endif ?>

  </footer>
  <?php snippet('blog/prevnext') ?>
</article>
</main>
<?php snippet('blog/footer') ?>
