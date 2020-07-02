<?php if ($cover = $note->cover()->toFile()): ?>
<figure>
  <a href="<?= $cover->url() ?>"></a>
</figure>
<?php endif ?>
