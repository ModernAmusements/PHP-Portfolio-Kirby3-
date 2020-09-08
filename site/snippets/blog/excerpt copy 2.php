<div class="blog-article-excerpt">
  <a href="<?= $article->url() ?>">
     <div class="image" style="--w: 9; --h:9">
        <?php if ($cover = $article->cover()): ?>
        <?= $cover->crop(180, 180) ?>
        <?php endif ?>
    </div>
    
    <div class="text">
      <div class="blog-article-excerpt-subheadline">
        <span class="label">Visual Experiments between Analog & Digital</span>
      </div>
      <h2 class="blog-article-excerpt-title"><?= $article->title() ?></h2>
      <?php if (($excerpt ?? true) !== false): ?>
        <p>
          <?= $article->text()->blocks()->excerpt(180) ?>
        </p>
      <?php endif ?>
      <div class="bottom">
        <span class="date">Datum: <time class="blog-article-excerpt-date" datetime="<?= $article->date('c') ?>"><?= $article->date() ?></time> </span>
        <span class="more">Tags: 3D, Animation, Rendering</span>
      </div>
    </div>
    </a>
</div>


<div class="box-blog" itemscope="itemscope" itemtype="http://www.schema.org/SiteNavigationElement">
<a itemprop="url"
    href="https://www.ottonova.de/gesund-leben/mentales-training/mentale-folgen-von-corona"
    category="website-cta" action="blog.overview"
    label="top-mentale-folgen-von-corona-wie-du-deine-psyche-schützt">
    <div class="image">
        <div data-link="https://www.ottonova.de/gesund-leben/mentales-training"
            class="data-link track" category="website-cta" action="blog.overview" label="top-mind">
            Mind
        </div>
        <picture>
            <source type="image/webp"
                srcset="/content/2_works/20200902_etienne-garachon/eg_image1-1600x900.jpg"
                media="(-webkit-min-device-pixel-ratio: 2) and (max-width:992px)">
      
            <img class="lazyload" style="object-position: 0% 0%"
                src="/content/2_works/20200902_etienne-garachon/eg_image1-1600x900.jpg"
                alt="Ment Folgen Corona Bi">
        </picture>
    </div>
    <div class="text">
        <div class="top">
            <span class="label">Gesund Leben </span>
        </div>
        <h3 class="h6" itemprop="name">Mentale Folgen von Corona: Wie du deine Psyche schützt</h3>
        <p class="sm">Angst, Einsamkeit und Beziehungskrisen: Covid-19 kann auch psychisch belasten.
            Wie du dich vor psychischen Auswirkungen schützen kannst.</p>
        <div class="bottom">
            <span class="date">25.08.2020</span>
            <span class="more">
                <svg>
                    <use xlink:href="/2019/img/icons-16px.svg#btnArrow">
                </svg>
            </span>
        </div>
    </div>
</a>
</div>

