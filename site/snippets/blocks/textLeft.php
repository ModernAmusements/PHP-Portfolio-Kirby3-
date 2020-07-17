  <?php if ($data->heading()->isNotEmpty()): ?>
    <p><strong><?= $data->heading() ?></strong></p>
  <?php endif ?>
  <p>
    <?= $data->text() ?>
  </p>
