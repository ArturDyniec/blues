<h1><?php echo $artist->getName() ?></h1>

<?php include_partial('song/index_without_pager', array('songs' => $artist->getSongs())) ?>