<?php foreach ($data->columnOne()->toBuilderBlocks() as $column): ?>
<?php snippet('blocks/' . $column->_key(), ['data' => $column]) ?>
<?php endforeach ?>




