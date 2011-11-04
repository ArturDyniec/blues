<h1>Artists List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($artists as $artist): ?>
    <tr>
      <td><a href="<?php echo url_for('artist/show?id='.$artist->getId()) ?>"><?php echo $artist->getId() ?></a></td>
      <td><?php echo $artist->getName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('artist/new') ?>">New</a>
