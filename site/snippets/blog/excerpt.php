<article class="blog-article-excerpt">
  <a href="<?= $article->url() ?>">
    <div class="image">
      <?php if ($cover = $article->cover()): ?>
      <?= $cover->crop(180, 180) ?>
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
        <span class="label">Visual Experiments between Analog & Digital</span>
      </div>
      <h2 class="blog-article-excerpt-title"><?= $article->title() ?></h2>
      <?php if (($excerpt ?? true) !== false): ?>
      <p class="blog-article-excerpt-text">
        <?= $article->text()->blocks()->excerpt(180) ?>
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
        <span class="tags">Tags: 3D, Animation, Rendering</span>
      </div>
    </div>
  </a>
</article>
