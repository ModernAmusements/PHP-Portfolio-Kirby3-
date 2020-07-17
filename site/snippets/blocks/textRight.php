<?php if ($data->heading()->isNotEmpty()): ?>
  <p><strong><em><?= $data->date() ?></em> <?= $data->heading() ?></strong></p>
<?php endif ?>
<p>
  <?= $data->text()->kt() ?>
</p>





