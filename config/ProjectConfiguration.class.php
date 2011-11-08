<?php

require_once 'C://xampp//php//PEAR//symfony/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfFtpPlugin');
    $this->enablePlugins('sfFormExtraPlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('csSecurityTaskExtraPlugin');
    $this->enablePlugins('sfProjectAnalyserPlugin');
    $this->enablePlugins('sfPhpDocPlugin');
  }
}
