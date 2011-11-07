<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />    
    <?php include_title() ?>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
<body>
<header>
  <div>
    <h1><a href="<?php echo url_for('@homepage') ?>">Blues<span></span></a></h1>
    <nav>
        <ul>
            <li id="o1"><a href="<?php echo url_for('artist/index') ?>">">artist<span></span></a></li>
            <li id="o2"><a href="<?php echo url_for('song/index') ?>">songs<span></span></a></li>
            <li id="o3"><a href="<?php echo url_for('clip/index') ?>">clips<span></span></a></li>
        </ul>
    </nav>
  </div>      
</header>

<div id="content">
    <?php echo $sf_content ?>  
</div>

<footer>
    &copy;2011 by student <br/>
    <a href="<?php echo public_path('backend.php') ?>">admin</a>    
</footer>

</body>
</html>
