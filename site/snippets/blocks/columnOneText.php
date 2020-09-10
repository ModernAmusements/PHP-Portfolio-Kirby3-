<article class="description">
<?php if ($data->heading()->isNotEmpty()): ?>
  <p class="sub-heading"><?= $data->heading() ?></p>
<?php endif ?>
  <h1>
    <?= $data->text() ?>
  </h1>
</article>