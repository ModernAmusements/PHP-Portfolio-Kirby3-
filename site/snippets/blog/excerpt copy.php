<article class="blog-article-excerpt">
  <a href="<?= $article->url() ?>">
    <div class="imgage" style="--w: 9; --h:9">
    <div data-link="https://www.ottonova.de/gesund-leben/mentales-training"
            class="data-link track" category="website-cta" action="blog.overview" label="top-mind">
            Mind
        </div>
        <picture>
          <?php if ($cover = $article->cover()): ?>
          <?= $cover->crop(180, 180) ?>
          <?php endif ?>
          </picture>
        </div>
    <div class="text">
    <div class="blog-article-excerpt-subheadline" >
      <span class="label">Visual Experiments between Analog & Digital</span>
    </div>
      <h2 class="blog-article-excerpt-title"><?= $article->title() ?></h2>
      <?php if (($excerpt ?? true) !== false): ?>
          <p class="blog-article-excerpt-text">
            <?= $article->text()->blocks()->excerpt(100) ?>
          </p>
        <?php endif ?>
      
        <div class="blog-meta">
        <span class="date"><time class="blog-article-excerpt-date" datetime="<?= $article->date('c') ?>"><?= $article->date() ?></time></span>
        <span class="more">
        <p>Tags: 3D, Animation, Rendering</p>
        </span>
    </div>
    </div>
  </a>
</article>
