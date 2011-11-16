<h1><?php echo $song->getTitle() ?></h1>

<?php $artists = $song->getArtists(); ?>

<?php if (count($artists) > 0): ?>
    <h2>by <?php include_partial('artist/minilist', array('artists' => $artists)) ?></h2>
<?php endif; ?>


<p class="lyrics">
    <?php echo nl2br($song->getLyrics()) ?>
</p>

