<?php foreach ($data->columnThree()->toBuilderBlocks() as $column): ?>
  <?php snippet('blocks/' . $column->_key(), ['data' => $column]) ?>
<?php endforeach ?>
