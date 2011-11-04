<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $artist->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $artist->getName() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('artist/edit?id='.$artist->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('artist/index') ?>">List</a>
