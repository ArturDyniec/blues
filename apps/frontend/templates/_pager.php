<br class="clear"/>
<?php if ($pager->haveToPaginate()): ?>

<div class="pager2">
    <?php if ($pager->getPage() > 1): ?>
        <a href="<?php echo url_for('@' . $rule_name . '?page=' . $pager->getFirstPage()); ?>"><?php echo image_tag('pager2/first', array('alt' => '')) ?></a>
    <?php else: ?>
        <?php echo image_tag('pager2/first-brak', array('alt' => '')) ?>
    <?php endif; ?>

    <?php if ($pager->getPage() > 1): ?>
        <a href="<?php echo url_for('@' . $rule_name . '?page=' . ($pager->getPage() - 1)); ?>"><?php echo image_tag('pager2/prev', array('alt' => '')) ?></a>
    <?php else: ?>
        <?php echo image_tag('pager2/prev-brak', array('alt' => '')) ?>
    <?php endif; ?>

<?php
/*
    ...
*/
?>

    <?php foreach ($pager->getLinks() as $page): ?>
        <?php if ($page == $pager->getPage()): ?>
            &nbsp;<strong><?php echo $page; ?></strong>&nbsp;
        <?php else: ?>
            &nbsp;<a href="<?php echo url_for('@' . $rule_name . '?page=' . $page); ?>"><?php echo $page ?></a>&nbsp;
        <?php endif; ?>
    <?php endforeach ?>

<?php
/*
    ...
*/
?>

    <?php if ($pager->getPage() < $pager->getLastPage()): ?>
        <a href="<?php echo url_for('@' . $rule_name . '?page=' . ($pager->getPage() + 1)); ?>"><?php echo image_tag('pager2/next', array('alt' => '')) ?></a>
    <?php else: ?>
        <?php echo image_tag('pager2/next-brak', array('alt' => '')) ?>
    <?php endif; ?>


    <?php if ($pager->getPage() < $pager->getLastPage()): ?>
        <a href="<?php echo url_for('@' . $rule_name . '?page=' . $pager->getLastPage()); ?>"><?php echo image_tag('pager2/last', array('alt' => '')) ?></a>
    <?php else: ?>
        <?php echo image_tag('pager2/last-brak', array('alt' => '')) ?>
    <?php endif; ?>

</div>
<?php endif; ?>
<br class="clear"/>