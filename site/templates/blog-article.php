<?php snippet('header') ?>
<article class="blog-article">

  <section class="cover">
    <h1 class="xlarge"><?= $page->title() ?></h1>
    <?php if ($page->subheading()->isNotEmpty()): ?>
    <h1><?= $page->subheading() ?></h1>
    <?php endif ?>
  </section>
  <section class="blog-article-overview">


   <div class="slider">
    <?php if ($cover = $page->cover()) : ?>
      <img src="<?= $cover->url() ?>"
          alt="<?= $cover->alt() ?>"
      />
      <?php endif ?>
      <?php foreach ($page->images()->template('blog-article-image') as
        $image): ?>
      <img src="<?= $image->url() ?>" 
          alt="<?= $image->alt() ?>"
      />
      <?php endforeach ?>
    </div>



  <div class="col-2"> 
  <div class="text-counter"></div>
  <p class="date">Datum: <?= $page->date() ?></p>
  <p class="tags">Tags: <?= $page->tags() ?></p>
  <p class="credits">Credits: <?= $page->author() ?></p>
  <p class="theme">Thema: <?= $page->theme() ?></p>
  <p class="description"><?= $page->description() ?></p>

    
    </div>
  </section>
  <?php foreach ($page->fullRow()->toBuilderBlocks() as $column): ?>
  <?php snippet('blocks/' . $column->_key(), ['data' => $column]) ?>
  <?php endforeach ?>

  <footer class="blog-article-footer">
    <?php if (!empty($tags)): ?>
    <ul class="blog-article-tags">
      <?php foreach ($tags as $tag): ?>
      <li>
        <a href="<?= url('blog', ['params' => ['tag' => $tag]]) ?>"
          ><?= $tag ?></a
        >
      </li>
      <?php endforeach ?>
    </ul>
    <?php endif ?>

    <time class="blog-article-date" datetime="<?= $page->date('c') ?>"
      >Published on
      <?= $page->date() ?></time
    >
  </footer>

  <?php snippet('blog/prevnext') ?>
</article>

<?php snippet('blog/footer') ?>
