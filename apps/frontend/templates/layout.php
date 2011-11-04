<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
      <ol>
          <li><a href="<?php echo public_path('backend.php') ?>">admin</a></li>
          <li><a href="<?php echo url_for('clip/index') ?>">clips</a></li>
          <li><a href="<?php echo url_for('song/index') ?>">songs</a></li>
          <li><a href="<?php echo url_for('artist/index') ?>">artists</a></li>
      </ol>
    <?php echo $sf_content ?>
  </body>
</html>
