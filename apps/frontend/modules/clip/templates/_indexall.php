<?php foreach ($sf_data->getRaw('clips') as $clip): ?>
        <div>
            <?php include_partial('global/clip', array('ident' => $clip->getIdent(), 'width' => '300', 'height' => '200')) ?>
       </div>
<?php endforeach; ?>