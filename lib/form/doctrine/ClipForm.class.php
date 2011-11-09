<?php

/**
 * Clip form.
 *
 * @package    Blues
 * @subpackage form
 * @author     Włodzimierz Gajda
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ClipForm extends BaseClipForm
{
  public function configure()
  {

    parent::setup();

    unset(
      $this['created_at'],
      $this['updated_at']
    );

    
  }
}
