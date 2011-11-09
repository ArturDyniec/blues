<?php include_partial('global/pager', array('pager' => $pager, 'rule_name' => 'clip_pager')) ?>

    <?php foreach ($sf_data->getRaw('pager')->getResults() as $item): ?>
        <div class="clip">
            <?php include_partial('global/clip', array('ident' => $item->getIdent(), 'width' => '300', 'height' => '200')) ?>
       </div>
    <?php endforeach; ?>

<?php include_partial('global/pager', array('pager' => $pager, 'rule_name' => 'clip_pager')) ?>