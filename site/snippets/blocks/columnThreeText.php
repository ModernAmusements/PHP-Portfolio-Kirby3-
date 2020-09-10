<?php if ($data->heading()->isNotEmpty()): ?>
  <p class="sub-heading"><?= $data->heading() ?></p>
<?php endif ?>
<?= $data->cover()->toFile() ?>




