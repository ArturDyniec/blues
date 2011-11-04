<?php

/**
 * Generates the documentation of the project.
 *
 * @package    lib
 * @subpackage task
 * @author     Dennis Benkert <spinecrasher@googlemail.com>
 */
class sfGeneratePhpDocTask extends sfBaseTask
{
  /**
   * @see sfTask
   */
  protected function configure()
  {
    $this->namespace        = 'generate';
    $this->name             = 'phpdoc';
    $this->briefDescription = 'Generates documentation of the project';
    $this->detailedDescription = <<<EOF
The [generate:phpdoc|INFO] task creates the documentation based on the docblocks
in your sorcecode for the current project:

  [./symfony generate:phpdoc|INFO]
EOF;
  }

  /**
   * @see sfTask
   */
  protected function execute($arguments = array(), $options = array())
  {
    $config_file = sfConfig::get('sf_config_dir') . '/phpdoc.ini';
    $sfFilesystem = new sfFilesystem();
    
    if ( !file_exists($config_file) )
    {
      $config_file = realpath(dirname(__FILE__) . '/../../config') . '/phpdoc.ini';
    }
    
    $this->log('Starting documentation generation.');
    
    try {
      $sfFilesystem->execute('phpdoc -c ' . $config_file);
    } catch (RuntimeException $e) {
      $errorCode = $e->getCode();
      $errorMessage = 'Could not generate documentation.';
      
      // returned error code looks like the phpdoc command is not available
      if ($errorCode == 127) {
        $errorMessage .= ' Do you have phpdoc installed?';
      }
      
      throw new RuntimeException($errorMessage);
    }
    
    $this->log('Documentation generation done.');
  }
}