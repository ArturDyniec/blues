<?php $count = count($artists) ?>

<?php foreach ($artists as $k => $artist): ?>
    <a href="<?php echo url_for('artist/show?id='.$artist->getId()) ?>">
        <?php echo $artist->getName() ?>
    </a><?php if ($k < $count - 1): ?>, <?php endif; ?>
<?php endforeach; ?>