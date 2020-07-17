<?php foreach ($data->columnRight()->toBuilderBlocks() as $column): ?>
  <?php snippet('blocks/' . $column->_key(), ['data' => $column]) ?>
<?php endforeach ?>
