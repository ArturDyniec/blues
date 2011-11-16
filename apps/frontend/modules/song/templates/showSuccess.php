<div class="columns2">
    <div class="left">
        <?php include_partial('show', array('song' => $song)) ?>
    </div>
    <div class="right">
        <?php include_partial('clip/indexall', array('clips' => $song->getClips())) ?>
    </div>
    <br class="clear" />
</div>