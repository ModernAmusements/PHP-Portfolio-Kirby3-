<?php snippet('header') ?>
<div id="content">
<div id="information-wrap">
    <div id="information-content" class="information-content-wrap">
        <?php foreach ($page->columnLeft()->toBuilderBlocks() as $block): ?>
            <?php snippet('blocks/' . $block->_key(), ['data' => $block]) ?>
        <?php endforeach?>
    </div>
    <div id="license" class="information-content-wrap">
    <meta charset="utf-8">
        <?php foreach ($page->columnRight()->toBuilderBlocks() as $block): ?>
            <?php snippet('blocks/' . $block->_key(), ['data' => $block]) ?>
        <?php endforeach?>
    </div>
</div>
<script>
    $('#license').find('strong').parent('p').addClass('information-section-wrap');
    $('#license').find('em').parents('p').addClass('information-section');
</script>
</div>
<?php snippet('footer') ?>