<ol>
    <?php foreach ($songs as $song): ?>
        <li>
            <a href="<?php echo url_for('song/show?id='.$song->getId()) ?>">
                <?php echo $song->getTitle() ?>
            </a>
        </li>
    <?php endforeach; ?>
</ol>