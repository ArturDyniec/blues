<?php include_partial('show', array('song' => $song)) ?>

<?php include_partial('clip/index', array('clips' => $song->getClips())) ?>