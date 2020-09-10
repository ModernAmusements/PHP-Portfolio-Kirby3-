<?php snippet('header') ?>
<article class="blog-article">
  <section class="cover">
    <h1 class="xlarge"><?= $page->title() ?></h1>
    <?php if ($page->subheading()->isNotEmpty()): ?>
    <h1><?= $page->subheading() ?></h1>
    <?php endif ?>
  </section>
 <section class="blog-article-content">
 <section class="full-row">
 <div class="col-1">
    <?php foreach ($page->columnOne()->toBuilderBlocks() as $block): ?>
            <?php snippet('blocks/' . $block->_key(), ['data' => $block]) ?>
    <?php endforeach?>
  </div> 
  <div class="col-2">
    <?php foreach ($page->columnTwo()->toBuilderBlocks() as $block): ?>
            <?php snippet('blocks/' . $block->_key(), ['data' => $block]) ?>
    <?php endforeach?>
  </div>   
  <div class="col-3">
    <?php foreach ($page->columnThree()->toBuilderBlocks() as $block): ?>
            <?php snippet('blocks/' . $block->_key(), ['data' => $block]) ?>
    <?php endforeach?>
  </div>       
 </section>
  <footer class="blog-article-footer">
    <?php if (!empty($tags)): ?>
    <ul class="blog-article-tags">
      <?php foreach ($tags as $tag): ?>
      <li>
        <a href="<?= url('blog', ['params' => ['tag' => $tag]]) ?>"><?= $tag ?></a>
      </li>
      <?php endforeach ?>
    </ul>
    <?php endif ?>

    <time class="blog-article-date" datetime="<?= $page->date('c') ?>">Published on <?= $page->date() ?></time>
  </footer>

  <?php snippet('blog/prevnext') ?>
</article>

<?php snippet('blog/footer') ?>
