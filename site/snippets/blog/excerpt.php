<article class="blog-article-excerpt">
  <a href="<?= $article->url() ?>">
    <div class="image">
      <?php if ($cover = $article->cover()): ?>
      <?= $cover->crop(600, 600) ?>
      <?php endif ?>
      <div
        data-link=""
        class="data-link"
      >
        NEW
      </div>
    </div>
    <div class="text">
      <div class="blog-article-excerpt-subheadline">
      <?php if ($article->subheading()->isNotEmpty()): ?>
        <span class="label"><?= $article->subheading() ?></span>
        <?php endif ?>
      </div>
      <h2 class="blog-article-excerpt-title"><?= $article->title() ?></h2>
      <?php if (($excerpt ?? true) !== false): ?>
      <p class="blog-article-excerpt-text">
        <?= $article->description()->blocks()->excerpt(180) ?>
      </p>
      <?php endif ?>
      <div class="bottom">
        <span class="date"
          >Datum:
          <time
            class="blog-article-excerpt-date"
            datetime="<?= $article->date('c') ?>"
            ><?= $article->date() ?></time
          >
        </span>
        <span class="tags">Tags: <?= $article->tags() ?></span>
      </div>
    </div>
  </a>
</article>
