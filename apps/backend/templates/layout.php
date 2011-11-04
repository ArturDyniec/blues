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
        <ul>
            <li><a href="<?php echo public_path('') ?>">podgląd</a></li>          
            <?php if ($sf_user->isAuthenticated()): ?>
                <li><a href="<?php echo url_for('tools/todo') ?>">to do</a></li>                    
                <li><a href="<?php echo url_for('song') ?>">songs</a></li>          
                <li><a href="<?php echo url_for('clip') ?>">clips</a></li>
                <li><a href="<?php echo url_for('artist') ?>">artists</a></li>
                <li><a href="<?php echo url_for('tools/autoident') ?>">autoidents</a></li>
                <li><a href="<?php echo url_for('sfGuardAuth/signout') ?>">wyloguj</a></li>      
            <?php endif; ?>                
        </ul>
        <?php echo $sf_content ?>
    </body>
</html>
