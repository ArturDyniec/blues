<?php include_partial('show', array('song' => $song)) ?>

<?php include_partial('clip/indexall', array('clips' => $song->getClips())) ?>