<?php foreach ($sf_data->getRaw('clips') as $clip): ?>
<div>
  <?php echo $clip->getHtml() ?>
</div>
<?php endforeach; ?>
