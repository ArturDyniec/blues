

<?php include_partial('global/pager', array('pager' => $pager, 'rule_name' => 'artist_pager')) ?>

<ul>
    <?php foreach ($sf_data->getRaw('pager')->getResults() as $item): ?>
        <li>
            <a href="<?php echo url_for('artist/show?id='.$item->getId()) ?>">
                <?php echo $item->getName() ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php include_partial('global/pager', array('pager' => $pager, 'rule_name' => 'artist_pager')) ?>