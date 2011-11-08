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


<div id="content" lang="la">
    <div class="text">
        <?php echo $sf_content ?>
    </div>
    <div class="push"></div>
</div>

<header>
  <div>
    <h1><a href="<?php echo url_for('@homepage') ?>">Blues<span></span></a></h1>
    <nav>
        <ul>
            <li id="o1"><a href="<?php echo url_for('artist/index') ?>">artist<span></span></a></li>
            <li id="o2"><a href="<?php echo url_for('song/index') ?>">songs<span></span></a></li>
            <li id="o3"><a href="<?php echo url_for('clip/index') ?>">clips<span></span></a></li>
        </ul>
    </nav>
  </div>      
</header>


<footer>
    <div>
        &copy;2011 by <a href="http://gajdaw.pl">gajdaw</a> <br/>
        <a href="<?php echo public_path('backend.php') ?>">admin</a>
    </div>
</footer>

</body>
</html>
