<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $clip->getId() ?></td>
    </tr>
    <tr>
      <th>Html:</th>
      <td><?php echo $clip->getHtml() ?></td>
    </tr>
    <tr>
      <th>Ident:</th>
      <td><?php echo $clip->getIdent() ?></td>
    </tr>
    <tr>
      <th>Width:</th>
      <td><?php echo $clip->getWidth() ?></td>
    </tr>
    <tr>
      <th>Height:</th>
      <td><?php echo $clip->getHeight() ?></td>
    </tr>
    <tr>
      <th>Ble:</th>
      <td><?php echo $clip->getBle() ?></td>
    </tr>
    <tr>
      <th>Song:</th>
      <td><?php echo $clip->getSongId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('clip/edit?id='.$clip->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('clip/index') ?>">List</a>
