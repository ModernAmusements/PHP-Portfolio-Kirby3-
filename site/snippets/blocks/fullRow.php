<?php foreach ($data->fullRow()->toBuilderBlocks() as $block): ?>
  <?php snippet('blocks/' . $block->_key(), ['data' => $block]) ?>
<?php endforeach ?>



