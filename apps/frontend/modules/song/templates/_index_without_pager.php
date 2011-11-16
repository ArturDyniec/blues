<ul>
    <?php foreach ($songs as $item): ?>
        <li>
            <a href="<?php echo url_for('song/show?id='.$item->getId()) ?>">
                <?php echo $item->getTitle() ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
